<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenecoloController extends Controller
{
    public $folder = '0 senecolo3.pages';

    public  function index(){

        return view("$this->folder.index");
    }
    public  function boutique(){

        return view("$this->folder.boutique");
    }
    public  function formation(){

        return view("$this->folder.blog");
    }
    public  function contact(){
        $banner = (object) array(
            'title' => 'Contacts',
            'message' => '',
            'routes' => (object) array(
               (object) array( 'name'=> 'Contacts', 'link'=>'contact')
            )
        );
        return view("$this->folder.contact",compact('banner'));
    }
}
