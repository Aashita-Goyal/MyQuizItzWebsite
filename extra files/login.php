<?php
<<<<<<< HEAD:database/login.php
$host='localhost';
$user='root';
$pass='';
$db='quizitz';
$con=mysqli_connect($host,$user,$password,$db);
if($con)
echo 'connected succesfully to quizitz database';
 $sql="insert into login(email,password) values('sakshit90@gmail.com','sakshilove')";
 $query=mysqli_query($con,$sql);
 if($query)
echo 'data inserted succesfully';
=======
// $host='localhost';
// $user='root';
// $pass='';
// $db='QuizItz';
// $con=mysqli_connect($host,$user,$password,$db);
// if($con)
// echo 'connected succesfully to quizitz database';
// $sql="insert into login(email,password) values('sakshit90@gmail.com','sakshilove')";
// $query=mysqli_query($con,$sql);
// if($query)
//echo 'data inserted succesfully';
>>>>>>> 516368425c9304b8af8d867f79a6882bafa513aa:extra files/login.php

?>

