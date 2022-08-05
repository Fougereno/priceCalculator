// сделаю отдельные блоки: что и зачем делает. поэтому функции и переменные отдельно каждые в своем блоке
// === Для наглядности и простоты можно эти блоки оборачивать в { ... }

// - появление процентов на желтом бегунке "Первоначальный взнос"
{
  let  range = document.getElementById('price__percent');       // нашли range
  let  pointer = document.getElementById('price__pointer');     // нашли div около range
                                                                // === А ты уверена, что он около нужного range? Не. на верстку не надейся )))) Делай общего родителя, ищи его, потом его потомков
  pointer.innerHTML = range.value + '%';                        // находим значение range и подставляеми в div, чтобы отобразились цифры (пока только то, что в value в html у range)

  changePosition(range, pointer);                               // - поместили div с цифрами над range

  range.oninput = function() {                                  // === Ты используешь то oninput, то addEventListener('input', ...) лучше придерживаться одного стиля
    pointer.innerHTML = range.value + '%';
    changePosition(range, pointer);
  }                                                             // при передвижении input выполняется функция на перемещение div

  function changePosition(findRange, findPointer){              // создаем функцию, чтобы div менялся в зависимости от значения бегунка range

    const value = (findRange.valueAsNumber - parseInt(findRange.min)) * (findRange.scrollWidth) / (parseInt(findRange.max) - parseInt(findRange.min));
    // вычисляем положение range. короче. длина range делится на количество равных значений(max-min), а потом все это умножается на value, т.е. на положкние бегунка
    findPointer.style.left = value - (findPointer.offsetWidth / 2) + 'px';  // т.к. свойство div с цифрами - position absolute, нужно div отклонить, добавив свойство left, которое будет вычисляться по значению бегунка минус половина ширины div (потому что div посередине)
  }
}

// - цвет range меняется при перемещении
{
  const rangeInputs = document.querySelectorAll('input[type="range"]'); // находятся все range

  rangeInputs.forEach(input => {
    input.addEventListener('input', handleInputChange)
  });
  // для каждого range при передвижении устанавливается функция, меняющая свойсчтва css

  function handleInputChange(e) {
    let target = e.target         // - находим значения min max value
    const min = target.min
    const max = target.max
    const val = target.value

    target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'    // height 100% width = значение value в процентах относительно общей длины range. добавляем css свойство на перемещение бегунка
  }
}


// - телефон (сделала как в примере, там были реулярные выражения. тему прочитала, вроде все понятно)
{
  let phone = document.querySelectorAll('input[type="tel"]');     // находим все телефоны

  phone.forEach(input => {
    input.addEventListener('input', eventPhone)
  });     // на каждый телефон функцию по ограничению номера при вводе чего-либо

  function eventPhone (e) {
    let matrix = "+7(___) ___-__-__";
    let start = 0;
    let val = e.target.value.replace(/\D/g, "");    // - не дает ввести буквы в телефоне. по синтаксису: /\D/ - поиск  не-цифр, g на конце - поиск всех.
    // === Я бы разрешил вводить символ "+" в начале строки. Т.к. это вводит неменого в заблуждение, когда пытаешься ввести и ничего не происходит. А потом появдляется сам, когда вводишь цифру.
    // === Но тогжа по логике надо разрешить вводить и скобки и тире ))))
    // === Вообще в идеале, чтобы когда курсор ставишь в поле, была видна маска, а курсор стоял уже внутри скобок. Типо так: "+7(|__) ___-__-__" и при вводе цифр маска была видна, а цифры появлялись на месте "_" Задачка сложная. При желании можешь попробовать сделать. Я сам еще не делал ни разу )
    // === Чтобы ее сделать, тебе скорее всего придется отменить действие по умолчанию и отлавливать события нажатия кнопок, а значение  формировать в js и вставлять в input вместе с маской.

    e.target.value = matrix.replace(/./g, function (a) {
      let ry = /[_\d]/.test(a);
        return /[_\d]/.test(a) && start < val.length ? val.charAt(start++) : start >= val.length ? "" : a     // === Эту строчку лучше разбить на несколько, т.к. сложно читать. Можно заводить сколько угодно переменных для этого.
    });   // matrix заменяем все символы по принципу: (проверяем есть ли в matrix числа или "_")и (start меньше тому, что уже ввели? (value))? start +1 (увеличивается, пока не будет больше длины matrix, т.е. не больше длины телефона) : старт  не больше длины телефона? ничего больше ввести нельзя : ввести символ matrix
  }
}

// - select стилизация
{
  let findselect = document.querySelectorAll('.select__header');     // находим главное окно
  let findselitem = document.querySelectorAll('.select__item');      // находим выпадающие окошки

  // === Тут у тебя главное окно и выпадающие не связаны. Если в верстке будет ошибка - все селекты сломаются. Кликнешь по одному - откроется другой. =)
  // === Что делать? Найти родительский блок: selectBox = document.querySelectorAll('.select') тем более, что он тебе понадобится в кое ниже.
  // === И уже selectBox перебираем в цикле где ищем его дочерние элементы: this.querySelector('.select__header') и работаем с ними.

  findselect.forEach(item => {
    item.addEventListener('click', changeSelect)            //  меняет display none на visible у выпадающего списка
  });

  findselitem.forEach(item => {
    item.addEventListener('click', chooseSelect);           //  меняет значение с классов current на выбранное
  });

  // === Еще нехватает события клика в пустом месте экрана, чтобы оно закрывало все открытые селекты.

  function changeSelect() {
    this.parentElement.classList.toggle('select_active');   // toggle добавляет и убирает класс у родительского элемента с классом  select,что меняет display none на visible у выпадающего списка
  };

  function chooseSelect() {
    let text = this.innerText;                              // this будет принимать значение выбранных элементов из выпадающего списка
    let select = this.closest('.select');                   // определяет, в каком селекте происходит выбор
    let currentText = select.querySelector('.select__current');  // находит окно выбора
    currentText.innerText = text;                           // меняет значение на выбранное щелчком
    select.classList.remove('select_active');               // убирает видимость прочих выборов
  };
}

//  Закрыть для пользователя возможность допустить ошибки.  возможность выбрать в 5-ти этажном доме 120-й этаж.
{
  let  HouseRange = document.getElementById('range');               // все этажи
  let  HouseNumber = document.getElementById('rangenumber');        // number всех этажей

  let  FlatRange = document.getElementById('range_flat');           // этаж
  let  FlatNumber = document.getElementById('rangenumber_flat');    // number этажа
  // обрабоотчики событий для каждого изменения бегунка

  HouseRange.onchange = function() {
    HouseRange.value = HouseNumber.value;

    if (HouseRange.value < FlatRange.value) {   // === перед if обязательно делать пропуск строки
      FlatRange.value = HouseRange.value;
      FlatNumber.value = FlatRange.value;
    };
    // === Нарушение принципа DRY - Don't Repeat Yourself (загугли)
    // === Перерисовку фона можно вынести в функцию, или генерировать событие из тех мест, где нужна перерисовка, но обработчик события один сделать. https://learn.javascript.ru/dispatch-events
    FlatRange.style.backgroundSize = (FlatRange.value - FlatRange.min) * 100 / (FlatRange.max - FlatRange.min) + '% 100%';
  };

  HouseNumber.onchange = function() {
    HouseNumber.value = HouseRange.value;
  };

  FlatRange.onchange = function() {
    FlatRange.value = FlatNumber.value;
  };

  FlatNumber.onchange = function() {
    FlatNumber.value = FlatRange.value;
  };
}

// При нажатии "УЗНАТЬ стоимость" нужно проверить форму и вывести соответствующие сообщения под полями с ошибками.
{
  let form = document.forms.formOrange;                             // находим форму
  let textInput = document.querySelectorAll(".price__submitcheck"); // инпуты с вводом текста
  let radio = form.elements.radiocheck;
  let radioStyled = document.getElementsByClassName('price__check');

  form.addEventListener('submit', validate);                        // ставим обработчик отправки формы
  const answerdiv = document.querySelector('.js-answer');
  let html = '';

  function validate(event) {
    event.preventDefault();                                         // отмена стандартной отправки
    // проверка инпутов с вводом текста

    textInput.forEach((input) => {
      input.addEventListener("blur", addred);                       // === Ты добавляешь обработчики событий уже после того, как была совершена попытка отправки формы.
      input.addEventListener("focus", removered);                   // === Почему бы не сделать это раньше? Чтобы сразу поля влидировать при попытке их заполнять?

      if (input.value == "") {
        input.classList.add('price_red');
        input.placeholder = "поле должно быть заполнено";
      }
    });

    // проверка radio инпута
    let radioAnchor;

    for (i = 0; i < radio.length; i++) {                            // === Перед for тоже пустая строка

      if (radio[i].checked) {
        radioAnchor = true;
      }
    }

    if (radioAnchor != true) {
      radio.forEach(elem => {
        elem.classList.add('price_red');
      });
    }

    // А потом отправить письмо на сервер как уже делали )
    // === Когад копируешь код откуда-то, все равно соблюдай отступы, кусок кода можно выделить и нажатием Tab и Shift + Tab его можно двигать весь сразу

    let request = new XMLHttpRequest();
    request.onreadystatechange = function() {

      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        html += (request.responseText);
        answerdiv.innerHTML = html;
        html = '';
      }
    }

    request.open(this.method, this.action, true);
    let data = new FormData(this);

    // for (let key of data.keys())  // === А что вообще тут происходит? =)

    request.send(data);
    form.reset();
  };

  function addred() {

    if (this.value == ('')) {     // === А зачем скобки вокруг ''?
      this.classList.add('price_red');
      this.placeholder = "поле должно быть заполнено"
    }
  };

  function removered() {

    if (this.classList.contains('price_red')) {   // === По моему проверять наличие класса не обязательно. Можно просто прописать удаление. Если его нет, то ошибки не будет
      this.classList.remove('price_red');
      this.placeholder = "";
    }
  };
}



