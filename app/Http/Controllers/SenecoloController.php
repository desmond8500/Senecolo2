<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class SenecoloController extends Controller
{
    public $folder = '0 senecolo3.pages';

    public  function index(){

        return view("$this->folder.index");
    }
    public  function boutique(){
        $banner = (object) array(
            'title' => 'Boutique',
            'message' => 'Les produits Senecolo market',
            'routes' => (object) array(
                (object) array('name' => 'Boutique', 'link' => 'boutique')
            )
        );
        $sidebar = (object) array(
                (object) array('name' => 'Produits recyclables', 'data' => Categorie::where('mother','Produits recyclables')->get()),
                (object) array('name' => 'Produits recyclés', 'data' => Categorie::where('mother', 'Produits recyclés')->get())
        );
        return view("$this->folder.boutique",compact('banner','sidebar'));
    }
    public  function formation(){

        return view("$this->folder.blog");
    }
    public  function contact(){
        $banner = (object) array(
            'title' => 'Boutique',
            'message' => '',
            'routes' => (object) array(
               (object) array( 'name'=> 'Contacts', 'link'=>'contact')
            )
        );
        return view("$this->folder.contact",compact('banner'));
    }
}
