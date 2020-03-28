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
    public function index1(){
        $carousel = glob('images/carousel/*');
        $articles = glob('images/produits/*');

        $menus = json_decode('[
            { "name": "Accueil", "route": "index" },
            { "name": "Boutique", "route": "index" },
            { "name": "Formation", "route": "formation" },
            { "name": "Contactez-nous", "route": "contact" },
            { "name": "A propos", "route": "contact" }
        ]');

        return view('0 Eiser.index',compact('carousel','articles','menus'));
    }
}
