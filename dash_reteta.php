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
	var id_Reteta = document.forms["form1"]["id_Reteta"]; 
	var denumire = document.forms["form1"]["denumire"]; 

	
	if (id_Reteta.value == "")
	{
		window.alert("Nu ati introdus id-ul retetei.");
		return false;
	}
	if (denumire.value == "")
	{
		window.alert("Nu ati introdus denumirea retetei.");
		return false
	}
	return true;
}</script> 
	
  </head>
  <body>
    
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <span style="font-size: 30px; color: Dodgerblue;"><i class="fas fa-glass-cheers"></i>SmartBartender</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cocktail builder</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Register</a>
		  <a class="dropdown-item" href="#">Log in</a>
        </div>
      </li>
    </ul>
    
  </div>
</nav>

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
            <a class="nav-link" href="dash_utilizator.php">
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
            <a class="nav-link active" href="dash_reteta.php">
              <span data-feather="shopping-cart"></span>
              Manage Recipes  <span class="sr-only">(current)</span>
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
        </ul>
		
      </div>
	 
	  
    </nav>
	

  
   
    <main role="main" class="col-md-0 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-0 mb-0 border-bottom">
        <h1 class="h1">Dashboard</h1>
		
        </div>
		 <h2>Manage Recipes</h2>
    

<form id="form1" name="form1" method="post" action="">
  <table class="table" width="459" border="1" align="center">
    <tr>
      <?php error_reporting(0); ?>
      <td width="126">ID </td>
      <td width="171"><label>
        <input size="35" name="id" type="text" id="id"  value="<?php 
 if($_POST["Search"]=="Search"){
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_reteta where id ='". $_POST["id"]."'");

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
      <td>Recipe ID</td>
      <td colspan="2"><label>
        <input size="35" name="id_Reteta" type="text" id="id_Reteta" value="<?php 
if($_POST["Search"]=="Search"){
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_reteta where id ='". $_POST["id"]."'");
while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["id_Reteta"];
}
} ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Recipe Name</td>
      <td colspan="2"><input size="35" name="denumire" type="text" id="denumire" value="<?php 
if($_POST["Search"]=="Search"){
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_reteta where id ='". $_POST["id"]."'");
while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["denumire"];
}
} ?>"/>
          <label></label></td>
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
$id_Reteta = $_POST["id_Reteta"];
$denumire = $_POST["denumire"];

//Install Database Code

//Save button Code
if($_POST["Save"]=="Save Record"){
mysqli_query($db,"insert into bar_reteta(id_Reteta,denumire)values('".$id_Reteta."','".$denumire."')");
echo "<center>Save successful.</center>";
}

//Update button Code
if($_POST["Update"]=="Update Record"){
mysqli_query($db,"update bar_reteta set id_Reteta = '".$id_Reteta."', denumire = '".$denumire."' where id ='".$id."'");
echo "<center>update successful.</center>";
}

//Delete button Code
if($_POST["Delete"]=="Delete Record"){
mysqli_query($db,"delete from bar_reteta where id = '".$id."'");
echo "<center>delete successful.</center>";
}

//Search for code button
if($_POST["Search"]=="Search"){
$str = $_POST['id'];
$length = strlen($str);
if($length == 0){
echo "<center>No input id: <br> If you want to view all list of database just input any id and click search button</center>";
}else{
$qry = mysqli_query($db,"select * from bar_reteta where id ='".$id."'");
$qry2 = mysqli_query($db,"select * from bar_reteta");
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