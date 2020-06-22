<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Ecommerce_article;
use App\Models\Ecommerce_category;
use App\Models\Ecommerce_panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $recyclables = null;
        $recycles = null;
        $user = Auth::user();

        $features = json_decode('[
            { "title": "Postez votre offre", "description": "Rejoignez le marché publiez facilement les produits que vous souhaitez vendre.", "icon": "senecolo3/img/icons/020-carts.png", "fa": "fa fa-shopping-cart" },
            { "title": "Achat Sécurisé", "description": "Acheter en toute confiance sur SEN EcoloMarket.", "icon": "senecolo3/img/icons/014-padlock-1.png", "fa": "fa fa-lock" },
            { "title": "Service complet", "description": "Parcourez nos offres dans les meilleures catégories.", "icon": "senecolo3/img/icons/002-recycle.png", "fa": "fa fa-recycle" }
        ]');

        if ($categorie) {
            $articles = Ecommerce_article::where('category',$categorie)->get();
            return view("0 senecolo3.pages.categoryList", compact('banner', 'sidebar', 'articles', 'categorie', 'user'));
        } else {
            $articles = Ecommerce_article::all();
            $recyclables = Ecommerce_article::where('type','Recyclable')->get();
            $recycles = Ecommerce_article::where('type','Recyclé')->get();
        }

        return view("0 senecolo3.pages.boutique",compact('banner','sidebar', 'articles', 'categorie', 'features', 'user', 'recyclables', 'recycles'));
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

        $user = Auth::user();

        return view("0 senecolo3.pages.backoffice",compact('banner', 'content', 'categories', 'section', 'articles', 'user'));
    }

    public function add_to_card(Request $request){
        $card = new Ecommerce_panier();
        $card->user_id = $request->user_id;
        $card->product_id = $request->article_id;
        $card->save();

        return redirect()->back();
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

    public function add_to_pub3(Request $request){
        foreach ($request->file('images') as $key => $fichier) {
            $img = $fichier->getClientOriginalName();
            Storage::disk('public')->put("Ecommerce/images/pub/3/$img", File::get($fichier));
        }
        return redirect()->back();
    }

    public function delete_carousel_image(Request $request){
        Storage::disk('public')->delete($request->img);
        return redirect()->back();
    }


    // auth

    public function logme(Request $request){
        if (isset($request->type)) {
            if ($request->type=="login") {
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    // Authentication passed...
                    return redirect()->route('boutique');
                }
            }else {
                Auth::logout();
                return redirect()->route('boutique');
            }
            # code...
        } else {
            # code...
        }

    }

    public function loginpage(){
        return view('0 senecolo3.pages.login');
    }
}
