<?php

namespace App\Controllers;

use \Core\View;

class User extends \Core\Controller
{
    
    protected $read;

    /**
     * Megic method 
     * call when obj created of this class
     */
    function __construct()
    {
        $this->read = new \App\Models\User();
    }

    /**
     * Index action 
     * Read all the value from db
     * and render to index page
     */
    public function indexAction()
    {
        $data = $this->read->readData();
        View::renderTemplate('Home/index.php', ['data' => $data]);
    }

     /**
     * Add User action 
     * This is insert function
     * and render to Insert page
     */
    public function addUserAction()
    {
        View::renderTemplate('Home/Insert.php');
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_POST);

            $data = new \App\Models\User();
            $data->addData($_POST);
        }
    }

     /**
     * Update User action 
     * This is Update function
     * and render to Update page
     */
    public function updateAction()
    {;

        $parts = parse_url($_SERVER['REQUEST_URI']);
        parse_str($parts['query'], $query);

        $data = $this->read->readData($query['id']);

        View::renderTemplate('Home/Update.php', ["data" => $data]);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $update = $this->read->updateData($_POST, ($query['id']));
        }
    }

     /**
     * Delete User action 
     * This is delete function
     * and render to Delete page
     */
    public function DeleteAction()
    {
        $parts = parse_url($_SERVER['REQUEST_URI']);
        parse_str($parts['query'], $query);
        $data = $this->read->deleteData($query['id']);
    }
}
