<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Slim\Http\Response;

class PaiementController extends Controller
{
    public function index(){
        return view('paiements.index');
    }
}
