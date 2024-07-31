<?php
include "../database/env.php";
$id = $_REQUEST['id'];

$query = "DELETE FROM todos WHERE id = '$id'" ;
$responsive = mysqli_query($connect,$query);

if($responsive){
header("Location:../all-todos.php");
}
var_dump($responsive);