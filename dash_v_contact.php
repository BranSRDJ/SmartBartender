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
            <a class="nav-link active" href="dash_v_contact.php?id=1">
              <span data-feather="bar-chart-2"></span>
              View Contact <span class="sr-only">(current)</span> 
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
		 <h2>View Contact</h2>
      

<?php

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"smart_bartender");

$id=$nume=$email=$mesaj="";

$start=0;
$limit=6;
$id=2;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}


$sqlv="SELECT * FROM bar_contact LIMIT $start, $limit"; 
$resultv= mysqli_query($db,$sqlv);
 

if (!$resultv)
 die('Invalid querry:' .mysqli_error($db));
 else 
 {
  echo "<table class='table' border=1 cellpadding=2>";
  echo "<thead class='thead-dark'>
		<tr><th>ID</th><th><b>Name</th><th>Email</th><th>Message</th></tr>
		</thead>";
     while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
     {echo "<tr><td>";
     echo $myrow["id"];
      echo "</td><td>";
      echo $myrow["nume"];
      echo "</td><td>";
      echo $myrow["email"];
	  echo "</td><td>";
      echo $myrow["mesaj"];
	  echo "</td>";
      }
  echo "</table>";
echo "<div class='mx-auto' style='width: 200px;'>";
$rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM bar_contact"));
$total=ceil($rows/$limit);
 echo "<nav aria-label='Page navigation example'>
  <ul class='pagination'>
    <li class='page-item'>";
if($id>1)
{
	echo "<a class='page-link' href='?id=".($id-1)."' aria-label='Previous'>";
	echo "<span aria-hidden='true'>&laquo;</span>
      </a>
    </li>";
	#echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS </a> ";
}



for($i=1;$i<=$total;$i++)
{
if($i==$id) { #echo "<li class='current'>".$i."</li>"; 
 echo "<li class='page-item active'><a class='page-link' href='#'>".$i."</a></li>";

}

else { #echo "<li><a href='?id=".$i."'>".$i."</a></li>"; 
 echo "<li class='page-item'><a class='page-link' href='?id=".$i."'>".$i."</a></li>";
}
}

if($id!=$total)
{
echo "<li class='page-item'>
      <a class='page-link' href='?id=".($id+1)."' aria-label='Next'>
        <span aria-hidden='true'>&raquo;</span>
      </a>
    </li>";
#echo "<a href='?id=".($id+1)."' class='button'> NEXT</a>";
}

echo "  </ul>
</nav>";
 }

echo "</div>";
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

