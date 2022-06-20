const rangeInputs = document.querySelectorAll('input[type="range"]');
const numberInput = document.querySelector('input[type="number"]');
let  slider = document.getElementById('slider_valued');
let  pointer = document.getElementById('pointer');


rangeInputs.forEach(input => {
  input.addEventListener('input', handleInputChange)
});

numberInput.addEventListener('input', handleInputChange);

pointer.innerHTML = slider.value + '%';


setBagePosition(slider, pointer);
slider.oninput = function(){
  pointer.innerHTML = slider.value + '%';
  setBagePosition(slider, pointer);
  
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