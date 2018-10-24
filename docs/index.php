<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>

<head>

  <title>Movie App</title>


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <!-- CUSTOM STYLES -->
  <link rel="stylesheet" type="text/css" href="css/homepagestyle.css">

<!--     <link rel="stylesheet" type="text/css" href="styles.css">
 -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">

  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- CUSTOM JS -->
  <!-- <script type="text/javascript" src="JS/config.js"></script> -->
  <script type="text/javascript" src="js/scripts.js"></script>

</head>

<body>
  <!--  -->
  <!-- Navbar -->
  <!--  -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">The Movie Info App</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#" class="nowPlaying">Now Playing</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Genres<span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#" class="action" id="action">Action</a></li>
              <li><a href="#" class="adventure" id="adventure">Adventure</a></li>
              <li><a href="#" class="animation" id="animation">Animation</a></li>
              <li><a href="#" class="comedy" id="comedy">Comedy</a></li>
              <li><a href="#" class="crime" id="crime">Crime</a></li>
              <li><a href="#" class="drama" id="drama">Drama</a></li>
              <li><a href="#" class="family" id="family">Family</a></li>
              <li><a href="#" class="fantasy" id="fantasy">Fantasy</a></li>
              <li><a href="#" class="history" id="history">History</a></li>
              <li><a href="#" class="music" id="music">Music</a></li>
              <li><a href="#" class="romance" id="romance">Romance</a></li>
              <li><a href="#" class="scifi" id="scifi">Science Fiction</a></li>
              <li><a href="#" class="thriller" id="thriller">Thriller</a></li>
            </ul>
          </li>
          <li class="gitHubLogo">
            <a href="https://github.com/ajaymourya1234/movie-info-web-app.git" target="_blank">GitHub Repo</a>
          </li>
          <!-- <li><a href="#">Specials</a></li> -->
          <!--      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Extras <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">VIP Rewards Card</a></li>
            <li><a href="#">Specials and Promotions</a></li>
            <li><a href="#">Gift Cards</a></li>
          </ul>
        </li> -->
          <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locations<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Atlanta</a></li>
            <li><a href="#">Buckhead</a></li>
            <li><a href="#">Midtown</a></li>
            <li><a href="#">Marietta</a></li>
          </ul>
        </li> -->
        </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="icon-bar"><a class="logout" href="index.php?logout='1'";">Logout</a></li>
          </ul>

        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-right searchForm">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search movies">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

    <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p style="color: white; font-size: 18px; margin-left: 25px">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>

  <!-- Displaying the movies -->

  <div class="container">
    <div class="row">
      <div class="genreLabel">
        <h1 id="movieGenreLabel"></h1>
      </div>
      <!-- I need the h1 to change accordingly depending on what was clicked. -->
      <div id="movie-grid">
        <!-- Jquery get us the movie posters! Need a place to put the poster images -->
      </div>
    </div>
  </div>

</body>

</html>