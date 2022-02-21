<?php

class Student
{
    private $name;
    private $branch;
    private $degree;
    
    function __construct($name="No Name",$branch="No Branch",$degree="No Degree")
    {
        $this -> name=$name;
        $this -> branch=$branch;
        $this -> degree=$degree;
    }

    function get_name()
    {
        return $this -> name;
    }
    function set_name($new_name)
    {
        $this -> name=$new_name;
    }

    function get_branch()
    {
        return $this -> branch;
    }
    function set_branch($new_branch)
    {
        $this -> branch=$new_branch;
    }
    

    function get_degree()
    {
        return $this -> degree;
    }
    function set_degree($new_degree)
    {
        $this -> degree=$new_degree;
    }


}
$ravi=new Student();

$ravi -> set_name("Ravi vardhan");
$ravi -> set_branch("CSE");
$ravi -> set_degree("Btech");

echo $ravi -> get_name()."<br>";
echo $ravi -> get_branch()."<br>";
echo $ravi -> get_degree()."<br>";
?>