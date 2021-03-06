const rangeInputs = document.querySelectorAll('input[type="range"]');
const numberInput = document.querySelector('input[type="number"]');
let  slider = document.getElementById('price__percent');
let  pointer = document.getElementById('price__pointer');


let  floors = document.getElementById('range');
let  floor = document.getElementById('range_flat');
let  numfloors = document.getElementById('rangenumber');
let  numfloor = document.getElementById('rangenumber_flat');


floor.addEventListener('input', checkInputErrors);

function checkInputErrors() {
  if (floor.value >= floors.value ) {
    floors.value = floor.value ;
  } else {
    
  }
};


rangeInputs.forEach(input => {
  input.addEventListener('input', handleInputChange)
});

numberInput.addEventListener('input', handleInputChange);


// - проценты на желтом бегунке
pointer.innerHTML = slider.value + '%';

setBagePosition(price__percent, price__pointer);
slider.oninput = function(){
  pointer.innerHTML = slider.value + '%';
  setBagePosition(slider, pointer);
  
}

// - select стилизация
let x, i, j, l, ll, selElmnt, a, b, c;
x = document.getElementsByClassName("price__custom");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        let y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}

document.addEventListener("click", closeAllSelect);


// телефон
document.addEventListener("DOMContentLoaded", function () {
 
  let eventCalllback = function (e) {

      var el = e.target,
      clearVal = el.dataset.phoneClear,
      pattern = el.dataset.phonePattern,
      matrix_def = "+7(___) ___-__-__",
      matrix = pattern ? pattern : matrix_def,
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = e.target.value.replace(/\D/g, "");
       
      if (clearVal !== 'false' && e.type === 'blur') {
          if (val.length < matrix.match(/([\_\d])/g).length) {
              e.target.value = '';
              return;
          }
      }
      if (def.length >= val.length) val = def;
      e.target.value = matrix.replace(/./g, function (a) {
          return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
      });
  }

  var phone_inputs = document.querySelectorAll('[data-phone-pattern]');
  for (let elem of phone_inputs) {
      for (let ev of ['input', 'blur', 'focus']) {
          elem.addEventListener(ev, eventCalllback);
      }
  }
});
 // let def = matrix.replace(/\D/g, "");     
  // if (def.length >= val.length) val = def;




// или
window.addEventListener("DOMContentLoaded", function() {
  [].forEach.call( document.querySelectorAll('.tel'), function(input) {
  let keyCode;
  function mask(event) {
      event.keyCode && (keyCode = event.keyCode);
      let pos = this.selectionStart;
      if (pos < 3) event.preventDefault();
      let matrix = "+7 (___) ___ ____",
          i = 0,
          def = matrix.replace(/\D/g, ""),
          val = this.value.replace(/\D/g, ""),
          new_value = matrix.replace(/[_\d]/g, function(a) {
              return i < val.length ? val.charAt(i++) || def.charAt(i) : a
          });
      i = new_value.indexOf("_");
      if (i != -1) {
          i < 5 && (i = 3);
          new_value = new_value.slice(0, i)
      }
      let reg = matrix.substr(0, this.value.length).replace(/_+/g,
          function(a) {
              return "\\d{1," + a.length + "}"
          }).replace(/[+()]/g, "\\$&");
      reg = new RegExp("^" + reg + "$");
      if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
      if (event.type == "blur" && this.value.length < 5)  this.value = ""
  }

  input.addEventListener("input", mask, false);
  input.addEventListener("focus", mask, false);
  input.addEventListener("blur", mask, false);
  input.addEventListener("keydown", mask, false)

});

});


function closeAllSelect(elmnt) {
  let x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
function handleInputChange(e) {
  let target = e.target
  if (e.target.type !== 'range') {
    target = document.getElementById('range')
  } 
  const min = target.min
  const max = target.max
  const val = target.value
  
  target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
}
function setBagePosition(curentSlider, curentPointer){
  const radius = curentSlider.scrollHeight;
  const dxPixels = radius/2 + (curentSlider.valueAsNumber-parseInt(curentSlider.min))*(curentSlider.scrollWidth-radius)/(parseInt(curentSlider.max)-parseInt(curentSlider.min));
  curentPointer.style.left = dxPixels - (curentPointer.offsetWidth / 2) + 'px';
  
}











return /[_\d]/.test(a) && start < val.length ?

val.charAt(start++) 


: start >= val.length ? "" : a