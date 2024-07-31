<?php
session_start();
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
<div class="card col-lg-4 mx-auto">
<div class="card">
  <div class="card-header">Add Todo</div>
<div class="card-body">
<form method="POST" action="./controller/storeTodoControllelr.php">
<div class="text-danger">
  <input value="<?= $_SESSION['old_data']['title'] ?? null ?>"  name="title" type="text" class="form-control my-3" placeholder="Todo Title">
  <?php echo $_SESSION['required']['title_error'] ?? null ?>
  <textarea name="detail" class="form-control my-3" placeholder="todo detail" ><?= $_SESSION['old_data']['detail'] ?? null ?></textarea>
  <?php echo $_SESSION['required']['detail_error'] ?? null  ?>
</div>
  <button class="btn btn-outline-primary">Add Todo</button>
</form>
</div>
 
</div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php session_unset() ?>
