
 <?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"smart_bartender");

 $password = $email = "";

 $password = $_POST["parola"];
 $email = $_POST["email"];
 
 if (empty($_POST["email"])) {
    $emailErr = "No email entered.";
 echo $emailErr;}
 
 if (empty($_POST["password"])) {
    $passwordErr = "No password entered.";
 echo $passwordErr;}
 
 $sql="SELECT * FROM bar_utilizator WHERE parola='$password' and email='$email'";

 $result= mysqli_query($db,$sql);
 $getdata = mysqli_fetch_assoc($result);
 $id = $getdata['id'];
 $nume = $getdata['nume'];
 $tip = $getdata['tip_Utilizator'];
 $count = mysqli_num_rows($result);
 if($count == 1) {
          session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
							$_SESSION["admin"] = $tip;
                            $_SESSION["email"] = $email;       
							$_SESSION["nume"] = $nume;
                            
                            // Redirect user to welcome page
                            header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 echo $error;
      }
?>