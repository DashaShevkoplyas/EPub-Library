<?php 
 session_start();
    require_once('db_connection.php');
   
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Каталог електронних видань</title>
    <link rel = "stylesheet" href="assets/css/test.css">
    <link rel = "stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
</head>
<body>
<div class="wrapper">
    <div class="header-wrapper">
        <div class="inner-header">
            <div class="top-header">
               <div class="row">
                <div class = "icons">
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
           </div>
            </div>
            <div class="divide-line">
            </div>

           <div class="row">
                <div class="logo-header">
                    <a href="http://www.tsatu.edu.ua/">
                        <img src="assets/images/logo.png" alt="Таврійський державний агротехнологічний університет">
                    </a>
                </div>
                <div class="text-header">
                    <div class = "text-main">
                        КАТАЛОГ ЕЛЕКТРОННИХ ВИДАНЬ
                    </div>
                    <div class = "text-under">
                        Таврійський державний агротехнологічний університет
                    </div>
                </div>
           </div>
            <div class="menu-header">
                <nav>
                <div class="navbar">
                    <input type="checkbox" name="toggle" id = "menu" class="toggleMenu">
                    <label for="menu" class="toggleMenu"><img src = "assets/images/bars-solid.svg">Факультети</label>
                    <ul>
                        <li><a href="#">МТФ</a>
                            <ul class="sub">
                                <li><a href="/content.php?id=1">Кафедра машиновикористання в землеробстві</a></li>
                                <li><a href="/content.php?id=2">Кафедра технічний сервіс та системи в АПК</a></li>
                                <li><a href="/content.php?id=3">Кафедра мехатронні системи та транспорні технології</a></li>
                                <li><a href="/content.php?id=4">Кафедра сільськогосподарські машини</a></li>
                                <li><a href="/content.php?id=5">Кафедра ТКМ</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ЕФ</a>
                            <ul class="sub">
                                <li><a href="/content.php?id=6">Кафедра електротехнології та теплові процеси</a></li>
                                <li><a href="/content.php?id=7">Кафедра електротехники та електромеханіки імені професора В.В. Овчарова</a></li>
                                <li><a href="/content.php?id=8">Кафедра електроенергетика та автоматизація</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ФІКТ</a>
                            <ul class="sub">
                                <li><a href="/content.php?id=9">Кафедра обладнання переробних і харчових виробництв імені професора Ф.Ю. Ялпачика</a></li>
                                <li><a href="/content.php?id=10">Кафедра технічна механіка</a></li>
                                <li><a href="/content.php?id=11">Кафедра інформаційні технології проектування ім. В.М. Найдиша</a></li>
                                <li><a href="/content.php?id=12">Кафедра комп’ютерні науки</a></li>
                                <li><a href="/content.php?id=13">Кафедра вища математика та фізика</a></li>
                            </ul>

                        </li>
                        <li><a href="#">ФЕБ</a>
                            <ul class="sub">
                                <li><a href="/content.php?id=14">Кафедра підприємніцтво, торгівля та біржова діяльність</a></li>
                                <li><a href="/content.php?id=15">Кафедра менеджмент</a></li>
                                <li><a href="/content.php?id=16">Кафедра економіки</a></li>
                                <li><a href="/content.php?id=17">Кафедра маркетинг</a></li>
                                <li><a href="/content.php?id=18">Кафедра облік і оподаткування</a></li>
                                <li><a href="/content.php?id=19">Кафедра фінанси, банківська справа та страхування</a></li>
                                <li><a href="/content.php?id=20">Публічне управління, адміністрування та право</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ФАЕ</a>
                            <ul class="sub">
                                <li><a href="/content.php?id=21">Кафедра харчових технологій та готельно-ресторанної справи</a></li>
                                <li><a href="/content.php?id=22">Кафедра геоекології і землеутрою</a></li>
                                <li><a href="/content.php?id=23">Кафедра рослинництва імені професора Калитки В.В.</a></li>
                                <li><a href="/content.php?id=24">Плодоовочівництво, виноградарство та біохімія</a></li>
                                <li><a href="/content.php?id=25">Цивільна безпека</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ННІ ЗУП</a>
                            <ul class="sub">
                                <li><a href="/content.php?id=26">Кафедра суспільно-гуманітарних наук</a></li>
                                <li><a href="/content.php?id=27">Кафедра іноземні мови</a></li>
                                <li><a href="/content.php?id=28">Кафедра фізичного виховання і спорту</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </nav>
            </div>
        </div>
    </div>





    <div class="row">
        <div class="sidebar-wrapper">
            <div class="inner-sidebar">
                <div class = "banners">
                    МІСЦЕ ДЛЯ БАНЕРОВ
                </div>
            </div>


        </div>
        <div class="content-wrapper">
            <div class="inner-content">
               <div class = "main-page-text">
                   Головна сторінка
               </div>
                <div class="divide-line">
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <style>
                    summary {
                        margin-left:-0.001em;
                        background:#e7e7e7;
                        font-family: Georgia;
                        font-size: 26px;
                        cursor: cell;
                    }
                </style>
                <div class="details">
                    <details>
                        <summary>Механіко-технологічний факультет</summary>
                        <ul>
                              <li><a href="/content.php?id=1">Кафедра машиновикористання в землеробстві</a></li>
                                <li><a href="/content.php?id=2">Кафедра технічний сервіс та системи в АПК</a></li>
                                <li><a href="/content.php?id=3">Кафедра мехатронні системи та транспорні технології</a></li>
                                <li><a href="/test.php?id=4">Кафедра сільськогосподарські машини</a></li>
                                <li><a href="/content.php?id=5">Кафедра ТКМ</a></li>
                        </ul>
                    </details>
                    <details>
                        <summary>Енергетичний факультет</summary>
                        <ul>
                            <li><a href="/content.php?id=6">Кафедра електротехнології та теплові процеси</a></li>
                                <li><a href="/content.php?id=7">Кафедра електротехники та електромеханіки імені професора В.В. Овчарова</a></li>
                                <li><a href="/content.php?id=8">Кафедра електроенергетика та автоматизація</a></li>
                        </ul>
                    </details>
                    <details>
                        <summary>Факультет інженерії та комп'ютерних технологій</summary>
                        <ul>
                               <li><a href="/content.php?id=9">Кафедра обладнання переробних і харчових виробництв імені професора Ф.Ю. Ялпачика</a></li>
                                <li><a href="/content.php?id=10">Кафедра технічна механіка</a></li>
                                <li><a href="/content.php?id=11">Кафедра інформаційні технології проектування ім. В.М. Найдиша</a></li>
                                <li><a href="/content.php?id=12">Кафедра комп’ютерні науки</a></li>
                                <li><a href="/content.php?id=13">Кафедра вища математика та фізика</a></li>
                        </ul>
                    </details>
                    <details>
                        <summary>Факультет економіки та бізнесу</summary>
                        <ul>
                             <li><a href="/content.php?id=14">Кафедра підприємніцтво, торгівля та біржова діяльність</a></li>
                                <li><a href="/content.php?id=15">Кафедра менеджмент</a></li>
                                <li><a href="/content.php?id=16">Кафедра економіки</a></li>
                                <li><a href="/content.php?id=17">Кафедра маркетинг</a></li>
                                <li><a href="/content.php?id=18">Кафедра облік і оподаткування</a></li>
                                <li><a href="/content.php?id=19">Кафедра фінанси, банківська справа та страхування</a></li>
                                <li><a href="/content.php?id=20">Публічне управління, адміністрування та право</a></li>
                        </ul>
                    </details>
                    <details>
                        <summary>Факультет агротехнологій та екології</summary>
                        <ul>
                             <li><a href="/content.php?id=21">Кафедра харчових технологій та готельно-ресторанної справи</a></li>
                                <li><a href="/content.php?id=22">Кафедра геоекології і землеутрою</a></li>
                                <li><a href="/content.php?id=23">Кафедра рослинництва імені професора Калитки В.В.</a></li>
                                <li><a href="/content.php?id=24">Плодоовочівництво, виноградарство та біохімія</a></li>
                                <li><a href="/content.php?id=25">Цивільна безпека</a></li>
                        </ul>
                    </details>
                    <details>
                        <summary>ННІ загальноуніверситетської підготовки</summary>
                        <ul>
                            <li><a href="/content.php?id=26">Кафедра суспільно-гуманітарних наук</a></li>
                                <li><a href="/content.php?id=27">Кафедра іноземні мови</a></li>
                                <li><a href="/content.php?id=28">Кафедра фізичного виховання і спорту</a></li>
                        </ul>
                    </details>

            </div>
            </div>
        </div>

    </div>

    <div class="footer-wrapper">
    <div class="inner-footer">
        <div class="footer-top">
        </div>
        <div class = "footer-bottom">
            <div class="top-text">
            ©2019. Таврійський державний агротехнологічний університет. Каталог електронний видань.
            </div>
            <div class="bottom-text">
                Всі права захищені.
            </div>
        </div>
    </div>
    </div>
</div>

</body>
</html>