    <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $message = 'Please log in before trying to access the profile area.';

    echo "<SCRIPT type='text/javascript'> 
        alert('$message');
        window.location.replace('login.php');
    </SCRIPT>";
}

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"smart_bartender");

$sqlv="SELECT * FROM bar_utilizator WHERE id = '".$_SESSION['id']."'"; 
$resultv= mysqli_query($db,$sqlv);
$myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC)

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


<div style="margin-bottom: 50px;" class="card bg-light">
<article class="card-body">
	
	

    <div class="text-center row">
  		<div class="col-sm-12"><h1><?php echo $_SESSION["nume"]; ?></h1></div>
    	</div>
    <div class="mx-auto row" style="width: 600px;" 	>
  		<!--/col-3-->
    	<div class="col-sm-12">
		<hr>

      <div class="text-center">
        <img src="<?php echo $myrow["imagine"]; ?>" height="200" width="200" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
		<form class="form" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="submit" value="Upload Image" name="Upload" id="Upload">Upload</button>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="file" name="file">
    <label class="custom-file-label" for="file">Choose file</label>
  </div>
</div>
</form>
      </div>           
          
          
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		  
  <li class="nav-item">
    <a class="nav-link active" id="pills-reviews-tab" data-toggle="pill" href="#reviews-tab" role="tab" aria-controls="reviews-tab">Reviews</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" id="pills-user-tab" data-toggle="pill" href="#user-tab" role="tab" aria-controls="user-tab">Personal Data</a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link" id="pills-password-tab" data-toggle="pill" href="#password-tab" role="tab" aria-controls="password-tab">Reset Password</a>
  </li>
  
  
  
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade" id="user-tab" role="tabpanel" aria-labelledby="user-tab">
 <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="nume" id="nume" placeholder="Name" value="<?php echo $myrow["nume"]; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Email</h4></label>
                              <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $myrow["email"]; ?>">
                          </div>
                      </div>
         					
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Birthday</h4></label>
                              <input type="date" class="form-control" name="data_Nasterii" id="data_Nasterii" value="<?php echo $myrow["data_Nasterii"]; ?>">
                          </div>
                      </div>
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
								<button class="btn btn-lg btn-success" name="Update" id="Update" value="Update Record" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save Data</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
 
 </div>
 
  <div class="tab-pane fade" id="password-tab" role="tabpanel" aria-labelledby="password-tab">
  
  
                  <hr>
                  <form class="form" action="" method="post" id="passForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Old Password</h4></label>
                              <input type="password" class="form-control" name="old_password" id="old_password" value="" placeholder="Old">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>New Password</h4></label>
                              <input type="password" class="form-control" name="new_password" id="new_password" value="" placeholder="New">
                          </div>
                      </div>
					  <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Confirm New Password</h4></label>
                              <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="" placeholder="Confirm">
                          </div>
                      </div>
          
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-warning" name="Change" type="submit" id="Change" value="Change Password"><i class="glyphicon glyphicon-ok-sign"></i> Change Password</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                      
                     
                      
              	</form>
  
  </div>
  <div class="tab-pane fade show active" id="reviews-tab" role="tabpanel" aria-labelledby="reviews-tab">

                  <hr>
                  <?php

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"smart_bartender");

$id=$id_Reteta=$id_Utilizator=$like=$comentariu=$data="";

$start=0;
$limit=1;
$id=2;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}


$sqlv="SELECT bar_review.id, bar_review.nota, bar_review.comentariu, bar_review.data_Postarii, bar_reteta.denumire FROM bar_review INNER JOIN bar_reteta ON bar_review.id_Reteta = bar_reteta.id WHERE id_Utilizator = '".$_SESSION['id']."' LIMIT $start, $limit"; 
$resultv= mysqli_query($db,$sqlv);


if (!$resultv)
 die('Invalid querry:' .mysqli_error($db));
 else 
 {while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
     {$row=$myrow;
	 echo "<div class='card mb-3' style='max-width: 560px;'>
  <div class='row no-gutters'>
    <div class='col-md-4'>";
	if($myrow["nota"]=='Y')
		echo "<img src='img/like.png'class='card-img' alt='...'>";
	else
		echo "<img src='img/dislike.png'class='card-img' alt='...'>";
    echo "	
    </div>
	
    <div class='col-md-6'>
      <div class='card-body'>
        <h5 class='card-title'>".$myrow["denumire"]."</h5>
        <p class='card-text'>".$myrow["comentariu"]."</p>
        <p class='card-text'><small class='text-muted'>Posted on ".$myrow["data_Postarii"]."</small></p>
      </div>
    </div>
	<div class='col-md-1'>
		<div class='card-body'>
		<form method='post'>
		<button title='Delete this review' name='Delete' type='submit' id='Delete' value='Delete Record' class='btn'>
	<i class='fa fa-trash' style='color:red' aria-hidden='true'></i>
		</button>
		</form>
		</div>
	</div>
  </div>
</div>";
     }
echo "<div class='mx-auto' style='width: 200px;'>";
$rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM bar_review where id_Utilizator = '".$_SESSION['id']."'"));
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
 echo "<li class='page-item active'><a class='page-link' href=''>".$i."</a></li>";

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
  
  </div>
</div>
          
        

        </div><!--/col-9-->
    
  
  
	
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
<?php
$sqlv2="SELECT parola FROM bar_utilizator WHERE id = '".$_SESSION['id']."'"; 
$resultv2= mysqli_query($db,$sqlv2);
$myrow2=mysqli_fetch_array($resultv2,MYSQLI_ASSOC);

$old_password = $_POST["old_password"] ?? '';
$new_password = $_POST["new_password"] ?? '';
$confirm_password = $_POST["confirm_password"] ?? '';
$ok = 1;
$email_used = 0;
$same_mail = 0;

$nume = $_POST["nume"] ?? '';
$email = $_POST["email"] ?? '';
$data_Nasterii = $_POST["data_Nasterii"] ?? '';

$sqlv1="SELECT email FROM bar_utilizator WHERE id = '".$_SESSION['id']."'"; 
$resultv1= mysqli_query($db,$sqlv1);
$myrow1=mysqli_fetch_array($resultv1,MYSQLI_ASSOC);

if($myrow1["email"]==$email)
	$same_mail = 1;

$select = mysqli_query($db, "SELECT `email` FROM `bar_utilizator` WHERE `email` = '".$email."'") or exit(mysqli_error($db));
if(mysqli_num_rows($select) and $same_mail == 0) {
	
    echo "<script language='javascript'>
	     alert('This email is already in use. Please try another one.');
		 window.location.replace('profile.php?id=1');
		 </script>";
	$email_used = 1;
}

if($email_used == 0)
	if(isset($_POST["Update"]) and $_POST["Update"]=="Update Record"){
		echo "<SCRIPT type='text/javascript'> 
			alert('Your data was succesfully updated.');
			window.location.replace('profile.php?id=1');
			</SCRIPT>";
	mysqli_query($db,"update bar_utilizator set nume='".$nume."', email ='".$email."', data_Nasterii ='".$data_Nasterii."' where id = '".$_SESSION['id']."'");
	}
if(isset($_POST["Change"]) and $_POST["Change"]=="Change Password"){
	if($new_password != $confirm_password){
		echo "<SCRIPT type='text/javascript'> 
        alert('Your new password and confirmation password do not match.');
		window.location.replace('profile.php?id=1');
        </SCRIPT>";
		$ok = 0;
	}
	if($old_password != $myrow2['parola']){
		echo "<SCRIPT type='text/javascript'> 
        alert('Your old password is not correct.');
        window.location.replace('profile.php?id=1');
		</SCRIPT>";
		$ok = 0;
	}
	if($ok == 1){
		mysqli_query($db,"update bar_utilizator set parola = '".$new_password."' where id = '".$_SESSION['id']."'");
		echo  "<SCRIPT type='text/javascript'> 
			alert('You have succesfully changed your password.');
			window.location.replace('profile.php?id=1');
			</SCRIPT>";
	}
}
if(isset($_POST["Delete"]) and $_POST["Delete"]=="Delete Record"){
	mysqli_query($db,"delete from bar_review where id = '".$row["id"]."'");
	echo  "<SCRIPT type='text/javascript'> 
			alert('You have succesfully deleted the review.');
			window.location.replace('profile.php?id=1');
			</SCRIPT>";
}
 if(isset($_POST['Upload']))
	if($_POST["Upload"]=="Upload Image"){	
		$db=mysqli_connect("127.0.0.1","root","");
		mysqli_select_db($db,"smart_bartender");
		if ($_FILES["file"]["error"] > 0)
			echo  "<SCRIPT type='text/javascript'> 
			alert('There has been an error! Please try again.');
			window.location.replace('profile.php?id=1');
			</SCRIPT>";
		else
		{	
			$image="uploads/".$_FILES["file"]["name"];
			if(file_exists($image)){
				echo  "<SCRIPT type='text/javascript'> 
				alert('An image with this name already exists! Please use a different name.');
				window.location.replace('profile.php?id=1');
				</SCRIPT>";
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);
				$sql="update bar_utilizator set imagine = '$imagine' where id = '".$_SESSION['id']."'";
				$result= mysqli_query($db,$sql);
				if (!$result)
					die('Invalid querry:' .mysqli_error($db));
				else 
					echo  "<SCRIPT type='text/javascript'> 
						alert('You have succesfully updated your image!');
						window.location.replace('profile.php?id=1');
						</SCRIPT>";
			}
		}      
    }	
	
?>