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
                        <optgroup class="price__options"">
                            <option>Москва</option>
                            <option>Московская область</option>
                        </optgroup>
                    </select>
                    <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                        <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                    </svg>
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
                    <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                        <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                    </svg>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Тип дома</p>
                   <select class="price__select"> 
                        <option>Панельный</option>
                        <option>Монолитный</option>
                    </select>
                    <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                        <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                    </svg>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Этажность дома</p>
                   <div class="price__wrapinner">  
                        <input type="number" class="price__input price__input_170w" id="rangenumber" min="0" max="100" value="70" oninput="range.value=value">
                        <input type="range" class="price__range" value="70" min="0" max="100" id="range" oninput="rangenumber.value=value"/>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Этаж квартиры</p>
                   <div class="price__wrapinner">
                        <input type="number" class="price__input price__input_170w" id="rangenumber_flat" min="0" max="100" value="70" oninput="range_flat.value=value">
                        <input type="range" class="price__range" value="70" min="0" max="100" id="range_flat" oninput="rangenumber_flat.value=value"/>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Количество комнат</p>
                   <div class="price__rooms">
                        <div class="price__roomitem price__roomitem_left">
                            <input class="price__roominput" id="rad1" type="radio" name="radio" value="1">
                            <label class="price__roomlabel" for="rad1">1</label>
                        </div>
                        <div class="price__roomitem">
                            <input class="price__roominput" id="rad2" type="radio" name="radio" value="2" checked>
                            <label class="price__roomlabel" for="rad2">2</label>
                        </div>
                        <div class="price__roomitem">
                            <input class="price__roominput" id="rad3" type="radio" name="radio" value="3">
                            <label class="price__roomlabel" for="rad3">3</label>
                        </div>
                        <div class="price__roomitem price__roomitem_right">
                            <input class="price__roominput" id="rad4" type="radio" name="radio" value="4">
                            <label class="price__roomlabel" for="rad4">4</label>
                        </div>
                    </div>               
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Общая площадь</p>
                   <div class="price__wrapinner">
                        <input type="number" class="price__input price__input_120w" id="rangenumber_square" min="0" max="50" value="10" oninput="range_square.value=value">
                        <p class="price__meter">м2</p>
                        <input type="range" class="price__range" min="0" max="50" value="35" id="range_square" oninput="rangenumber_square.value=value"/>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Площадь кухни</p>
                   <div class="price__wrapinner">
                        <input type="number" class="price__input price__input_120w" id="rangenumber_kitchen" min="0" max="50" value="10" oninput="range_kitchen.value=value">
                        <p class="price__meter">м2</p>
                        <input type="range" class="price__range" min="0" max="50" value="35" id="range_kitchen" oninput="rangenumber_kitchen.value=value"/>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Состояние</p>
                   <select class="price__select"> 
                        <option>Не требует ремонта</option>
                        <option>Требует ремонта</option>
                    </select>
                    <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                        <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                    </svg>
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
           <div class="price__button_wrap">
                <button class="price__button">УЗНАТЬ стоимость</button>
            </div>
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
                    <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                        <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                    </svg>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Стоимость недвижимости</p>
                   <input type="range" class="price__range price__range_yellow" min="0" max="50" value="35" id="range_kitchen" oninput="rangenumber_kitchen.value=value"/>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Первоначальный взнос</p>                   
                   <input type="range" class="price__range price__range_yellow" min="0" max="50" value="35" id="range_kitchen" oninput="rangenumber_kitchen.value=value"/>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Срок кредита </p>
                   <input type="range" class="price__range price__range_yellow" min="0" max="50" value="35" id="range_kitchen" oninput="rangenumber_kitchen.value=value"/>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Электронная регистрация</p>
                   <p class="price__p">Регистрация прав собственности без посещения Росреестра и МФЦ.</p>
                    <label class="price__switch">
                        <input class="price__checkbox" type="checkbox">
                        <span class="price__slider price__round"></span>
                    </label>
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
           <div class="container">
                <div class="UI-block sliders">
                    <div class="UI-block__content sliders__content">
                        <div class="sliders__elems value">
                            <div class="sliders__pointer" id="pointer">  </div>                            
                            <input type="range" class=" price__range price__range_yellow" min="0" max="50" value="35" id="slider_valued" oninput="rangenumber_kitchen.value=value"/>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div> 
    <div>

</div>
<script src="js/script.js"></script>
</body>
</html>