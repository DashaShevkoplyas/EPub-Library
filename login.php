<?php 
 session_start();
    require_once('db_connection.php');


if(!empty($_POST)){
    $username = $_POST['username'];
    $password =$_POST['password'];

    if($username && $password){

        
        $query = "SELECT * FROM `users` WHERE `username` = '".$username."' ";
        $res = mysqli_query($connection, $query);   
        $dbData = $res->fetch_assoc();
            if (mysqli_num_rows($res)>=1 && ($password == $dbData['password'])){
                $_SESSION['username'] = $username;
                $_SESSION['role']= $dbData['role'];
                header('Location:login.php');
              
        }
        
    }       
}
  
?>
<!doctype html>
<html 
<head>
<meta charset="utf-8" lang="uk" />
<title>Увійти</title>
<link rel = "stylesheet" href="assets/css/index.css">
<link rel = "stylesheet" href="assets/css/test.css">
<link rel = "stylesheet" href="assets/css/media.css">
<script>
    function check(){
        var field1 = document.getElementById('name');
            field2 = document.getElementById('password');
            document.getElementById('btn').disabled = field1.value && field2.value ? false: "disabled";
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
    <form  class = "log-in" action = "/login.php" method="post">
            <label class="name">Им'я користувача</label>
            <input id = "name"
                     onkeyup = "check();" 
                     type="text" 
                     name ="username"
                     class="log-user" 
                     autofocus>
            <label class = "password">Пароль</label>
            <input id = "password" 
                    onkeyup = "check();" 
                    type="password" 
                    name = "password" 
                    class="log-user">
            <input id = "btn" type="submit" value="Увійти" class="add-button" disabled>  
            <?php 
                if(isset($_SESSION['username'])){ 
                    if(isset($_SESSION['role']) && $_SESSION['role']=='адмін'){
                    echo "<a class = 'sign-in-link' href='/sigin_2.php' rel = 'sign-in'>Зареєструвати нового користувача!</a>";
                } else echo "<a class = 'sign-in-link' href='/main.php' rel = 'sign-in'>На головну</a> ";
            }else echo "<a class = 'sign-in-link' href='/sigin.php' rel = 'sign-in'>Зареєструватися!</a> ";

            ?>  
            
  </form>
</main>
    </body>
    </html>