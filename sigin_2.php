<?php 
 session_start();
    require_once('db_connection.php');

    if(isset($_POST['btn'])){
        if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['role']) && !empty($_POST['password'])){
         $username = mysqli_escape_string($connection, $_POST['username']);
         $email = mysqli_escape_string($connection, $_POST['email']);
         $role = mysqli_escape_string($connection, $_POST['role']);
         $password = mysqli_escape_string($connection, $_POST['password']);
         $query=mysqli_query($connection,"SELECT * FROM `users` WHERE username='{$username}'");
         $numr = mysqli_num_rows($query);
         if($numr == 0){
         $sql = "INSERT INTO `users`(username, email,role, password) VALUES('{$username}', '{$email}','{$role}', '{$password}')";
         $res = mysqli_query($connection, $sql);
         header('Location:main.php');
     }
    }
}
   
?>
<!doctype html>
<html 
<head>
<meta charset="utf-8" lang="uk" />
<title>Зареєструватися</title>
<link rel = "stylesheet" href="assets/css/index.css">
<link rel = "stylesheet" href="assets/css/test.css">
<link rel = "stylesheet" href="assets/css/media.css">
<script>
	function check(){
		var field1 = document.getElementById('name');
			field2 = document.getElementById('email');
            field3 = document.getElementById('role');
			field4 = document.getElementById('password');
           
			document.getElementById('btn').disabled = field1.value && field2.value && field3.value && field4.value ? false: "disabled";
	}
</script>
</head>
<body>
	    <div class="row">
                            
            <?php
                if(isset($_SESSION['username'])){
                    echo "<div class='icon-login'>
                        <a href = '/logout.php' title='Вийти''>
                            <img src = 'assets/images/login.png' alt = 'Вийти''>
                        </a>
                    </div>";
                } else echo"<div class='icon-login'>
                        <a href = '/login.php' title='Увійти'>
                            <img src = 'assets/images/login.png' alt = 'Увійти''>
                        </a>
                    </div>";
            ?>
            <div class="icon-home">
                <a href ="/main.php" title="Головна">
                        <img src="assets/images/home-icon-silhouette.png" alt ="Головна сторінка">
                 </a>
             </div>

        </div>
            <div class="divide-line">
            </div>
	<main>
	<form  class = "log-in" action = "/sigin_2.php" method="post">
			<label class="name">Им'я користувача</label>
		    <input id = "name"
		    		 onkeyup = "check();" 
		    		 type="text" 
		    		 name ="username"
		    		 class="log-user" 
		    		 autofocus>
		    <label class="email">Пошта</label>
		    <input id = "email"
		    		 onkeyup = "check();" 
		    		 type="email" 
		    		 name ="email"
		    		 placeholder="example@gmail.com" 
		    		 class="log-user">
            <label class="name">Роль</label>
            <input id = "role"
                     onkeyup = "check();" 
                     type="text" 
                     name ="role"
                     class="log-user" 
                     placeholder="користувач/адмін">
		    <label class = "password">Пароль</label>
		    <input id = "password" 
		    		onkeyup = "check();" 
		    		type="password" 
		    		name = "password" 
		    		class="log-user">
		    <input id = "btn" type="submit" value="Зареєструватися!" class="add-button" name = "btn" disabled>    
  </form>
</main>
	</body>
	</html>