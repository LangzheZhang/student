<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include('Student.php');
       $students = array();
       
       $first = new Student();
       $first->surname = "Doe";
       $first->first_name = "John";
       $first->add_email('home','john@doe.com');
       $first->add_email('work','jdoe@mcdonalds.com');
       $first->add_grade(65);
       $first->add_grade(75);
       $first->add_grade(55);
       $first->status="Freahman";
       $students['j123'] = $first;
       
       $second = new Student();
       $second->surname = "Einstein";
       $second->first_name = "Albert";
       $second->add_email('home','albert@braniacs.com');
       $second->add_email('work1','a_einstein@bcit.ca');
       $second->add_email('work2','albert@physics.mit.edu');
       $second->add_grade(95);
       $second->add_grade(80);
       $second->add_grade(50);
       $second->status="Sophomore";
       $students['a456'] = $second;
       
        $third = new Student();
       $third->surname = "Langzhe";
       $third->first_name = "Zhang";
       $third->add_email('home','605495433@qq.com');
       $third->add_email('work1','no');
       $third->add_email('work2','no');
       $third->add_grade(96);
       $third->add_grade(90);
       $third->add_grade(80);
       $third->status="Junior";
       $students['z789'] = $third;
       
       $fourth = new Student();
       $fourth->surname = "Chengcheng";
       $fourth->first_name = "Fan";
       $fourth->add_email('home','1684135841@qq.com');
       $fourth->add_email('work1','idywgif.com');
       $fourth->add_email('work2','fegreh.com');
       $fourth->add_grade(80);
       $fourth->add_grade(60);
       $fourth->add_grade(80);
        $fourth->status="Senior";
       $students['f616'] = $fourth;
        foreach($students as $student)
         echo $student->toString();
        ?>
    </body>
</html>
