<!DOCTYPE html>
<html lang="en"> <!-- Страница на русском! -->
<?php
    $headtitle = 'New form';
    require 'head.php';
?>
<body>
    <div class="wrap__100">
        <!-- Пробелы в (name = "formOrange") - этло так не работает совсем -->
       <form name = "formOrange" class="price js-form main__form" action="send.php"  method="post" >
        <!-- В price__h1_red модификатор _red используется неверно. его можно применить только к элементу price__h1. А в данном случае у нас оформляется вложенный span.
        Его можно оформить как еще один элемент блока price или допустимо использовать совсем другой блок, например text-red. Это актуально когда поодбные выделения цветом встречаются еще где-то.
        Так-же БЭМ допускает миксы. это кгда один HTML-элемент имеет одноверменно классы нескольких блоков. Или является отдельным блоком и элементов другого блока одновременно.  -->
           <h1 class="price__h1">Узнайте самую выгодную стоимость своей квартиры через <span class="price__h1_red">онлайн—калькулятор!</span> </h1>
           <div class="price__wrap">
                <!-- Не встречал такого. Обычно это либо wrap, дибо row =) -->
               <div class="price__wraprow">
                   <p class="price__p">Город</p>
                   <!-- В твоем select нет input-а. А как значение передавать на сервер? писать костыли? ) -->
                   <!-- Как делаются кастомные селекты: В HTML пишется классический <select> а js его заменяет на кастомный А выбранные значения в кастомном передаются в классический.
                    Тогда, если у пользователя на работет js - форма все равно будет функцианировать. -->
                   <div class="select">
                        <div class="select__header">
                            <div class="select__current">Москва</div>
                            <!-- Это не совсем icon этот carret =) или toggler еще местами называют -->
                            <div class="select__icon">
                            <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                                <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                            </svg>
                            </div>
                        </div>
                        <div class="select__body">
                            <div class="select__item">Москва</div>
                            <div class="select__item">Самара</div>
                            <div class="select__item">Новосибирск</div>
                            <div class="select__item">Астрахань</div>
                            <div class="select__item">Омск</div>
                        </div>
                   </div>
                        <!-- <select class="price__wraprow price__select">
                            <option class="price__rad" value="0"></option>
                            <option value="2">Москва</option>
                            <option value="3">Московская область</option>
                            <option value="2">Самара</option>
                            <option value="2">Новосибирск</option>
                            <option value="2">Астрахань</option>
                            <option value="2">Санкт-Петербург</option>
                            <option value="2">Тула</option>
                            <option value="2">Омск</option>
                        </select> -->
                    <!-- <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                        <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                    </svg> -->
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Улица</p>
                   <!-- Тут у тебя input является одновременно элементом 2-х блоков main и price, так еще и одновременно двумя элементами price? =)
                   Это не ошибка, но не по БЭМ. Тут надо либо модификаторы писатьЮ либо input делать независимым блоком, что кстати было бы правильно. -->
                   <input class="main__input js-input price__input price__submitcheck"  name="street" type="text" >
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Тип недвижимости</p>
                   <div class="select">
                        <div class="select__header">
                            <div class="select__current">Квартира</div>
                            <div class="select__icon">
                            <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                                <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                            </svg>
                            </div>
                        </div>
                        <div class="select__body">
                            <div class="select__item">Квартира</div>
                            <div class="select__item">Дом</div>
                            <div class="select__item">Земельный участок</div>
                            <div class="select__item">Прочее</div>
                        </div>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Тип дома</p>
                   <div class="select">
                        <div class="select__header">
                            <div class="select__current">Панельный</div>
                            <div class="select__icon">
                            <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                                <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                            </svg>
                            </div>
                        </div>
                        <div class="select__body">
                            <div class="select__item">Панельный</div>
                            <div class="select__item">Монолитный</div>
                        </div>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Этажность дома</p>
                   <div class="price__wrapinner">
                        <!-- По БЭМ, если есть модификатор price__number_wrap, значит должен быть и класс элемента price__number в этом же теге аналогично с price__input.
                        И опять же в одном теге и price__number и price__input -  не по феншую. -->
                        <div class="price__number_wrap  price__input_170w">
                                <input type="number" class=" price__input" id="rangenumber" min="5" max="120" value="85" oninput="range.value=value">
                        </div>
                        <input type="range" class="price__range" value="85" min="5" max="120" id="range" oninput="rangenumber.value=value"/>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Этаж квартиры</p>
                   <div class="price__wrapinner">
                        <div class="price__number_wrap  price__input_170w">
                            <input type="number" class="price__input " id="rangenumber_flat" min="1" max="120" value="85" oninput="range_flat.value=value">
                        </div>
                        <input type="range" class="price__range" value="85" min="1" max="120" id="range_flat" oninput="rangenumber_flat.value=value"/>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Количество комнат</p>
                   <div class="price__rooms">
                        <!-- Тут каждый инпут можно было не оборачивать в отдельные блоки. Рамку с закруглениями дать внешнему блоку обертке с overflow: hidden,
                        а внутри стилизовать только label, у которых рамка только спрака, кроме последнего, или слева кроме первого - как удобно.  -->
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
                        <input type="number" class="price__input price__input_120w" id="rangenumber_square" min="10" max="300" value="210" oninput="range_square.value=value">
                        <p class="price__meter">м2</p>
                        <input type="range" class="price__range" min="10" max="300" value="210" id="range_square" oninput="rangenumber_square.value=value"/>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Площадь кухни</p>
                   <div class="price__wrapinner">
                        <input type="number" class="price__input price__input_120w" id="rangenumber_kitchen" min="5" max="50" value="37" oninput="range_kitchen.value=value">
                        <p class="price__meter">м2</p>
                        <input type="range" class="price__range" min="5" max="50" value="37" id="range_kitchen" oninput="rangenumber_kitchen.value=value"/>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Состояние</p>
                   <div class="select">
                        <div class="select__header">
                            <div class="select__current">Не требует ремонта</div>
                            <div class="select__icon">
                            <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                                <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                            </svg>
                            </div>
                        </div>
                        <div class="select__body">
                            <div class="select__item">Не требует ремонта</div>
                            <div class="select__item">Требует ремонта</div>
                        </div>
                   </div>
               </div>
               <div class="price__wraprow">
                   <p class="price__p">Ваш телефон</p>
                   <input name="phone" type="tel" class="tel price__input price__submitcheck" placeholder="+7(___) ___-__-__">
               </div>
               <div class="price__wraprow price__wraprow_start">
                   <p class="price__p">Уведомление</p>
                   <div class="price__call">
                       <input name="radiocheck"  class="price__check" type="radio" id="call" >
                       <label class="price__label" for="call">Звонок</label>
                       <input name="radiocheck"  class="price__check" type="radio" id="sms" >
                       <label class="price__label" for="sms">SMS</label>
                   </div>
               </div>
           </div>
           <div class="price__button_wrap">
                <input type="submit" class="price__button" value = "УЗНАТЬ стоимость">
            </div>
        </form>
        <h1 class="price__h1 js-answer"></h1>
    </div>

    <div class="price__wrap_main">
        <h1 class="price__h1 price__h1_nopad">Выберите программу и рассчитайте условия</h1>
        <div class="wrap__40">
           <form action="#" method = "get" class="price price_gray">
               <div class="price__wrap">
                    <div class="price__wraprow price__wraprow_yellow">
                        <p class="price__p">Цель кредита</p>
                        <div class="select">
                                <div class="select__header">
                                    <div class="select__current">Для семей с детьми</div>
                                    <div class="select__icon">
                                    <svg class="price__arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.353553" y1="0.646447" x2="7.35355" y2="7.64645" stroke="black"/>
                                        <line y1="-0.5" x2="9.8995" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14 1)" stroke="black"/>
                                    </svg>
                                    </div>
                                </div>
                                <div class="select__body">
                                    <div class="select__item">Для семей с детьми</div>
                                    <div class="select__item">Для бизнеса</div>
                                </div>
                        </div>
                    </div>
                   <div class="price__wraprow price__wraprow_yellow">
                       <p class="price__p">Стоимость недвижимости</p>
                       <div class="price__wrapcount">
                            <p class="price__p_large">3 767 000 ₽</p>
                            <input type="range" class="price__range price__range_yellow" min="0" max="50" value="35" id="range_kitchen" oninput="rangenumber_kitchen.value=value"/>
                            <div class="price__psmall_wrap">
                                <p class="price__p_small">300 тыс.</p>
                                <p class="price__p_small">2 млн.</p>
                                <p class="price__p_small">5 млн.</p>
                                <p class="price__p_small">10 млн.</p>
                                <p class="price__p_small">30+ млн.</p>
                            </div>
                        </div>
                   </div>
                   <div class="price__wraprow price__wraprow_yellow">
                       <p class="price__p">Первоначальный взнос</p>
                       <div class="price__wrapcount">
                            <p class="price__p_large price__p_pb7">182 000 ₽</p>
                            <div class=" sliders__content">
                                <div class="sliders__pointer" id="price__pointer"> </div>
                                <input type="range" class=" price__range price__range_yellow" min="0" max="50" value="35"  id="price__percent" oninput="rangenumber_kitchen.value=value"/>
                            </div>
                            <div class="price__psmall_wrap">
                                <p class="price__p_small">60 тыс.</p>
                                <p class="price__p_small">140 тыс.</p>
                                <p class="price__p_small">220 тыс.</p>
                                <p class="price__p_small">300 тыс.</p>
                            </div>
                        </div>
                   </div>
                   <div class="price__wraprow price__wraprow_yellow">
                       <p class="price__p">Срок кредита </p>
                       <div class="price__wrapcount">
                            <p class="price__p_large">7 лет</p>
                            <input type="range" class="price__range price__range_yellow" min="0" max="50" value="35" id="range_kitchen" oninput="rangenumber_kitchen.value=value"/>
                            <div class="price__psmall_wrap">
                                <p class="price__p_small">1 год</p>
                                <p class="price__p_small">10 лет</p>
                                <p class="price__p_small">20 лет</p>
                                <p class="price__p_small">30 лет</p>
                            </div>
                        </div>
                   </div>
                   <div class="price__wraprow price__wraprow_yellow price__wraprow_left">
                       <p class="price__p">Электронная регистрация</p>
                       <p class="price__p price__p_mobile">Регистрация прав собственности без посещения Росреестра и МФЦ.</p>
                        <label class="price__switch">
                            <input class="price__checkbox" type="checkbox">
                            <span class="price__slider price__round"></span>
                            <svg class="price__arrow_white" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.12669 12.9774C5.97396 13.131 5.76558 13.2167 5.54913 13.2167C5.33267 13.2167 5.1243 13.131 4.97157 12.9774L0.359012 8.36408C-0.119671 7.8854 -0.119671 7.10919 0.359012 6.6314L0.936573 6.05369C1.4154 5.57501 2.19072 5.57501 2.6694 6.05369L5.54913 8.93357L13.3306 1.15198C13.8094 0.673298 14.5855 0.673298 15.0634 1.15198L15.641 1.72969C16.1196 2.20837 16.1196 2.98444 15.641 3.46237L6.12669 12.9774Z" fill="white"/>
                                </svg>
                        </label>
                   </div>
               </div>
               <div class="price__info">
                   <div class="price__infowrap">
                           <p class="price__p price__p_minor">Сумма кредита</p>
                           <p class="price__p_large">3 767 000 ₽</p>
                           <p class="price__p price__p_minor">Ежемесячный платеж</p>
                           <p class="price__p_large">42 843 ₽</p>
                   </div>
                   <div class="price__line"></div>
                   <div class="price__infowrap">
                           <p class="price__p price__p_minor">Необходимый доход</p>
                           <p class="price__p_large">61 204 ₽</p>
                           <p class="price__p price__p_minor">Процентная ставка</p>
                           <p class="price__p_large">4,7 %</p>
                   </div>
               </div>
               <div class="price__wraprow price__btnwrap">
                   <div class="price__btninner"><a href= "#" class="price__button price__button_yellow">подробнее</a></div>
                   <div class="price__btninner"><a href= "#" class="price__button price__button_yellow" >Оставить заявку </a></div>
               </div>

                </div>
            </form>
        </div>
        <div>
    </div>

</div>
<!-- <script src="js/scriptcopy.js"></script> -->
<script src="js/script.js"></script>
</body>
</html>