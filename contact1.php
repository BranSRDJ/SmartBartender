<?php

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"smart_bartender");

$nume= $email = $mesaj = "";

    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];

$sql="INSERT INTO bar_contact(nume,email,mesaj) VALUES ('$nume','$email','$mesaj')";

$result= mysqli_query($db,$sql);
if (!$result)
 die('Invalid querry:' .mysqli_error($db));
 else 
 header("location: contact.html");

echo "</br>".$sql;

?>
