<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Models\Menu;
use App\Repositories\MenuRepository;

use App\Repositories\CategoryRepository;

class VitrineController extends Controller
{
    protected $menuRepo;

    public function __construct(MenuRepository $menuRepo, CategoryRepository $categoryRepo)
    {
        $this->menuRepo = $menuRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function index(){

        $menus = $this->menuRepo->getlatest();
        return view('index', compact('menus'));

    }

    public function show($menu)
    {
        $photo = $this->menuRepo->findOrFail($menu)->photo;
        $prix = $this->menuRepo->findOrFail($menu)->prix;
        $name = $this->menuRepo->findOrFail($menu)->name;

        $category_id = $this->menuRepo->findOrFail($menu)->category_id;

        $category = $this->categoryRepo->findOrFail($category_id)->name;

        return view('vitrines.show', compact('photo','prix','name','category','menu'));
    }
}
