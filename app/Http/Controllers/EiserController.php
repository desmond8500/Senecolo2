<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EiserController extends Controller
{
    public $asset_folder = 'eiser';

    public function getHead(){
        $data = (object) array(
            'title' => 'Sen EcoloMarket',
            'folder' => $this->asset_folder
        );
        return  $data;
    }

    public function getTopbar(){
        $data = (object) array(
            'tel' => '+221 77 555 76 37',
            'email' => 'amadoumalickdrame@gmail.com',
            'links' => [
                array( 'name'=> 'gift card', 'route'=> '' ),
                array( 'name'=> 'track order', 'route'=> '' ),
                array( 'name'=> 'Contactez-nous', 'route'=> '' )
            ]
        );
        return  $data;
    }
    public function getMainmenu(){
        $data = (object) array(
            'logo' => 'senecolo3/img/logo/logo V2.png',
            'link' => 'index',
            'menulist' => array(
                array('name' => 'Accueil',     'route' => 'index' ,     "role"=> "user"),
                array('name' => 'Boutique',    'route' => 'boutique' ,  "role"=> "user"),
                array('name' => 'Formation',   'route' => 'formation' , "role"=> "user"),
                array('name' => 'Contact',     'route' => 'contact' ,   "role"=> "user"),
                array('name' => 'Backoffice',  'route' => 'backoffice',    "role"=> "admin")
            )
        );
        return  $data;
    }
    public function getFooter(){
        $data = (object) array(
            'logo' => 'senecolo3/img/logo/logo V2.png',
            'link' => 'index',
            'menu' => array(
                array(
                    'name' => 'Top Products',
                    'route' => [
                        array('name' => 'Managed Website',     'route' => ''),
                        array('name' => 'Manage Reputation',   'route' => ''),
                        array('name' => 'Power Tools',         'route' => ''),
                        array('name' => 'Marketing Service',   'route' => '')
                    ]
                ),
                array(
                    'name' => 'Quick Links',
                    'route' => [
                        array('name' => 'Managed Website',     'route' => ''),
                        array('name' => 'Manage Reputation',   'route' => ''),
                        array('name' => 'Power Tools',         'route' => ''),
                        array('name' => 'Marketing Service',   'route' => '')
                    ]
                ),
                array(
                    'name' => 'Features',
                    'route' => [
                        array('name' => 'Managed Website',     'route' => ''),
                        array('name' => 'Manage Reputation',   'route' => ''),
                        array('name' => 'Power Tools',         'route' => ''),
                        array('name' => 'Marketing Service',   'route' => '')
                    ]
                ),
                array(
                    'name' => 'Resources',
                    'route' => [
                        array('name' => 'Managed Website',     'route' => ''),
                        array('name' => 'Manage Reputation',   'route' => ''),
                        array('name' => 'Power Tools',         'route' => ''),
                        array('name' => 'Marketing Service',   'route' => '')
                    ]
                    )
            )
        );
        return  $data;
    }


}
