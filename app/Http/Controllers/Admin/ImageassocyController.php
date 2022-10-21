<?php

namespace App\Http\Controllers\Admin;

use App\Models\Imageassocy;
use Illuminate\Http\Request;

use App\Http\Requests\ImageassocyStoreRequest;
use App\Http\Requests\ImageassocyUpdateRequest;

use App\Repositories\ImageassocyRepository;
use App\Repositories\MenuRepository;
use App\Repositories\ImageRepository;

class ImageassocyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $imageRepo;
    protected $menuRepo;
    protected $imageassocyRepo;

    public function __construct(ImageRepository $imageRepo, MenuRepository $menuRepo, ImageassocyRepository $imageassocyRepo)
    {
        $this->imageRepo = $imageRepo;
        $this->menuRepo = $menuRepo;
        $this->imageassocyRepo = $imageassocyRepo;
    }

    public function index()
    {
        $imageassocies = $this->imageassocyRepo->getlatest();
        return view('imageassocies.index', compact('imageassocies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = $this->imageRepo->getlatest();
        $produits = $this->produitRepo->getlatest();
        return view('imageassocies.create',compact('images','produits'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageassocyStoreRequest $request)
    {
        $this->imageassocyRepo->makeStore($request->validated());
        return redirect()->route('imageassocies.index')->with('success', 'Image associée à ce produit avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imageassocy  $imageassocy
     * @return \Illuminate\Http\Response
     */
    public function show(Imageassocy $imageassocy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imageassocy  $imageassocy
     * @return \Illuminate\Http\Response
     */
    public function edit(Imageassocy $imageassocy)
    {
        $image = $this->imageRepo->find($imageassocy->image->id);
        $menu = $this->menuRepo->find($imageassocy->menu->id);
        $imageassocy = $this->imageassocyRepo->find($imageassocy->id);

        $menus = $this->menuRepo->all();

        return view('imageassocies.edit',compact('image','images','menu','menus','imageassocy'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imageassocy  $imageassocy
     * @return \Illuminate\Http\Response
     */
    public function update(ImageassocyUpdateRequest $request, Imageassocy $imageassocy)
    {
        $this->imageassocyRepo->makeUpdate($imageassocy->id,$request->validated());
        return redirect()->route('imageassocies.index')->with('success', 'Image associée à ce produit mis à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imageassocy  $imageassocy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imageassocy $imageassocy)
    {
        $imageassocy->delete();
        return redirect()->route('imageassocies.index')->with('success','Image associée à ce produit supprimée avec succès');

    }
}
