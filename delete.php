<?php
 session_start(); 
   require_once('db_connection.php');
	 if(isset($_GET['id']))
   		{   
		    $current = mysqli_real_escape_string($connection, $_GET['id']);		     
		    $sql="DELETE FROM pubs WHERE id_pubs = '$current'";		 
		    $result = mysqli_query($connection, $sql) or die("Ошибка " . mysqli_error($connection)); 
		       header('Location: main.php');
  
}
  
   ?>