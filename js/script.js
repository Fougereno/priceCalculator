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
    console.log(ry);
      return /[_\d]/.test(a) && start < val.length ? val.charAt(start++) : start >= val.length ? "" : a
  }); // matrix заменяем все символы по принципу: (проверяем есть ли в matrix числа или "_")и (start меньше тому, что уже ввели? (value))? start +1 (увеличивается, пока не будет больше длины matrix, т.е. не больше длины телефона) : старт  не больше длины телефона? ничего больше ввести нельзя : ввести символ matrix
  
}

//


// let  floors = document.getElementById('range');
// let  floor = document.getElementById('range_flat');
// let  numfloors = document.getElementById('rangenumber');
// let  numfloor = document.getElementById('rangenumber_flat');



// // - select стилизация
// let x, i, j, l, ll, selElmnt, a, b, c;
// x = document.getElementsByClassName("price__custom");
// l = x.length;
// for (i = 0; i < l; i++) {
//   selElmnt = x[i].getElementsByTagName("select")[0];
//   ll = selElmnt.length;
//   a = document.createElement("DIV");
//   a.setAttribute("class", "select-selected");
//   a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
//   x[i].appendChild(a);
//   b = document.createElement("DIV");
//   b.setAttribute("class", "select-items select-hide");
//   for (j = 1; j < ll; j++) {
//     c = document.createElement("DIV");
//     c.innerHTML = selElmnt.options[j].innerHTML;
//     c.addEventListener("click", function(e) {
//         let y, i, k, s, h, sl, yl;
//         s = this.parentNode.parentNode.getElementsByTagName("select")[0];
//         sl = s.length;
//         h = this.parentNode.previousSibling;
//         for (i = 0; i < sl; i++) {
//           if (s.options[i].innerHTML == this.innerHTML) {
//             s.selectedIndex = i;
//             h.innerHTML = this.innerHTML;
//             y = this.parentNode.getElementsByClassName("same-as-selected");
//             yl = y.length;
//             for (k = 0; k < yl; k++) {
//               y[k].removeAttribute("class");
//             }
//             this.setAttribute("class", "same-as-selected");
//             break;
//           }
//         }
//         h.click();
//     });
//     b.appendChild(c);
//   }
//   x[i].appendChild(b);
//   a.addEventListener("click", function(e) {
//       e.stopPropagation();
//       closeAllSelect(this);
//       this.nextSibling.classList.toggle("select-hide");
//       this.classList.toggle("select-arrow-active");
//     });
// }

// document.addEventListener("click", closeAllSelect);

// function closeAllSelect(elmnt) {
//   let x, y, i, xl, yl, arrNo = [];
//   x = document.getElementsByClassName("select-items");
//   y = document.getElementsByClassName("select-selected");
//   xl = x.length;
//   yl = y.length;
//   for (i = 0; i < yl; i++) {
//     if (elmnt == y[i]) {
//       arrNo.push(i)
//     } else {
//       y[i].classList.remove("select-arrow-active");
//     }
//   }
//   for (i = 0; i < xl; i++) {
//     if (arrNo.indexOf(i)) {
//       x[i].classList.add("select-hide");
//     }
//   }
// }


