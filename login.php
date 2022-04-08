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
    
    <nav class="navbar navbar-expand-md bg-gradient-secondary" style="background-color: #219f94" id="grad">
        <div class = "padLogo"></div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Go Back</a>
              </div>

        
        
          
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
          
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
          </script>
      <div class="container">
        <a class="navbar-brand" href="">
          <h3 class="logo" style="color: #655d8a">QuizItz</h3>
        </a>
        <ul class="nav justify-content-end">
         
          <li class="nav-item">
            <a class="nav-link" 
               href=""
              >Go Back
              <img
                src="https://img.icons8.com/ios/100/000000/shutdown--v1.png"
                class="icons"
            /></a>
          </li>
        </ul>
      </div>
    </div>
    </nav>


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
<<<<<<< HEAD:login.php
                    
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
=======
                    <form action="login.php" method="post">
                    <label>E-mail</label>
                    <input type="text" name="youremail" placeholder="Enter your email-id"class="form-control"/>
                    <br>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control"/>
                    <br>
                  </form>
                    <input type="checkbox" name="cb" value="rm" /> <label>Remember me</label>
                    <a href="" style="float:right;">
                        <p class = "link" style="text-align: end; text-decoration: none;">Forgot Password?</p>
                    </a>
                    <br>
                    <br>
                    <input type="button" 
                    class="btn btn-outline-dark" 
                    value="Login" class="form-control" 
                    style="width: 25%;">
>>>>>>> 76303c9fee745ee0329ca160e767198aa70e1f04:login.html
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

    <footer>
          <div class="container-fluid" style="text-align: center; background-color: #219F94; color: rgb(0, 0, 0); padding-top: 50px; padding-bottom: 50px;">
              <h5>Follow Us</h5>
              <a href=""><img src="https://img.icons8.com/ios-glyphs/60/000000/facebook-new.png" class="icons"/></a>
              <a href=""><img src="https://img.icons8.com/ios-glyphs/50/000000/instagram-new.png" class="icons"/></a>
              <a href=""><img src="https://img.icons8.com/ios-glyphs/30/000000/twitter--v1.png" class="icons"/></a>
              <br>
              <p>© 2022 QuizItz Inc</p>
          </div>
      </footer>
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