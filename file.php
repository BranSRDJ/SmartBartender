 <?php
   
$npoza=$_FILES["file"]["name"];
echo $npoza;
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"smart_bartender");

  if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
		else
    {
	
	
			echo "Fisier Uploadat: " . $_FILES["file"]["name"] . "<br />";
			echo "Tipul: " . $_FILES["file"]["type"] . "<br />";
			echo "Dimensiunea: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Fisierul temporar: " . $_FILES["file"]["tmp_name"] . "<br />";


			if (file_exists($_FILES["file"]["name"]))
			  {
                echo $_FILES["file"]["name"] . " Imaginea exista deja! Incearca sa schimbi numele !. ";
              }
              else
              {
                   
                  
                   move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);
				   $imagine="uploads/".$_FILES["file"]["name"];
				   $sql="INSERT INTO bar_utilizator (imagine) VALUES ('$imagine')";
				   $result= mysqli_query($db,$sql);
					if (!$result)
					 die('Invalid querry:' .mysqli_error($db));
					 
					
					 
					
                  } 
            
              }
    
?> 
