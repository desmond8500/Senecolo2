<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Ecommerce_article;
use App\Models\Ecommerce_category;
use Illuminate\Http\Request;

class SenecoloController extends Controller
{
    public  function index(){

        return view("0 senecolo3.pages.index");
    }
    public  function boutique($categorie=null){
        $banner = (object) array(
            'title' => 'Boutique',
            'message' => 'Les produits Senecolo market',
            'routes' => (object) array(
                (object) array('name' => 'Boutique', 'link' => 'boutique')
            )
        );
        $sidebar = (object) array(
                (object) array('name' => 'Catégories', 'data' => Ecommerce_category::all())
        );

        if ($categorie) {
            $articles = Ecommerce_article::where('category',$categorie)->get();
        } else {
            $articles = Ecommerce_article::all();
        }



        return view("0 senecolo3.pages.boutique",compact('banner','sidebar', 'articles'));
    }
    public  function formation(){
        $banner = (object) array(
            'title' => 'Formation et Blog',
            'message' => 'Vos  trouverez ici divers articles sur l\'environnement et le recyclage de déchets. Nous proposons aussi des formations sur le même thèmes',
            'routes' => (object) array(
                (object) array('name' => 'Formation', 'link' => 'formation')
            )
        );
        return view("0 senecolo3.pages.blog",compact('banner'));
    }
    public  function contact(){
        $banner = (object) array(
            'title' => 'Boutique',
            'message' => '',
            'routes' => (object) array(
               (object) array( 'name'=> 'Contacts', 'link'=>'contact')
            )
        );
        return view("0 senecolo3.pages.contact",compact('banner'));
    }
    public  function backoffice($section=null){
        $banner = (object) array(
            'title' => 'Backoffice',
            'message' => '',
            'routes' => (object) array(
               (object) array( 'name'=> 'Backoffice', 'link'=>'backoffice')
            )
        );
        $categories = Ecommerce_category::all();
        $articles = Ecommerce_article::all();

        switch ($section) {
            case 'category':
                $content = "0 senecolo3.component.backoffice.$section";
                break;
            case 'articles':
                $content = "0 senecolo3.component.backoffice.$section";
                break;

            default:
                # code...
                break;
        }

        return view("0 senecolo3.pages.backoffice",compact('banner', 'content', 'categories', 'section', 'articles'));
    }
}
