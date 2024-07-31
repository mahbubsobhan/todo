<?php
session_start();

$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$erros = [];


if(empty($title)){
  $erros['title_error'] = "**Title required!";
}

if(empty($detail)){
  $erros['detail_error']="**Detail required!";
}


if(count($erros)>0){
$_SESSION['required']= $erros;
$_SESSION['old_data']=$_REQUEST;
header("Location: ../index.php");
}
else{

  include '../database/env.php';

  $query = "INSERT INTO todos( title, detail) VALUES ('$title','$detail')";
  $store = mysqli_query($connect,$query);
  header("Location: ../index.php");
}


