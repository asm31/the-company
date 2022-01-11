<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Register</title>
</head>
<body class="bg-light">
  <div style="height: 100vh">
    <div class="row h-100 m-0">
      <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-white border-0">
          <h1 class="text-center">REGISTER</h1>
          <div class="card-body">
            <form action="../actions/register.php" method="post">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" name="first_name" id="first-name" class="form-control mb-2" required autofocus>
              
              <label for="last-name" class="form-label">Last Name</label>
              <input type="text" name="last_name" id="last-name" class="form-control mb-2" required>

              <label for="username" class="form-label">UserName</label>
              <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="15" required>

              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control mb-5" minlength="8" required>

              <button type="submit" class="btn btn-success w-100">REGISTER</button>

              <p class="text-center mt-3 small">Register already? <a href="../views">Log in.</a></p>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>