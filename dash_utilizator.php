<?php
	session_start();
	if (!isset($_SESSION["admin"]) or $_SESSION["admin"] == 0){
		$message = 'You must log in as an Admin to access this page.';

    echo "<SCRIPT type='text/javascript'> 
        alert('$message');
        window.location.replace('login.php');
    </SCRIPT>";
	}
	
?>
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
function reset()
{
	document.getElementById("ContactForm").reset();
}	
function validare()								 
{ 
	var parola = document.forms["RegForm"]["parola"]; 
	var nume = document.forms["RegForm"]["nume"]; 
	var data = document.forms["RegForm"]["data_Nasterii"]; 
	var email = document.forms["RegForm"]["email"]; 
	var tip = document.forms["RegForm"]["tip_Utilizator"]; 
	if (tip_Utilizator.value == "")
	{
		window.alert("Nu ati introdus tipul utilizatorului.");
		return false;
	}
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
	if(parola.value == "")
	{
		window.alert("Nu ati introdus parola.");
		return false
	}
	if (data.value == "")
	{
		window.alert("Nu ati introdus data.");
		return false;
	}
	return true;
}</script> 
	
  <script src="js/menu.js" type="text/javascript"></script>
  </head>
  <body>
   
<a id="TopMenuLink" href="topmenu.php"></a>
    
	
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
		
		<button type="button" class="btn btn-secondary" disabled><h5></h5></button>
		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Manage Databases</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link active" href="dash_utilizator.php">
              <span data-feather="home"></span>
				Manage Users <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash_contact.php">
              <span data-feather="file"></span>
             Manage Contact
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash_reteta.php">
              <span data-feather="shopping-cart"></span>
              Manage Recipes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash_ingredient.php">
              <span data-feather="users"></span>
              Manage Ingredients
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dash_retingr.php">
              <span data-feather="bar-chart-2"></span>
              Manage Recipe-Ingredients
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="dash_review.php">
              <span data-feather="bar-chart-2"></span>
              Manage Reviews
            </a>
          </li>
          
		  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>View Databases</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
		  
		  <li class="nav-item">
            <a class="nav-link" href="dash_v_user.php?id=1">
              <span data-feather="bar-chart-2"></span>
              View Users
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="dash_v_contact.php?id=1">
              <span data-feather="bar-chart-2"></span>
              View Contact
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="dash_v_recipe.php?id=1">
              <span data-feather="bar-chart-2"></span>
              View Recipes
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="dash_v_ingredient.php?id=1">
              <span data-feather="bar-chart-2"></span>
              View Ingredients
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="dash_v_retingr.php?id=1">
              <span data-feather="bar-chart-2"></span>
              View Recipe-Ingredients
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="dash_v_review.php?id=1">
              <span data-feather="bar-chart-2"></span>
              View Reviews
            </a>
          </li>
        </ul>
		
      </div>
	 
	  
    </nav>
	

  
   
    <main role="main" class="col-md-0 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-0 mb-0 border-bottom">
        <h1 class="h1">Dashboard</h1>
		
        </div>
		 <h2>Manage Users</h2>
      

<form id="form1" name="RegForm" method="post" action="">
  <table class="table" width="459" border="1" align="center">
    <tr>
      <?php error_reporting(0); ?>
      <td width="126">ID </td>
      <td width="171"><label>
        <input name="id" type="text" id="id" size="35" value="<?php 
 if($_POST["Search"]=="Search"){

$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_utilizator where id ='". $_POST["id"]."'");

while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["id"];
}
}
 ?>"/>
      </label></td>
      <td width="140"><input name="Search" type="submit" id="Search" value="Search" class="btn btn-warning"/>
	  <button class="btn btn-secondary" onclick="reset()" value="Reset">Reset</button></td>
	  
    </tr>
    <tr>
      <td>User Type</td>
      <td colspan="2"><input name="tip_Utilizator" type="text" size="35" id="tip_Utilizator" value="<?php 
if($_POST["Search"]=="Search"){
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_utilizator where id ='". $_POST["id"]."'");
while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["tip_Utilizator"];
}
} ?>"/>
          <label></label></td>
    </tr>
    <tr>
      <td>Name</td>
      <td colspan="2"><input name="nume" type="text" id="nume" size="35" value="<?php 
if($_POST["Search"]=="Search"){
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_utilizator where id ='". $_POST["id"]."'");
while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["nume"];
}
} ?>"/></td>
    </tr>
	<tr>
      <td>Email</td>
      <td colspan="2"><input name="email" type="text" id="email" size="35" value="<?php 
if($_POST["Search"]=="Search"){
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_utilizator where id ='". $_POST["id"]."'");
while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["email"];
}
} ?>"/></td>
    </tr>
	<tr>
      <td>Password</td>
      <td colspan="2"><input name="parola" type="text" id="parola" size="35" value="<?php 
if($_POST["Search"]=="Search"){
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_utilizator where id ='". $_POST["id"]."'");
while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["parola"];
}
} ?>"/></td>
    </tr>
	<tr>
      <td>Birthday</td>
      <td colspan="2"><input name="data_Nasterii" type="date" id="data_Nasterii" value="<?php 
if($_POST["Search"]=="Search"){
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_utilizator where id ='". $_POST["id"]."'");
while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["data_Nasterii"];
}
} ?>"/></td>
    </tr>

  </table>
  <td>
<br>
  </td>  

  <table width="200" border="1" align="center">
    <tr>
      <td><input name="Save" type="submit" id="Save" value="Save Record" onclick ="return validare()" class="btn btn-success"/></td>
      <td><input name="Update" type="submit" id="Update" value="Update Record" onclick ="return validare()" class="btn btn-primary"/></td>
      <td><input name="Delete" type="submit" id="Delete" value="Delete Record" class="btn btn-danger"/></td>
    </tr>
  </table>
</form>
      
     
    </main>
   

	
  

 
  <!-- /.container -->
	
	<!-- Footer -->
	
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

<?php

$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");

$id = $_POST["id"];
$tip_Utilizator = $_POST["tip_Utilizator"];
$nume = $_POST["nume"];
$email = $_POST["email"];
$parola = $_POST["parola"];
$data_Nasterii = $_POST["data_Nasterii"];


//Install Database Code

//Save button Code
if($_POST["Save"]=="Save Record"){
mysqli_query($db,"insert into bar_utilizator(tip_Utilizator,nume,email,parola,data_Nasterii)values('".$tip_Utilizator."','".$nume."','".$email."','".$parola."','".$data_Nasterii."')");
echo "<center>Save successful.</center>";
}

//Update button Code
if($_POST["Update"]=="Update Record"){
mysqli_query($db,"update bar_utilizator set tip_Utilizator = '".$tip_Utilizator."', nume='".$nume."',email ='".$email."',parola='".$parola."', data_Nasterii ='".$data_Nasterii."' where id ='".$id."'");
echo "<center>update successful.</center>";
}

//Delete button Code
if($_POST["Delete"]=="Delete Record"){
mysqli_query($db,"delete from bar_utilizator where id = '".$id."'");
echo "<center>delete successful.</center>";
}

//Search for code button
if($_POST["Search"]=="Search"){
$str = $_POST['id'];
$length = strlen($str);
if($length == 0){
echo "<center>No input id: <br> If you want to view all list of database just input any id and click search button</center>";
}else{
$qry = mysqli_query($db,"select * from bar_utilizator where id ='".$id."'");
$qry2 = mysqli_query($db,"select * from bar_utilizator");
$num_rows = mysqli_num_rows($qry);
if($num_rows == 0){
echo "<center>No match id for: ".$_POST['id']." <br><br> Available record are the following.<br><br></center>";
echo "ffff".$qry2;
echo "aaaa".$qry;
while($rs = mysqli_fetch_array($qry2,MYSQLI_ASSOC)){
echo"<center>";
echo "id: ".$rs["id"]." nume: ".$rs["nume"]." email: ".$rs["email"]." mesaj: ".$rs["mesaj"]." <br>";
}
}
while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo"<center>";
echo "id: ".$rs["id"]." nume: ".$rs["nume"]." email: ".$rs["email"]." mesaj: ".$rs["mesaj"]." <br>";
}
}
}
?>
