<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM `user_mvc`');
        $data =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {   
            $values[] = $row;
         }
        return $values;
    }
}
