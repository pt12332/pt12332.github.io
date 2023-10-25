<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>New Comment</title>
</head>
<body>
<?php
 if(!empty($_POST["name"]) && !empty($_POST["email"]))
 {

    $found =0;
 	$name = $_POST["name"];
 	$email = $_POST["email"];
 	$comments = $_POST["comments"];
	define("DB_SERVER", "Helios.vse.gmu.edu");
    define("DB_USER", "ptran48");
    define("DB_PASSWORD", "ochavimo");
    define("DB_NAME", "ptran48");
	$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD);
	if ($conn) 
      {
      	 mysqli_query($conn,"ptran48");
      	
      	 $found = 0;
      	 $result = mysqli_query($conn,"SELECT id,name,email,comments FROM comments");
      	 $rows = mysqli_num_rows($result);
         if($rows>0)
         {
           for($i=0;$i<$rows;$i++)
           {
            mysqli_data_seek($result,$i);
            $row = mysqli_fetch_row($result);
            if(strcasecmp($name,$row[1])==0)
       		{
               $found = 1;
               break;
       		}
           }
         
           if($found == 1)
           {
         	echo "<p> Comment already present under for the user. Cannot add";
         	echo "<br><a href = 'database.html'>Back to home page</a></p>";
           }  
           else
           {
               if(mysqli_query($conn, "INSERT INTO comments(name,email,comments) VALUES ('$name','$email','$comments')"))
                 {
                 	echo "<p> Added Comment Succefully";
                 	echo "<br/><a href = 'mailto:$email'>$name</a><br/>";
                 	echo "Comments: $comments <br/>";
                  echo "<a href = 'comment.php'>Add more comments?</a></p>";
                 }
           }
         }
         else
           {
         		echo"<p> No comments are present </p>";
                echo "<a href = 'index.php'> Return to home page</a></p>";
           }
      }
    
}
?>