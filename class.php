<?php
class studinfo {
  public $student_name ;
  public $student_course;
  function insertname($name){
    $student_name=$name;
   echo $name ;
}
 function insertcourse($course){
   $student_course=$course;
   echo $course;
 }
  function view(){
    echo "student name is ",$student_name ;
    echo"student course is ",$student_course;
  }
}
$info1=new studentinfo();
$info1->insertname('nirjara');
$info1->insertcourse('bsc');
$info1->view();
?>
