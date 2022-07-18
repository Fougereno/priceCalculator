// сделаю отдельные блоки: что и зачем делает. поэтому функции и переменные отдельно каждые в своем блоке

// - появление процентов на желтом бегунке "Первоначальный взнос"

let  range = document.getElementById('price__percent'); // нашли range
let  pointer = document.getElementById('price__pointer'); // нашли div около range
pointer.innerHTML = range.value + '%'; // находим значение range и подставляеми в div, чтобы отобразились цифры (пока только то, что в value в html у range)

changePosition(range, pointer); // - поместили div с цифрами над range

range.oninput = function(){
  pointer.innerHTML = range.value + '%';
  changePosition(range, pointer);  
} // при передвижении input выполняется функция на перемещение div

function changePosition(findRange, findPointer){ // создаем функцию, чтобы div менялся в зависимости от значения бегунка range
  
  const value =  (findRange.valueAsNumber-parseInt(findRange.min))*(findRange.scrollWidth)/(parseInt(findRange.max)-parseInt(findRange.min));
  // вычисляем положение range. короче. длина range делится на количество равных значений(max-min), а потом все это умножается на value, т.е. на положкние бегунка
  findPointer.style.left = value - (findPointer.offsetWidth / 2) + 'px'; // т.к. свойство div с цифрами - position absolute, нужно div отклонить, добавив свойство left, которое будет вычисляться по значению бегунка минус половина ширины div (потому что div посередине)
}


// - цвет range меняется при перемещении

const rangeInputs = document.querySelectorAll('input[type="range"]'); // находятся все range

rangeInputs.forEach(input => {
  input.addEventListener('input', handleInputChange)
});
// для каждого range при передвижении устанавливается функция, меняющая свойсчтва css

function handleInputChange(e) {
  let target = e.target // - находим значения min max value
  const min = target.min
  const max = target.max
  const val = target.value
  
  target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%' // height 100% width = значение value в процентах относительно общей длины range. добавляем css свойство на перемещение бегунка

}


// - телефон (сделала как в примере, там были реулярные выражения. тему прочитала, вроде все понятно)

let phone = document.querySelectorAll('input[type="tel"]'); // находим все телефоны

phone.forEach(input => {
  input.addEventListener('input', eventPhone)
});// на каждый телефон функцию по ограничению номера при вводе чего-либо

function eventPhone (e) {

  let matrix = "+7(___) ___-__-__";
  let start = 0;
  let val = e.target.value.replace(/\D/g, ""); // - не дает ввести буквы в телефоне. по синтаксису: /\D/ - поиск  не-цифр, g на конце - поиск всех. 


  e.target.value = matrix.replace(/./g, function (a) {
    let ry = /[_\d]/.test(a);
      return /[_\d]/.test(a) && start < val.length ? val.charAt(start++) : start >= val.length ? "" : a
  }); // matrix заменяем все символы по принципу: (проверяем есть ли в matrix числа или "_")и (start меньше тому, что уже ввели? (value))? start +1 (увеличивается, пока не будет больше длины matrix, т.е. не больше длины телефона) : старт  не больше длины телефона? ничего больше ввести нельзя : ввести символ matrix
  
}


// - select стилизация
let findselect = document.querySelectorAll('.select__header');
let findselitem = document.querySelectorAll('.select__item');

findselect.forEach(item => {
  item.addEventListener('click', changeSelect)
});
findselitem.forEach(item => {
  item.addEventListener('click', chooseSelect);
});

function changeSelect() {
  this.parentElement.classList.toggle('select_active');
};
function chooseSelect() {
  let text = this.innerText;
  let select = this.closest('.select');
  let currentText = select.querySelector('.select__current');
  currentText.innerText = text;
  select.classList.remove('select_active');
};
// let  floors = document.getElementById('range');
// let  floor = document.getElementById('range_flat');
// let  numfloors = document.getElementById('rangenumber');
// let  numfloor = document.getElementById('rangenumber_flat');


