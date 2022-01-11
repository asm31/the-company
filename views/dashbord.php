<?php
session_start();

include "../classes/User.php";

$user = new User;
$user_list = $user->getAllUsers();
// $user_list contains all the records from the users table

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Dashbord</title>
</head>
<body>
  <!-- Nav -->
  <?php include "main-menu.php"; ?>
  <!-- Main -->
  <main class="container" style="padding-top: 80px">
    <h2 class="text-muted display-6">USER LIST</h2>
    <table class="table table-hover">
      <thead class="table-secondary">
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
          <th></th>
        </tr>
      </thead>
      <tbody class="lead">
        <?php
        while($user = $user_list->fetch_assoc()){
        ?>
        <tr>
          <td><?= $user['id'] ?></td> 
          <td><?= $user['first_name'] ?></td>
          <td><?= $user['last_name'] ?></td>
          <td><?= $user['username'] ?></td>
          <td>
            <a href="edit-user.php?user_id=<?= $user['id']?>" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></a>
            <a href="delete-user.php?user_id=<?= $user['id']?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </main>
</body>
</html>