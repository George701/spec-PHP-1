<?php

error_reporting(0);

require_once "inc/lib.inc.php";

set_error_handler("myError");

require_once "inc/data.inc.php";

// Setting locality and date
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$month = strftime('%B');
$month = iconv('windows-1251', 'utf-8', $month);
$year = strftime('%Y');

$hour = (int)strftime('%H');
$welcome = "";
if($hour>0 && $hour<6){
    $welcome = "Доброй ночи";
}elseif($hour>=6 && $hour<12){
    $welcome = "Доброе утро";
}elseif($hour>=12 && $hour<18){
    $welcome = "Добрый день";
}elseif($hour>=18 && $hour<00){
    $welcome = "Добрый вечер";
}else{
    $welcome = "Undefined";
}

$id = strtolower(strip_tags(trim($_GET['id'])));

switch($id){
    case 'about':
        $title = 'О сайте';
        $header = "О нашем сайте";
        break;
    case 'contact':
        $title = 'Контакты';
        $header = "Обратная связь";
        break;
    case 'table':
        $title = 'Таблица';
        $header = "Таблица умножения";
        break;
    case 'calc':
        $title = 'Калькулятор';
        $header = "Онлайн калькулятор";
        break;
    default:
        $title = 'Сайт нашей школы';
        $header = "$welcome, гость";
}

?>
    <?php
        require_once "inc/top.inc.php";
    ?>

    <?php
        switch($id){
            case 'about':
                require_once "about.php";
                break;
            case 'contact':
                require_once "contact.php";
                break;
            case 'table':
                require_once "table-test.php";
                break;
            case 'calc':
                require_once "calc.php";
                break;
            default:
                require_once "inc/index.inc.php";
        }
    ?>

    <?php
        require_once "inc/menu.inc.php";
    ?>

    <?php
        require_once "inc/bottom.inc.php";
    ?>
