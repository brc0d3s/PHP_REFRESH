<?php
class Student{
    public $name;
    public $course;

    public function _constructor($name,$course){
        $this->name = $name;
        $this->course = $course;
    }
}


$st = new Student();
$st->name = "brc0d3s";
$st->course = "Computer Science";

echo "Name:".$st->name.PHP_EOL."Course:".$st->course;

?>