<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Smart Bartender</title>
	
	<script> 
function validare()								 
{ 
	var parola = document.forms["RegForm"]["parola"]; 
	var parola2 = document.forms["RegForm"]["parola2"]; 
	var nume = document.forms["RegForm"]["nume"]; 
	var data = document.forms["RegForm"]["data"]; 
	var email = document.forms["RegForm"]["email"]; 
	if (nume.value == "")
	{
		window.alert("Nu ati introdus numele.");
		return false;
	}
	if (data.value == "")
	{
		window.alert("Nu ati introdus data.");
		return false;
	}
	if (email.value == "")
	{
		window.alert("Nu ati introdus email-ul.");
		return false
	}
	if (email.value.indexOf("@", 0) < 0)				 
	{ 
		window.alert("Nu ati introdus un email valid."); 
		return false; 
	} 
	if (email.value.indexOf(".", 0) < 0)				 
	{ 
		window.alert("Nu ati introdus un email valid."); 
		return false; 
	} 
	if(parola.value == "")
	{
		window.alert("Nu ati introdus parola.");
		return false
	}
	if(parola2.value == "")
	{
		window.alert("Nu ati confirmat parola.");
		return false
	}
	if (parola.value != parola2.value)
	{
		window.alert("Parolele nu se potrivesc.");
		return false;
	}
	return true;
}</script> 
 <script src="js/menu.js" type="text/javascript"></script>
  </head>
  <body>
   
<a id="TopMenuLink" href="topmenu.php"></a>

 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="container">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Please fill out the form below to create your account.</p>
	<form name="RegForm" method="post" action="signup_f.php" onsubmit="return validare()">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		<input type="text" name="nume" placeholder="Name" class="form-control">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar-alt"></i> </span>
		</div>
		<input class="form-control" name="data" type="date">
    </div> <!-- form-group// -->	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="parola" type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" aria-describedby="passwordHelpText" placeholder="Password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="parola2" type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" aria-describedby="passwordHelpText" placeholder="Confirm Password">
		<small id="passwordHelpText" class="form-text text-muted">
  Your password must be at least 8 characters long, must contain at least 1 uppercase letter, 1 lowercase letter and 1 number.
</small>

    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.html">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->



  <footer class="py-2 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Smart Bartender - Bran Sergiu 2019</p>
    </div>
    <!-- /.container -->
  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>