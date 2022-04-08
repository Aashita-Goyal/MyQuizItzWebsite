<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./CSS/style.css" />
  </head>

  <body>
    
  <?php include 'includes/navbar.php'; ?>

    <div class="container-fluid main1"  style="color: black;">
        <div class="container">
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6">
                    <h2 style="text-align: center;" text="white">Sign In</h2>
                    <br>

                    <img src="https://th.bing.com/th/id/OIP.G9FH5pusX4f-JmJ9QaTFbgHaGr?pid=ImgDet&w=2838&h=2557&rs=1" alt="Avatar" class="center">
                    <br>
                    
                    <form action="scripts/loginscript.php" method="post">
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required="true">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required="true">
                </div><br>
                <input type="submit" name="Login" class="btn btn-outline-light btn-block" value="Login">
                <a href="forgotpassword.php">forgot password?</a><a href="register.php" style="float: right;">Need an account? Register</a>
            </form>
                    <br>

                    <br>
                    <br>
                    <br>
                    <a href="Register.html"> 
                        <p class = "link" style="text-align: center;">Don't have account? Register</p>
                    </a>
                </div>
                <div class="col-3">
            </div>
        </div>
    </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>









<!--<li class="nav-item">
            <a class="nav-link" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Help</a>
          </li>
        </ul>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href=""
              >Settings
              <img
                src="https://img.icons8.com/small/128/000000/settings.png"
                class="icons"
            /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""
              >Profile
              <img
                src="https://img.icons8.com/glyph-neue/64/000000/lifecycle.png"
                class="icons"
            /></a>
          </li>--> 