<?php
session_start();

include "../classes/User.php";

$user_obj = new User;
$user = $user_obj->getUser($_GET['user_id']);
// $_GET['user_id'] is the id from the URL;
// $user is an associative array;
// $user = ['id' =>3, 'first_name' => "john"...];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Edit User</title>
</head>
<body>
  <!-- Nav -->
  <?php include "main-menu.php"; ?>
  <main class="container" style="padding-top: 80px">
    <div class="card w-50 mx-auto border-0">
      <div class="card-header bg-white border-0">
        <h2 class="text-center">EDIT USER</h2>
      </div>
      <div class="card-body">
        <form action="../actions/edit-user.php" method="post">
          <input type="hidden" name="id" value="<?= $_GET['user_id']?>">
          
          <label for="first-name" class="form-label">First Name</label>
          <input type="text" name="first_name" id="first-name" class="form-control mb-2" value="<?= $user['first_name'] ?>" required autofocus>
          
          <label for="last-name" class="form-label">Last Name</label>
          <input type="text" name="last_name" id="last-name" class="form-control mb-2" value="<?= $user['last_name'] ?>" required>

          <label for="username" class="form-label">UserName</label>
          <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" value="<?= $user['username'] ?>" maxlength="15" required>

          <div class="text-end">
            <button type="submit" class="btn btn-warning btn-sm px-5">SAVE</button>
            <a href="dashbord.php" class="btn btn-secondary btn-sm">Cancel</a>
          </div>
        </form>
      </div>
    </div>

  </main>
</body>
</html>