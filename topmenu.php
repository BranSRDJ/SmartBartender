<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <nav id="TopMenu" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <span style="font-size: 30px; color: Dodgerblue;"><i class="fas fa-glass-cheers"></i>SmartBartender</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php?id=1">Profile</a>
          <div class="dropdown-divider"></div>
		      <?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<a class='dropdown-item' href='register.php'>Register</a>
		  <a class='dropdown-item' href='login.php'>Log in</a>";
}
	else{
	echo "<a class='dropdown-item' href='logout.php'>Log out</a>";
}
?>
          
        </div>
      </li>
    </ul>
    <form class="form-inline">
	<button class="btn btn-outline-success mb-2" type="button">Cocktail Builder</button>
	<div class="input-group mb-2 mr-sm-2">
	
	</div>
	<?php
	if (isset($_SESSION["admin"]) and $_SESSION["admin"] == 1)
	echo "
	<div class='form-check mb-2 mr-sm-2'>
		<a href='dash_utilizator.php?id=1'><button class='btn btn-outline-danger my-2 my-sm-0' type='button'>Dashboard</button></a>
	</div>";
	
	?>

  
</form>
  </div>
</nav>
</body>
</html>
