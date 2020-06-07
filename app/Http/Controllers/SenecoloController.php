<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Ecommerce_article;
use App\Models\Ecommerce_category;
use App\Models\Ecommerce_panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SenecoloController extends Controller
{
    public  function index(){

        return view("0 senecolo3.pages.index");
    }
    public  function boutique($categorie=null){
        $banner = (object) array(
            'title' => 'Boutique',
            'message' => 'Les produits SEN EcoloMarket',
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

        $features = json_decode('[
            { "title": "Postez votre annonce", "description": "Rejoignez notre plateforme pour vendre facilement vos produits" },
            { "title": "bla bla", "description": "bla bla" },
            { "title": "bla bla", "description": "fdsfsdfsd" }
        ]');

        return view("0 senecolo3.pages.boutique",compact('banner','sidebar', 'articles', 'categorie', 'features'));
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

        if ($section) {
            $content = "0 senecolo3.component.backoffice.$section";
        }else{
            $content = null;
        }

        return view("0 senecolo3.pages.backoffice",compact('banner', 'content', 'categories', 'section', 'articles'));
    }

    public function add_to_card($product_id){
        $card = new Ecommerce_panier();

        $card->user_id = 0;
        $card->product_id = $product_id;
        $card->save();

        redirect()->route('boutique');

    }

    public function add_to_carousel(Request $request){
        foreach ($request->file('images') as $key => $fichier) {
            $img = $fichier->getClientOriginalName();
            Storage::disk('public')->put("Ecommerce/images/carousel/$img", File::get($fichier));
        }
        return redirect()->back();
    }

    public function add_to_pub1(Request $request){
        Storage::disk('public')->deleteDirectory("Ecommerce/images/pub/1");

        $img = $request->file('pub1')->getClientOriginalName();
        Storage::disk('public')->put("Ecommerce/images/pub/1/$img", File::get($request->file('pub1')));

        return redirect()->back();
    }

    public function add_to_pub2(Request $request){
        Storage::disk('public')->deleteDirectory("Ecommerce/images/pub/2");

        $img = $request->file('pub2')->getClientOriginalName();
        Storage::disk('public')->put("Ecommerce/images/pub/2/$img", File::get($request->file('pub2')));

        return redirect()->back();
    }

    public function delete_carousel_image(Request $request){
        Storage::disk('public')->delete($request->img);
        return redirect()->back();
    }
}
