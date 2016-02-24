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
       protected function tearDown()
       {
           Cuisine::deleteAll();
       }

       function test_getType()
       {
           $type = "Chinese";
           $id = null;
           $test_Cuisine = new Cuisine($type, $id);

           $result = $test_Cuisine->getType();

           $this->assertEquals($type, $result);
       }

       function test_getId()
       {
           $type = "Chinese";
           $id = 1;
           $test_id = new Cuisine($type, $id);

           $result = $test_id->getId();

           $this->assertEquals(true, is_numeric($result));
       }

       function testSave()
       {
           $type = "Chinese";
           $id = null;
           $test_save = new Cuisine($type, $id);
           $test_save->save();

           $result = Cuisine::getAll();

           $this->assertEquals($test_save, $result[0]);
       }

       function test_getAll()
       {
           $type = "Chinese";
           $id = null;
           $test_get1 = new Cuisine($type, $id);
           $test_get1->save();

           $type2 = "Indian";
           $test_get2 = new Cuisine($type2, $id);
           $test_get2->save();

           $result = Cuisine::getAll();

           $this->assertEquals([$test_get1, $test_get2], $result);
       }

       function test_deleteAll()
       {
           $type = "Chinese";
           $id = null;
           $test_save = new Cuisine($type, $id);
           $test_save->save();

           Cuisine::deleteAll();
           $result = Cuisine::getAll();

           $this->assertEquals([], $result);
       }


   }
 ?>
