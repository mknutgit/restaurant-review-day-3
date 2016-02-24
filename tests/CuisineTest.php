<?php

    /**
   * @backupGlobals disabled
   * @backupStaticAttributes disabled
   */

   require_once "src/Cuisine.php";

   $server = 'mysql:host=localhost;dbname=best_restaurants_test';
   $username = 'root';
   $password = 'root';
   $DB = new PDO($server, $username, $password);

   class CuisineTest extends PHPUnit_Framework_TestCase
   {

       function test_getType()
       {
           $type = "Chinese";
           $id = null;
           $test_Cuisine = new Cuisine($type, $id);

           $result = $test_Cuisine->getType();

           $this->assertEquals($type, $result);
       }
   }
 ?>
