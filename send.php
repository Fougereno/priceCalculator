<?php

$answer = '';

if($_POST['street']=="") {
    $answer .= "Поле Улица не заполнено <br>";
}
if($_POST['phone']=="") {
    $answer .= "Поле Телефон не заполнено <br>";
}

if(!isset($_POST['radiocheck'])) {
    $answer .= "Поле Уведомления не заполнено <br>";
}
if((isset($_POST['radiocheck']))&&(isset($_POST['street'])&&$_POST['street']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ 
    $answer .= 'Все поля заполнены';  
}
echo $answer;
?>