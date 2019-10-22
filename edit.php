<?php
session_start();
require_once('db_connection.php');

$current = $_GET['id'];
$sql = "SELECT * FROM `pubs` WHERE id_pubs = '$current'";
$result = mysqli_query($connection, $sql);
$arr = mysqli_fetch_array($result);

 if(isset($_POST['btn'])){
        if(!empty($_POST['select']) && !empty($_POST['name_pub']) && !empty($_POST['url'])){
        	$id_pubs = mysqli_escape_string($connection,$_POST['id']);
            $name_pub = mysqli_escape_string($connection, $_POST['name_pub']);
            $url = mysqli_escape_string($connection, $_POST['url']);
            $select = mysqli_escape_string($connection, $_POST['select']);
            $id_kaf = (int)$select;


		    $sql_update = "UPDATE `pubs` SET `id_kaf` = '$id_kaf', `name_pub`= '$name_pub', `url` = '$url' WHERE `id_pubs` = '$id_pubs'";
		    $res = mysqli_query($connection, $sql_update);
		    header('Location:main.php');
		}
     
    }


?>


 

<!doctype html>
<html 
<head>
<meta charset="utf-8" />
<title>Редагувати публікацію</title>
<link rel = "stylesheet" href="assets/css/index.css">
<link rel = "stylesheet" href="assets/css/test.css">
<link rel = "stylesheet" href="assets/css/media.css">
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

    <form  class = "add_pub" action = "/edit.php" method="post"> 
		<input type="hidden" name="id"  id = "id" value="<?= $arr['id_pubs'] ?>" required readonly/>
         <select id = "select" class ="select" name = "select"">
                <option value="1" >Кафедра машиновикористання в землеробстві</option>
                <option value="2">Кафедра технічний сервіс та системи в АПК</option>
                <option value="3">Кафедра мехатронні системи та транспорні технології</option>
                <option value="4">Кафедра сільськогосподарські машини</option>
                <option value="5">Кафедра ТКМ</option>
                <option value="6">Кафедра електротехнології та теплові процеси</option>
                <option value="7">Кафедра електротехники та електромеханіки імені професора В.В. Овчарова</option>
                <option value="8">Кафедра електроенергетика та автоматизація</option>
                <option value="9">Кафедра обладнання переробних і харчових виробництв імені професора Ф.Ю. Ялпачика</option>
                <option value="10">Кафедра технічна механіка</option>
                <option value="11">Кафедра інформаційні технології проектування ім. В.М. Найдиша</option>
                <option value="12">Кафедра комп’ютерні науки</option>
                <option value="13">Кафедра вища математика та фізика</option>
                <option value="14">Кафедра підприємніцтво, торгівля та біржова діяльність</option>
                <option value="15">Кафедра менеджмент</option>
                <option value="16">Кафедра економіки</option>
                <option value="17">Кафедра маркетинг</option>
                <option value="18">Кафедра облік і оподаткування</option>
                <option value="19">Кафедра фінанси, банківська справа та страхування
                </option>
                <option value="20">Публічне управління, адміністрування та право</option>
                <option value="21">Кафедра харчових технологій та готельно-ресторанної справи</option>
                <option value="22">Кафедра геоекології і землеутрою</option>
                <option value="23">Кафедра рослинництва імені професора Калитки В.В.
                </option>
                <option value="24">Плодоовочівництво, виноградарство та біохімія</option>
                <option value="25">Цивільна безпека</option>
                <option value="26">Кафедра суспільно-гуманітарних наук</option>
                <option value="27">Кафедра іноземні мови</option>
                <option value="28">Кафедра фізичного виховання і спорту</option>
             </select>  
            <label class="name">Назва публікації</label>
            <input id = "name"  type="text" name ="name_pub" value="<?php echo $arr['name_pub'];?>" class="add-input" autofocus>
            <label class = "url">URL-публікації</label>
            <input id = "url"  type="url" name = "url" value = "<?php echo $arr['url'];?>" class="add-input">  
            
            <input id = "btn" type="submit" value="Відредагувати!" class="add-button" name = "btn">     
  </form>
</main>
    </body>
    </html>