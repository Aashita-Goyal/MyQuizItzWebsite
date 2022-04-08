<?php

    session_start();
    if(isset($_SESSION['email'])){
        header('location:home.php');
    }

?>
<!DOCTYPE html>
<html>

<head>
  <title>Index</title>
  
  
  
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/styleIndexEdited.css">
  <link rel="stylesheet" href="./CSS/navbar_footer.css">
  <link rel="stylesheet" href="./CSS/new.css">
  
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
  <section class="header">

  <?php include './includes/navbar.php'; ?>

   <!--  <div class="text-box">
      <h1>Online learning Platform</h1>
      <p>With new expert explanations, an AI Learning Assistant and our ever-effective flashcards,<br> get a suite of
        science-backed study tools at your fingertips.</p>
      <a href="" class="hero-btn">Get Started </a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()"> &#9776; </span>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>


    <div class="container">
      <a class="navbar-brand pe-sm-3" href="home.html">
        <h3 class="logo">QuizItz</h3>
      </a>
      <ul class="nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.html">
            <p class="text-light mt-2">Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">
            <p class="text-light mt-2">About Us</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">
            <p class="text-light mt-2">Contact</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <p class="text-light mt-2">Help</p>
          </a>
        </li>
      </ul>
      <ul ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="">
            <p class="text-light mt-2">Settings<i class="fa-solid fa-gear p-2"></i></p>
            <!--<img src="https://img.icons8.com/small/128/000000/settings.png" class="icons" />-->
         <!-- </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.html">
            <p class="text-light mt-2">Profile<i class="fa-solid fa-user p-2"></i></p>

            <!--<img src="https://img.icons8.com/glyph-neue/64/000000/lifecycle.png" class="icons" />-->
         <!-- </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <p class="text-light mt-2">Logout<i class="fa-solid fa-power-off p-2"></i></p>

            <!--<img src="https://img.icons8.com/ios/100/000000/shutdown--v1.png" class="icons" />-->
         <!-- </a>
        </li>
      </ul>
    </div>
    </div>
  </nav> -->


  <div class="text-box">
    <h1>Online learning Platform</h1>
    <p>With new expert explanations, an AI Learning Assistant and our ever-effective flashcards,<br> get a suite of
      science-backed study tools at your fingertips.</p>
    <a href="" class="hero-btn">Get Started </a>
  </div>
</section>


<section class="course">
  <h1>What we offer</h1>
  <p>There is no future, no past. There is only the present.</p>
  <div class="row">
    <div class="course-col-2">
      <h3>Attempt Quiz</h3>
      <p>Attempt quizzez with new expert explanations and our ever-effective flashcards, get a suite of science-backed study tools at your fingertips.
      </p>
    </div>
    <div class="course-col-2">
      <h3>Read Study materials</h3>
      <p>Effective study material to familiarise students with their course unit related to every branches.
      </p>
    </div>
    <div class="course-col-2">
      <h4>Placement Preparations</h4>
      <p>As placement seasons are coming so provided with placement materials with respect to every branches.
      </p>
    </div>
    <div class="course-col-2">
      <h3>Flashcards</h3>
      <p>Mixed with smart study tools, our flashcards have been helping students ace their toughest exams.
      </p>
    </div>
  </div>
</section>

<section class="offer">
  <h1>Other features</h1>
  <p>Life is not a problem to be solved. Just remember to have something that keeps you busy doing what you love while
    being surrounded by the people who love you.</p>
  <div class="row">
    <div class="offer-col-2">
      <img src="https://th.bing.com/th/id/R.16554dd82a1e89a03cf7e9d64be84339?rik=wGkWcGZttC%2fnEA&riu=http%3a%2f%2fwww.allbluevr.com%2fwp-content%2fuploads%2f2017%2f06%2fAll-Blue-Quiz.jpg&ehk=L7V9TI%2b2Z4kbGC1kO2jIK7%2ftHwfuwVULeVsx3PHOwuA%3d&risl=&pid=ImgRaw&r=0">
      <div class="layer">
        <h3>Create Quiz</h3>
      </div>
    </div>
    <div class="offer-col-2">
      <img src="https://th.bing.com/th/id/OIP.NZCjTGctXCOE9qVNszma4gHaE8?pid=ImgDet&rs=1">
      <div class="layer">
        <h3>Upload Study materials</h3>
      </div>
    </div>
    <div class="offer-col-2">
      <img src="https://www.eschoolnews.com/files/2017/08/gaming-600x400.jpg">
      <div class="layer">
        <h3>Interactive Learning</h3>
      </div>
    </div>
  </div>
</section>

<section class="facilities">
  <h1>Our facilities</h1>
  <p>Our ikigai is different for all of us, but one thing we have in common is that we are all searching for meaning.
  </p>
</section>

  <section class="cta">
    <h1>Enroll for our various online courses <br> anywhere from the world</h1>
    <a href="" class="hero-btn">Contact us</a>
  </section>
  
  <?php include 'includes/footer.php'; ?>

</body>

</html>