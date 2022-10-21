<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fonction;
use Illuminate\Http\Request;

use App\Http\Requests\FonctionStoreRequest;
use App\Http\Requests\FonctionUpdateRequest;
use App\Repositories\FonctionRepository;

class FonctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $fonctionRepo;

    public function __construct(FonctionRepository $fonctionRepo)
    {
        $this->fonctionRepo = $fonctionRepo;
    }

    public function index()
    {
        $fonctions = $this->fonctionRepo->getlatest();

        $total = $fonctions->count();
        $totalV = $fonctions->where('description',NULL)->count();
        $totalNV = $total - $totalV;

        return view('fonctions.index',compact('fonctions','totalNV','totalV','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fonctions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FonctionStoreRequest $request)
    {
        $this->fonctionRepo->makeStore($request->validated());
        return redirect()->route('fonctions.index')->with('success','Fonction enregistrée avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fonction  $fonction
     * @return \Illuminate\Http\Response
     */
    public function show(Fonction $fonction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fonction  $fonction
     * @return \Illuminate\Http\Response
     */
    public function edit(Fonction $fonction)
    {
        $fonction = $this->fonctionRepo->find($fonction->id);

        return view('fonctions.edit',compact('fonction'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fonction  $fonction
     * @return \Illuminate\Http\Response
     */
    public function update(FonctionUpdateRequest $request, Fonction $fonction)
    {
        $this->fonctionRepo->makeUpdate($fonction->id,$request->validated());

        return redirect()->route('fonctions.index')->with('success', 'Fonction mise à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fonction  $fonction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fonction $fonction)
    {
        $fonction->delete();

        return redirect()->route('fonctions.index')->with('success','Catégorie supprimée avec succès');

    }
}
