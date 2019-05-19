<?php

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"smart_bartender");

	$nume = $email = $parola = $data = "";

	$nume = $_POST["nume"];
    $data = $_POST["data"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];
	$email_used = 0;
	
$select = mysqli_query($db, "SELECT `email` FROM `bar_utilizator` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($db));
if(mysqli_num_rows($select)) {
	
    echo "<script language='javascript'>
	     alert('This email is already in use. Please try another one.');
		 window.location.replace('register.php');
		 </script>";
	$email_used = 1;
}
if($email_used == 0)
{

$sqlid="SELECT id FROM bar_utilizator ORDER BY id DESC LIMIT 1;";
$resultv=mysqli_query($db,$sqlid);
$myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC);

$sql="INSERT INTO bar_utilizator(nume, email, parola, data_Nasterii) VALUES ('$nume','$email','$parola','$data')";
$result= mysqli_query($db,$sql);
if (!$result)
 die('Invalid querry:' .mysqli_error($db));
 else 
 {
	$message = 'Congratulations! You have succesfully created your account.';

    echo "<SCRIPT type='text/javascript'> 
        alert('$message');
        window.location.replace('login.php');
    </SCRIPT>";
 }

echo "</br>".$sql;
}
?>
