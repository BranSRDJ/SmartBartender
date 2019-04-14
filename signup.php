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
	
    echo '<script language="javascript">';
	echo 'alert("Acest email este folosit deja. Incercati altul.");';	
	echo '</script>';
	$email_used = 1;
}
if($email_used == 0)
{
$sql="INSERT INTO bar_utilizator(id_Utilizator, nume, email, parola, data_Nasterii) VALUES (rand(),'$nume','$email','$parola','$data')";

$result= mysqli_query($db,$sql);
if (!$result)
 die('Invalid querry:' .mysqli_error($db));
 else 
 header("location: signup.html");

echo "</br>".$sql;
}
?>
