<?php

    session_start();
    if(isset($_SESSION['email'])){
        header('location:home.php');
    }

?>
<!DOCTYPE html>
<html>

<head>
  <title>Register Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="./CSS/style.css" />
</head>

<body>

<?php include 'includes/navbar.php'; ?>

  <div class="container-fluid main1" style="color: black;">
    <div class="container">
      <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
          <h2 style="text-align: center;" text="white">Register Yourself</h2>
          <br>
          <img src="https://th.bing.com/th/id/OIP.G9FH5pusX4f-JmJ9QaTFbgHaGr?pid=ImgDet&w=2838&h=2557&rs=1" alt="Avatar"
            class="center">
          <br>
          <form action="scripts/registerscript.php" method="post">
            <div class="mb-2">
              <label for="name" class="form-label">Name</label>
              <input type="name" name="name" id="name" class="form-control" required="true">
            </div>
            <div class="mb-2">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" required="true">
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" required="true">
            </div>
            <div class="mb-2">
              <label for="confirmpassword" class="form-label">Confirm Password</label>
              <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" required="true">
            </div><br>
            <input type="submit" name="Login" class="btn btn-outline-dark btn-block" value="Register">
            <a href="login.php">Already have an account? Log in</a>
          </form>
          <br>
          <br>
          <br>
          <br>
        </div>
        <div class="col-3">
        </div>
      </div>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>

</body>

</html>