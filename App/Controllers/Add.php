<?php

namespace App\Controllers;

use \Core\View;

class Add extends \Core\Controller
{

    public function addUserAction()
    {
        View::renderTemplate('Home/Insert.php');

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            extract($_POST);
            $data = new \App\Models\Model();
            $data->addData($_POST);
            if ($data) {
                echo "<script>alert('Data added');</script>";
                echo "<script>window.location.href='http://localhost/Himanshu/php-mvc/php-mvc/public/';</script>";
            }
        }
    }
    public function updateAction()
    {

        $data = new \App\Models\Model();

        $parts = parse_url($_SERVER['REQUEST_URI']);
        parse_str($parts['query'], $query);


        $read = new \App\Models\Model();
        $data = $read->readData($query['id']);

        View::renderTemplate('Home/Update.php', ["data" => $data]);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $update = $read->updateData($_POST, ($query['id']));
        }
    }

    public function DeleteAction()
    {
        $data = new \App\Models\Model();

        $parts = parse_url($_SERVER['REQUEST_URI']);
        parse_str($parts['query'], $query);

        $read = new \App\Models\Model();
        $data = $read->deleteData($query['id']);
    }
}
