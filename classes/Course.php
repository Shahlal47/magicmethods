<?php


class Course{

    function __set($propertiesname, $propertiesvalue){

        echo 'Hi';
        //var_dump($propertiesname);
        //var_dump($propertiesvalue);

    }

    function __call($functioname, $arguments){

        echo 'Hello';
        //var_dump($functioname);
        //var_dump($arguments);

    }

}