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
    $to = "fougereno@gmail.com"; //  Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Обратный звонок'; //Загаловок сообщения
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Имя: '.$_POST['street'].'</p>
                    <p>Телефон: '.$_POST['phone'].'</p>
                </body>
            </html>'; //Текст нашего сообщения можно использовать HTML теги
            $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
            $headers .= "From: <no-reply@site.ru>\r\n"; //Наименование и почта отправителя
            $result = mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
            if ($result) {
                $answer .= 'Письмо отправлено';
            } else {
                $answer .= 'Письмо не отправлено, ошибка';
            }
}
echo $answer;
?>