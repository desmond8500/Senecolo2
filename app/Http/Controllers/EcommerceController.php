<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index(){
        $carousel = glob('images/carousel/*');
        $articles = glob('images/produits/*');

        return view('0.index',compact('carousel','articles'));
    }
}
