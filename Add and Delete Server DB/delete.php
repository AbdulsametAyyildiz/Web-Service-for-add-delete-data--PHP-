<?php
include("connect.php");

if($_POST){

$id = $_POST["id"];

$delete = mysqli_query($connect,"delete from userTable where id='$id' ");

if($delete){
    echo json_encode((array('Result'=>'Delete is success')));
}
else{
    echo json_encode((array('Result'=>'Delete is not success')));
}
}
?>