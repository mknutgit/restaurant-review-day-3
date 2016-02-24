<?php

    class Restaurant {
        private $name;
        private $cuisine_id;
        private $id;

        function __construct($name, $cuisine_id, $id = null)
        {
            $this->name = $name;
            $this->cuisine_id = $cuisine_id;
            $this->id = $id;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setCuisineId($new_cuisine_id)
        {
            $this->cuisine_id = $new_cuisine_id;
        }

        function getCuisineId()
        {
            return $this->cuisine_id;
        }

        function getId()
        {
            return $this->id;
        }
    }




?>
