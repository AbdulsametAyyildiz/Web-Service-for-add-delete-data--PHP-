<?php
include("connect.php");

$name = $_POST["name"];
$surname = $_POST["surname"];


$add = mysqli_query($connect,"insert into userTable (name,surname) values ('$name','$surname')");

if($add){


    $arr = (array ('Result'=>'Basarii'));

    echo json_encode($arr);

}


?>