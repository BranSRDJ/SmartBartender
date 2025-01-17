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
</script> 
	
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
            <a class="nav-link" href="dash_utilizator.php">
              <span data-feather="home"></span>
				Manage Users
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
            <a class="nav-link active" href="dash_retingr.php">
              <span data-feather="bar-chart-2"></span>
              Manage Recipe-Ingredients <span class="sr-only">(current)</span>
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
		 <h2>Manage Recipe-Ingredients</h2>
      

<form id="form1" name="RegForm" method="post">
  <table class="table" width="459" border="1" align="center">
  <thead class='thead-dark'><tr><th colspan="3"></th></tr></thead>
    <tr>
       <?php error_reporting(0); ?>
      <td width="126">ID </td>
      <td width="70%"><label>
        <input name="id" type="text" id="id" size="35" value="<?php 
 if($_POST["Search"]=="Search"){

$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");
$qry = mysqli_query($db,"select * from bar_reteta_ingrediente where id ='". $_POST["id"]."'");

while($rs = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
echo $rs["id"];
}
}
 ?>"/>
      </label></td>
	  <td>
	  <button class="btn btn-secondary" onclick="reset()" value="Reset">Reset</button></td>
	  
    </tr>
	<tr>
      <td>Recipe</td>
      <td colspan="2"><label>
		<?php
//db connection
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");

//query
$sql=mysqli_query($db,"SELECT id, denumire FROM bar_reteta");
if(mysqli_num_rows($sql)){
$select= '<select name="id_Reteta" id="id_Reteta" style="width: 100px;>';
$select.='<option value="useless">more useless</option>';
while($rs=mysqli_fetch_array($sql)){
     $select.='<option value="'.$rs['id'].'">'.$rs['denumire'].'</option>';
  }
}
$select.='</select>';
echo $select;
?>
      </label></td>
    </tr>
    <tr>
      <td>Ingredient</td>
      <td colspan="2"><label>
       <?php
//db connection
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");

//query
$sql=mysqli_query($db,"SELECT id, denumire FROM bar_ingredient");
if(mysqli_num_rows($sql)){
$select= '<select name="id_Ingredient" id="id_Ingredient" style="width: 100px;>';
$select.='<option value="useless">more useless</option>';
while($rs=mysqli_fetch_array($sql)){
     $select.='<option value="'.$rs['id'].'">'.$rs['denumire'].'</option>';
  }
}
$select.='</select>';
echo $select;
?>
      </label></td>
	  
    </tr>
  </table>
  <td>
<br>
  </td>  

  <table width="100" border="1" align="center">
    <tr>
      <td><input name="Save" type="submit" class="btn btn-success" onclick="return validare()" id="Save" value="Save Record" /></td>
	  <td><input name="Update" type="submit" id="Update" value="Update Record" onclick ="return validare()" class="btn btn-primary"/></td>
      <td><input name="Delete" type="submit" id="Delete" value="Delete Record" class="btn btn-danger"/></td>
    </tr>
  </table>
</form>

<?php

$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"smart_bartender");

$id = $_POST["id"];
$id_Reteta = $_POST["id_Reteta"];
$id_Ingredient = $_POST["id_Ingredient"];

echo $id;
echo $id_Reteta;
echo $id_Ingredient;

?>
     
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
$id_Ingredient = $_POST["id_Ingredient"];



//Save button Code
if($_POST["Save"]=="Save Record"){	
mysqli_query($db,"INSERT INTO bar_reteta_ingrediente(id_Reteta, id_Ingredient) VALUES ('".$id_Reteta."','".$id_Ingredient."')");
echo "<center>Save successful.</center>";
}

//Update button Code
if($_POST["Update"]=="Update Record"){
mysqli_query($db,"update bar_reteta_ingrediente set id_Reteta = '".$id_Reteta."', id_Ingredient = '".$id_Ingredient."' where id ='".$id."'");
echo "<center>update successful.</center>";
}

//Delete button Code
if($_POST["Delete"]=="Delete Record"){
mysqli_query($db,"delete from bar_reteta_ingrediente where id = '".$id."'");
echo "<center>delete successful.</center>";
}

?>