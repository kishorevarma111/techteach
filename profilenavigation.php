<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: signin.php');
		exit();
	}
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">TECH TEACH</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form>
          <input type="text" placeholder="Search your friend" id="search" class="form-control">

        </li>
        <li class="nav-item">
        <input type="submit" name="searchfriend" value="search" class="btn-success form-control">
        </li>
          </form>
        <li class="nav-item">
          <a class="nav-link" href="about.php">option3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">option4</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span id="username"><?php echo $_SESSION['givenName'].$_SESSION['familyName']?></span>
            <img class="img-responsive" src="profileicon.jpg">
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="profile.php">edit profile</a>
            <a class="dropdown-item" href="#">my tutorials</a>
            <a class="dropdown-item" href="#">Add tutorials</a>
            <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item" href="signout.php">SignOut</a>
          </div>
        </li>


      </ul>
    </div>
  </div>
</nav>
