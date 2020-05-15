<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class SeedsController extends Controller
{
    public function categorie(){
        $list = [ "Electronique", "Electricité", "Papier et cartons", "plastique","Bois", "Métaux Ferreux","Métaux non ferreux","Pneu", "verre"];
        $mother = ["recyclables","recyclés"];

        foreach ($mother as $key => $son) {
            foreach ($list as $key => $value) {
                $categorie = new Categorie();
                $categorie->mother = "Produits $son";
                $categorie->name = ucfirst($value);
                $categorie->link = ucfirst($value);
                $categorie->save();
            }
        }
        return redirect()->back();
    }
}
