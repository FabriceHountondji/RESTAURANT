<?php

namespace App\Http\Controllers\Admin;

use App\Models\Acteur;
use Illuminate\Http\Request;

use App\Http\Requests\ActeurStoreRequest;
use App\Http\Requests\ActeurUpdateRequest;

use App\Repositories\ActeurRepository;
use App\Repositories\UserRepository;
use App\Repositories\FonctionRepository;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $acteurRepo;
    protected $fonctionRepo;
    protected $userRepo;

    public function __construct(ActeurRepository $acteurRepo,FonctionRepository $fonctionRepo,UserRepository $userRepo)
    {
        $this->acteurRepo = $acteurRepo;
        $this->fonctionRepo = $fonctionRepo;
        $this->userRepo = $userRepo;
    }

    public function index()
    {
        $acteurs = $this->acteurRepo->getlatest();
        $total = $acteurs->count();

        return view('acteurs.index', compact('acteurs','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fonctions = $this->fonctionRepo->getlatest();
        $users = $this->userRepo->getlatest();
        return view('acteurs.create',compact('fonctions','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActeurStoreRequest $request)
    {
        $acteur = $this->acteurRepo->makeStore($request->validated());

        return redirect()->route('acteurs.index')->with('success','Acteur enregistré avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function show(Acteur $acteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Acteur $acteur)
    {
        $fonction = $this->fonctionRepo->find($acteur->fonction->id);
        $user = $this->userRepo->find($acteur->user->id);
        $acteur = $this->acteurRepo->find($acteur->id);
        $fonctions = $this->fonctionRepo->all();
        $users = $this->userRepo->all();

        return view('acteurs.edit',compact('fonction','fonctions','acteur','user','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function update(ActeurUpdateRequest $request, Acteur $acteur)
    {
        $this->acteurRepo->makeUpdate($acteur->id,$request->validated());

        return redirect()->route('acteurs.index')->with('success', 'Acteur mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acteur $acteur)
    {
        $acteur->delete();

        return redirect()->route('acteurs.index')->with('success','Acteur supprimé avec succès');
    }
}
