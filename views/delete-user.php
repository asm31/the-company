<?php
session_start();

include "../classes/User.php";

$user_obj = new User;
$user = $user_obj->getUser($_GET['user_id']);
$full_name = $user['first_name'] . " " . $user['last_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Delete User</title>
</head>
<body>
  <!-- Nav -->
  <?php include "main-menu.php"; ?>
  <main class="container" style="padding-top: 80px">
    <div class="card w-25 mx-auto border-0">
      <div class="card-header bg-white border-0">
        <div class="text-center text-danger">DELETE USER</div>
      </div>
      <div class="card-body">
        <div class="text-center mb-4">
          <i class="fas fa-exclamation-triangle text-warning display-4 b-block mb-2"></i>
          <div class="fw-bold mb-0">Are you sure you want to delete "<?= $full_name ?>"?</div>
        </div>
        <div class="row">
          <div class="col">
            <a href="dashbord.php" class="btn btn-secondary w-100">Cancel</a>
          </div>
          <div class="col">
            <form action="../actions/delete-user.php" method="post">
              <input type="hidden" name="id" value="<?= $_GET['user_id']?>">
              <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>