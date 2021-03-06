<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="./CSS/style.css"/>
    <link rel="stylesheet" href="./CSS/carousel.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    
    
    <link rel="stylesheet" href="./CSS/carousel.css"/>
    <link rel="stylesheet" href="./CSS/style.css"/>
  </head>
  
  <body>
    
  <?php include 'includes/navbar-logout.php'; ?>

    <!--Carousel-->
    <div class = "carousel__container">
      <div class="carouselLeftContainer">
      <!-- <p class="text__left">Hello left</p> --> 
        <h1 class="text__left">Create your own quiz</h1>
                        <p>Create or attempt quizzez with new expert explanations and our ever-effective flashcards, get a suite of science-backed study tools at your fingertips.</p>
                        <input type="button" class="btn btn-outline-dark" value="Create">
      </div>
      <div class = "carouselDimensions">
        <section class="carousel" aria-label="Gallery">
          <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0"
              class="carousel__slide">
            <div class="carousel__snapper">
              <a href="#carousel__slide4"
                class="carousel__prev"><!--Go to last slide--></a>
              <a href="#carousel__slide2"
                class="carousel__next"><!--Go to next slide--></a>
            </div>
          </li>
          <li id="carousel__slide2"
              tabindex="0"
              class="carousel__slide">
            <div class="carousel__snapper">
            </div>
            <a href="#carousel__slide1"
               class="carousel__prev"><!--Go to previous slide--></a>
            <a href="#carousel__slide3"
               class="carousel__next"><!--Go to next slide--></a>
          </li>
          <li id="carousel__slide3"
              tabindex="0"
              class="carousel__slide">
            <div class="carousel__snapper"></div>
            <a href="#carousel__slide2"
              class="carousel__prev"><!--Go to previous slide--></a>
            <a href="#carousel__slide4"
              class="carousel__next"><!--Go to next slide--></a>
          </li>
          <li id="carousel__slide4"
              tabindex="0"
              class="carousel__slide">
            <div class="carousel__snapper"></div>
            <a href="#carousel__slide3"
              class="carousel__prev"><!--Go to previous slide--></a>
            <a href="#carousel__slide1"
              class="carousel__next"><!--Go to first slide--></a>
          </li>
        </ol>
        <aside class="carousel__navigation">
          <ol class="carousel__navigation-list">
            <li class="carousel__navigation-item">
              <a href="#carousel__slide1"
                class="carousel__navigation-button"><!--Go to slide 1--></a>
            </li>
            <li class="carousel__navigation-item">
              <a href="#carousel__slide2"
                class="carousel__navigation-button"><!--Go to slide 2--></a>
            </li>
            <li class="carousel__navigation-item">
              <a href="#carousel__slide3"
                class="carousel__navigation-button"><!--Go to slide 3--></a>
            </li>
            <li class="carousel__navigation-item">
              <a href="#carousel__slide4"
                class="carousel__navigation-button"><!--Go to slide 4--></a>
            </li>
          </ol>
        </aside>
      </section>
      </div>
    </div>

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

    <div class="container-fluid">
    <section class="offer">
      <h1>Other features</h1>
      <p>Life is not a problem to be solved. Just remember to have something that keeps you busy doing what you love while
        being surrounded by the people who love you.</p>
      <div class="row">
        <div class="offer-col-2">
          <img src="https://th.bing.com/th/id/R.16554dd82a1e89a03cf7e9d64be84339?rik=wGkWcGZttC%2fnEA&riu=http%3a%2f%2fwww.allbluevr.com%2fwp-content%2fuploads%2f2017%2f06%2fAll-Blue-Quiz.jpg&ehk=L7V9TI%2b2Z4kbGC1kO2jIK7%2ftHwfuwVULeVsx3PHOwuA%3d&risl=&pid=ImgRaw&r=0">
          <div class="layer">
            <h3 class="card__text">Create Quiz</h3>
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
  </div>

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

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

  </body>
</html>