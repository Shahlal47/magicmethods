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
//echo $bkiict;
//var_dump($bkiict);
//echo "<br>";
//echo $bkiict->fullNmae;
//echo "<br>";


$student = new Student();
//echo $student;
//var_dump($student);
//echo "<br>";


$course = new Course();
//echo $course->title;
echo "<br>";
$course->title = 'Course Title';
//echo $course->title;
//echo "<br>";
////var_dump($course);


//$course->getCredits();
//echo "<br>";
//$course->getLessons();

//var_dump($course);