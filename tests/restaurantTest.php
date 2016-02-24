<?php

    /**
   * @backupGlobals disabled
   * @backupStaticAttributes disabled
   */

   require_once "src/Restaurant.php";

   $server = 'mysql:host=localhost;dbname=best_restaurants_test';
   $username = 'root';
   $password = 'root';
   $DB = new PDO($server, $username, $password);

   class RestaurantTest extends PHPUnit_Framework_TestCase
   {
       protected function tearDown()
       {
           Cuisine::deleteAll();
       }

       function test_getName()
       {
           $name = "Wang's Grill";
           $cuisine_id = "Chinese";
           $id = null;
           $test_restaurant = New Restaurant($name, $cuisine_id, $id);

           $result = $test_restaurant->getName();

           $this->assertEquals($name, $result);
       }

   }

?>
