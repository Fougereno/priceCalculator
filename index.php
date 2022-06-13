<!DOCTYPE html>
<html lang="en">
<?php 
    $headtitle = 'New form';
    require 'head.php'; 
?>
<body>
    <div class="wrap">
       <form action="get" class="price">
           <h1 class="price__h1">Узнайте самую выгодную стоимость своей квартиры через онлайн—калькулятор!</h1>
           <div class="price__wrap">
               <div class="price__wraprow">
                   <p class="price__p">Город</p>
                   <select class="price__select"> 
                        <option>Москва</option>
                        <option>Московская область</option>
                    </select>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Улица</p>
                   <input type="text" class="price__input">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Тип недвижимости</p>
                   <select class="price__select"> 
                        <option>Квартира</option>
                        <option>Дом</option>
                    </select>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Тип дома</p>
                   <select class="price__select"> 
                        <option>Панельный</option>
                        <option>Монолитный</option>
                    </select>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Этажность дома</p>
                   <input type="text" class="price__input">
                   <input type="range" class="price__range">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Этаж квартиры</p>
                   <input type="text" class="price__input">
                   <input type="range" class="price__range">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Количество комнат</p>
                   <input type="text" class="price__input">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Общая площадь</p>
                   <input type="text" class="price__input">
                   <input type="range" class="price__range">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Площадь кухни</p>
                   <input type="text" class="price__input">
                   <input type="range" class="price__range styled-slider slider-progress">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Состояние</p>
                   <select class="price__select"> 
                        <option>Не требует ремонта</option>
                        <option>Требует ремонта</option>
                    </select>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Ваш телефон</p>
                   <input type="tel" class="price__input">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Уведомление</p>
                   <input type="checkbox" id="call" >
                   <label for="call">Звонок</label>
                   <input type="checkbox" id="sms" >
                   <label for="sms">SMS</label>
               </div>
           </div>
           <button class="price__button">УЗНАТЬ стоимость</button>
        </form>
    </div>    
    <h1 class="price__h1">Узнайте самую выгодную стоимость своей квартиры через онлайн—калькулятор!</h1>
    <div class="wrap">
       <form action="get" class="price price_gray">
           <div class="price__wrap">
               <div class="price__wraprow">
                   <p class="price__p">Цель кредита</p>
                   <select class="price__select"> 
                        <option>Для семей с детьми</option>
                        <option>Для бизнеса</option>
                    </select>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Стоимость недвижимости</p>
                   <input type="text" class="price__input">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Первоначальный взнос</p>                   
                   <input type="range" class="price__range">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Срок кредита </p>
                   <input type="range" class="price__range">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Электронная регистрация</p>
                   <p class="price__p">Регистрация прав собственности без посещения Росреестра и МФЦ.</p>
                   <input type="checkbox">
               </div>
           </div>
           <button class="price__button">УЗНАТЬ стоимость</button>
        </form>
    </div> 
</body>
</html>