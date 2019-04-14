<?php 
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"smart_bartender");

$id_Reteta= $id_Reteta =  "";
$id_Reteta = $_POST["id_Reteta"];
$id_Ingredient= $_POST["id_Ingredient"];

$sql="SELECT id_Reteta FROM bar_reteta  WHERE id_Reteta='$id_Reteta'";
$result=mysqli_query($db, $sql);
$idreteta = mysqli_fetch_assoc($result)['id_Reteta'];
$_SESSION['id_Reteta'] = $idreteta;

$sql="SELECT id_Ingredient FROM bar_ingredient WHERE id_Ingredient='$id_Ingredient'";
$result=mysqli_query($db, $sql);
$idingredient = mysqli_fetch_assoc($result)['id_Ingredient'];
$_SESSION['id_Ingredient'] = $idingredient;   
    
$sql="  INSERT INTO bar_reteta_ingrediente(id_Reteta,id_Ingredient) VALUES ('".$id_Reteta."','".$id_Ingredient."')";

$result= mysqli_query($db,$sql);
if (!$result)
 die('Invalid querry:' .mysqli_error($db));
 else 
  header("location: dash_retingr.php");
?>
