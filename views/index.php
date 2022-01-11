<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Login</title>
</head>
<body class="bg-light">
  <div style="height: 50vh">
    <div class="row h-100 m-0">
      <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-transparent border-0">
          <h1 class="text-center">LOGIN</h1>
        </div>
        <div class="card-body">
          <form action="../actions/login.php" method="post">
            <input type="text" name="username" id="username" placeholder="USAERNAME" class="form-control mb-2" required autofocus>
            <!-- Password = Username -->
            <input type="password" name="password" id="password" placeholder="PASSWORD" class="form-control mb-5" required>

            <button type="submit" class="btn btn-primary w-100">LOG IN</button>

            <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  
</body>
</html>