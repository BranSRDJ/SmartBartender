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
	var nume = document.forms["ContactForm"]["nume"]; 
	var email = document.forms["ContactForm"]["email"]; 
	var mesaj = document.forms["ContactForm"]["mesaj"];
	
	if (nume.value == "")
	{
		window.alert("Nu ati introdus numele.");
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
	if (mesaj.value == "")
	{
		window.alert("Nu ati introdus un mesaj.");
		return false;
	}
	return true;
}</script> 
<style>

.full-height {
  min-height: 85vh
}
</style>
<script src="js/menu.js" type="text/javascript"></script>
  </head>
  <body>
    
	<a id="TopMenuLink" href="topmenu.php"></a>

 
<form name="ContactForm" class="" method="post" action="contact_f.php" onsubmit="return validare()">
<div class="container card">
	<div class="row">
	
		<div class="card full-height bg-primary col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact</h2>
				<h4>Fill out this form if you have a message or question for us!</h4>
			</div>
		</div>
		<div class="bg-light col-md-9">
			
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Your Name Here" name="nume">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="somebody@example.com" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="mesaj">Message:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" name="mesaj" placeholder=".............&#10;........&#10;....." rows="5" id="mesaj"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Submit</button>
				  </div>	
				</div>
			
		</div>
		
	</div>
</div>
</form>


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