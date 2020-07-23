<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Ecommerce_article;
use Illuminate\Http\Request;

class EcoloController extends Controller
{
    public function menu(){
        return (object) array(
            (object) array( "title"=>"Acceuil", "route"=> "ecolo4.index" ),
            (object) array( "title"=>"Boutique", "route"=> "ecolo4.boutique" ),
            (object) array( "title"=>"Contact", "route"=> "ecolo4.contact" ),
            (object) array( "title"=>"A Propos", "route"=> "ecolo4.apropos" )
        );
    }

    public function sub_banner(){
        return (object) array(
            (object) array("logo" => "senecolo3/img/icons8-promotion-window-50 (1).png",  "description" => "Publiez vos offres et trouvez rapidement des acheteurs"),
            (object) array("logo" => "senecolo3/img/icons8-recycle-64 (1).png",                   "description" => "Solutions rapides, simple et adaptés grâce à la mise en relation"),
            (object) array("logo" => "senecolo3/img/icons8-secure-50 (1).png",       "description" => "Service complet et sécurisé grâce l'expertise de notre équipe")
        );
    }

    public function offer(){
        return (object) array(
            (object) array(
                "title" => "Nouvelle offres",
                "data" => ""
            )
        );
    }

    public function index(){
        $menus = $this->menu();
        $sub_banner = $this->sub_banner();

        return view('0 senecolo 4.index', compact('menus', 'sub_banner'));
    }

    public function landing(){
        $menus = $this->menu();
        $steps = $this->sub_banner();

        return view('0 senecolo 4.landing', compact('menus', 'steps'));
    }


    // APIS ==============================================================================
    public function article_list_api(){
        $data = array(
            'success' => true,
            'message' => 'La liste des nouvelles offres a été récupérée',
            'data' => Ecommerce_article::all()->take(8)
        );

        return response()->json($data, 200);
    }
}
