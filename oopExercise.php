<?php


//One oldest approach
//include_once('classes/Bkiict.php');
//include_once('classes/Student.php');
//include_once('classes/Course.php');


//Newest approach
function __autoload($class_name)
{
    include_once('classes/'.$class_name.'.php');
}


$bkiict = new Bkiict();
echo $bkiict->fullNmae;

$student = new Student();

$course = new Course();


?>