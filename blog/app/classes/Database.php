<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/7/2018
 * Time: 12:41 PM
 */

namespace App\classes;


class Database
{

    //private $link;
public function dbConnection(){

    $hostName = "localhost";
    $username ="root";
    $password = "";
    $dbName = "blog";

    $link = mysqli_connect($hostName,$username,$password,$dbName);
    return $link;


}
}