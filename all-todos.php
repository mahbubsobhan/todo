<?php
session_start();
include "./database/env.php";

$query = "SELECT * FROM todos";
$responsive = mysqli_query($connect,$query);
$posts = mysqli_fetch_all($responsive,1);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Todo App</title>
</head>
<body>
  
<?php 
include './include/nav.php';
 ?>


<!-- form start -->
<div class="card col-lg-5 mx-auto">
<div class="card">
  <div class="card-header">All Todos</div>
<div class="card-body">
<table class="table table-responsive">
<tr>
  <th>#</th>
  <th>title</th>
  <th>detail</th>
</tr>


<?php 
foreach($posts as $key=> $post){
  ?>
  <tr>
  <td><?= ++$key ?></td>
  <td><?= $post['title'] ?></td>
  <td><?= $post['detail'] ?></td>
  <td>
    <div class="btn-group">
    <a href="#" class="btn btn-primary btn-sm">Edit</a>
    <a href="./controller/todoDelete.php?id=<?=$post['id']  ?>" class="btn btn-danger btn-sm">Delete</a>
  </div>
</td>
</tr>
<?php
}
?>

</table>
</div>
  
</div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php session_unset() ?>
