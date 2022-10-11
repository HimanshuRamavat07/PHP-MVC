<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller
{

    public function indexAction()
    {

        $read = new \App\Models\User();
        $data = $read->getAll();
        
        View::renderTemplate('Home/index.php',['data'=>$data]);
        
    }
    

   
}
