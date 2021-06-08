<?php
include("connect.php");

class users{
    public $id = "";
    public $name = "";
    public $surname = "";
    
}
$object = new users();

$query = mysqli_query($connect,"select * from userTable");
$rowNum = mysqli_num_rows($query);
$i=0;
echo("[");
while($show = mysqli_fetch_assoc($query)){
    $i=$i+1;
    $object->id=$show["id"];
    $object->name=$show["name"];
    $object->surname=$show["surname"];
    
    echo(json_encode($object));
    if($i!=$rowNum){
        echo(",");
    }
}
echo("]");

?>