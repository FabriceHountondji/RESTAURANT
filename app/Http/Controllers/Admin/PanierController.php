<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\Menu;
use App\Repositories\MenuRepository;

class PanierController extends Controller
{
    protected $menuRepo;

    public function __construct(MenuRepository $menuRepo)
    {
        $this->menuRepo = $menuRepo;
    }

    public function store(Request $request){


        $menus = $this->menuRepo->getlatest();

        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request){

            return $cartItem->id == $request->id;
        });

        if($duplicata->isNotEmpty()){
            return view('index2',compact('menus'))->with('success','Le menu a déjà été ajouté au panier.');
        }

        $menu = Menu::find($request->id);

        Cart::add($menu->id, $menu->name,1,$menu->prix)
            ->associate('App\Models\Menu');

        return view('index2',compact('menus'))->with('success','Menu a été ajouté au panier avec succès.');
    }

    public function show(){
        return view('panier.index');
    }

    public function delete($rowId){
        Cart::remove($rowId);

        return back()->with('success','Le Menu a été supprimé.');
    }
}
