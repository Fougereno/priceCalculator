<!DOCTYPE html>
<html lang="en">
<?php 
    $headtitle = 'New form';
    require 'head.php'; 
?>
<body>
    <div class="wrap__100">
       <form action="get" class="price">
           <h1 class="price__h1">Узнайте самую выгодную стоимость своей квартиры через <span class="price__h1_red">онлайн—калькулятор!</span> </h1>
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
                   <div class="price__wrapinner">
                       <input type="text" class="price__input price__input_170w">
                       <input type="range" class="price__range">
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Этаж квартиры</p>
                   <div class="price__wrapinner">
                       <input type="text" class="price__input price__input_170w">
                       <input type="range" class="price__range">
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Количество комнат</p>
                   <input type="text" class="price__input ">
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Общая площадь</p>
                   <div class="price__wrapinner">
                       <input type="text" class="price__input price__input_120w">
                       <input type="range" class="price__range">
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Площадь кухни</p>
                   <div class="price__wrapinner">
                       <input type="text" class="price__input price__input_120w">
                       <input type="range" class="price__range styled-slider slider-progress">
                   </div>
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
               <div class="price__wraprow price__wraprow_start">
                   <p class="price__p">Уведомление</p>
                   <input class="price__check" type="checkbox" id="call" >
                   <label class="price__label" for="call">Звонок</label>
                   <input class="price__check" type="checkbox" id="sms" >
                   <label class="price__label" for="sms">SMS</label>
               </div>
           </div>
           <button class="price__button">УЗНАТЬ стоимость</button>
        </form>
    </div>    
    <h1 class="price__h1 price__h1_nopad">Выберите программу и рассчитайте условия</h1>
    <div class="wrap__40">
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
           <div class="price__info">
               <div class="price__infowrap">
                   <div class="price__wraprow">
                       <p class="price__p">Сумма кредита</p>
                       <p class="price__p_large">3 767 000 ₽</p>
                   </div>
                   <div class="price__wraprow">
                       <p class="price__p">Ежемесячный платеж</p>
                       <p class="price__p_large">42 843 ₽</p>
                   </div>
               </div>
               <div class="price__line"></div>
               <div class="price__infowrap">
                   <div class="price__wraprow">
                       <p class="price__p">Необходимый доход</p>
                       <p class="price__p_large">61 204 ₽</p>
                   </div>
                   <div class="price__wraprow">
                       <p class="price__p">Процентная ставка</p>
                       <p class="price__p_large">4,7 %</p>
                   </div>
               </div>
           </div>
           <div class="price__wraprow">
               <button class="price__button price__button_yellow">подробнее</button>
               <button class="price__button price__button_yellow">оставить заявку</button>
           </div>
        </form>
    </div> 
</body>
</html>