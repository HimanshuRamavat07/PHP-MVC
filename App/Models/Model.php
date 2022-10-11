<?php

namespace App\Models;

use PDO;

class Model extends \Core\Model
{


    public static function addData($data)
    {
        $db = static::getDB();
        extract($data);
        $column = implode(',',array_keys($data));
        $values = implode("','",$data);
        $sql = "INSERT INTO `user_mvc` ($column) VALUES ('$values')";
        $insert = $db->query($sql);
        return true;
    }


    public static function readData($data)
    {
        $db = static::getDB();

        $sql = $db->query("SELECT * FROM `user_mvc` WHERE `id`=$data");

        $value =  $sql->fetchAll(PDO::FETCH_ASSOC);
        // print_r($value);
        return $value;
    }


    public static function updateData($data, $where)
    {
        $db = static::getDB();

        $sql = "UPDATE `user_mvc` SET ";
        foreach ($data as $key => $value) {
            $sql .= " $key= '$value' ,";
        }
        $sql = rtrim($sql, ',');
        $sql .= " WHERE id='$where'";
        $update = $db->query($sql);
        if ($update) { ?>
            <script>
                alert('Data Updated sucessfully ');
                window.location.href = "http://localhost/Himanshu/php-mvc/php-mvc/public/";
            </script>
        <?php  }
    }


    public static function deleteData($id) {
        $db = static::getDB();

        $sql = "DELETE FROM `user_mvc` WHERE id='$id'";
        $delete = $db->query($sql);
        if ($delete) { ?>
            <script>
                alert('Data deleted sucessfully ');
                window.location.href = "http://localhost/Himanshu/php-mvc/php-mvc/public/";
            </script>
        <?php  }
    }
}
