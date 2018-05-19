<?php
    class Person{
        var $name="zhangsan";
        var $age = 18;

        function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }
        function fun(){
            echo "helloworld";
        }
        function self(){
            echo "nice to meet you,my name is $this->name";
        }

    }

    $per = new Person("duoduo",18);
    $per->fun();
    $per->self();
    
    var_dump($per);

    class Student extends Person{
        var $hobby = "读书";
    }

    $stu = new Student("linlin",18);
    var_dump($stu);

?>