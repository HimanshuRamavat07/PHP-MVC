<?php

namespace App\Models;

use PDO;

class User extends \Core\Model
{
    protected $db;

    function __construct()
    {
        $this->db = static::getDB();
    }

    /**
     * readData() function 
     * for reading user data from db
     * @param int $id id of user 
     * @return array
     * 
     */
    public function readData($id = null)
    {
        $sql = "SELECT * FROM `user_mvc` ";
        if ($id) {
            $sql .= " WHERE `id`=$id";
        }
        $query = $this->db->query($sql);
        $value =  $query->fetchAll(PDO::FETCH_ASSOC);
        // print_r($value);
        return $value;
    }

    /**
     * addData() function 
     * for inserting data into db
     * @param array $data data of user enter
     * 
     */
    public function addData($data)
    {
        extract($data);
        $column = implode(',', array_keys($data));
        $values = implode("','", $data);
        $sql = "INSERT INTO `user_mvc` ($column) VALUES ('$values')";
        $insert = $this->db->query($sql);
        if ($insert) {
            echo "<script>alert('Data added');</script>";
            echo "<script>window.location.href='http://localhost/Himanshu/php-mvc/php-mvc/public/';</script>";
        }
    }

    /**
     * updateData() function 
     * for updating user data into db
     * @param array $data data of user enter
     * @param int $where id of user 
     * 
     */
    public function updateData($data, $where)
    {

        $sql = "UPDATE `user_mvc` SET ";
        foreach ($data as $key => $value) {
            $sql .= " $key= '$value' ,";
        }
        $sql = rtrim($sql, ',');
        $sql .= " WHERE id='$where'";
        $update = $this->db->query($sql);
        if ($update) {
            echo "<script>alert('Data Updated sucessfully ');</script>";
            echo "<script>window.location.href = 'http://localhost/Himanshu/php-mvc/php-mvc/public/';</script>";
        }
    }

    /**
     * deleteData() function 
     * for delete user data into db
     * @param int $id id of user 

     */
    public function deleteData($id)
    {

        $sql = "DELETE FROM `user_mvc` WHERE id='$id'";
        $delete = $this->db->query($sql);
        if ($delete) {
            echo "<script>alert('Data deleted sucessfully ');</script>";
            echo "<script> window.location.href = 'http://localhost/Himanshu/php-mvc/php-mvc/public/';</script>";
        }
    }
}

