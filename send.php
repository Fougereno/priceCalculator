<?php

$answer = '';

if($_POST['street']=="") {
    $answer .= "Поле Улица не заполнено <br>";
}
if($_POST['phone']=="") {
    $answer .= "Поле Телефон не заполнено <br>";
}

$test = $_POST['radiocheck'];
var_dump($test."<br>");

if(!isset($_POST['radio'])) {
    $answer .= "Поле Уведомления не заполнено <br>";
}
if((isset($_POST['radiocheck']))&&(isset($_POST['street'])&&$_POST['street']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ 
    $answer .= 'Все поля заполнены';  
}
echo $answer;
?>