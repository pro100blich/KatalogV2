

(function() {
    document.querySelectorAll('.box-select').forEach(e => {
        e.querySelector('.select').insertAdjacentHTML('afterBegin', `<option disabled selected></option>`);
        [...e.querySelector('.select').children].forEach((e,i) => e.dataset.id = i + 1 );
    });
})();

function calc(e) {
    let target = e.target.selectedOptions[0];
    if (target.parentElement.classList.contains('select')) {
        let summ = this.parentElement.querySelector('.summ');
        let new_div = `<div class="position">${target.outerHTML.replace(/option/g,'span')}<span class="close">X</span></div>`;
        target.disabled = true;
        this.children[0].selected = true;
        this.parentElement.querySelector('.list').insertAdjacentHTML('beforeEnd', new_div);
        summ.textContent = +summ.textContent + +target.dataset.price;
    }
    total();
}

function del(e) {
    if (e.target.classList.contains('close')) {
        let data_id = +e.target.previousElementSibling.dataset.id;
        let parent = e.currentTarget.parentElement;
        parent.querySelector(`.select [data-id="${data_id}"]`).disabled = false;
        parent.querySelector(`.select`).children[0].selected = true;
        parent.querySelector('.summ').textContent = +parent.querySelector('.summ').textContent - +e.target.previousElementSibling.dataset.price;
        e.target.closest('.position').remove();
    }
    total();
}

function total() {
    document.querySelector('.total_span').textContent = [...document.querySelectorAll('.summ')].map(e => +e.textContent).reduce((a,b) => a + b);
}

document.querySelectorAll('.box-select .select').forEach(e => e.addEventListener('change', calc) );
document.querySelectorAll('.box-select .list').forEach(e => e.addEventListener('click', del) );








//
// Дублирование блока удалить добавить
//
//
var x = 0;
function addInput() {
  if (x < 10) {
  var profile = document.getElementById('profile');
  var div = document.createElement('div');
  div.id = 'input' + ++x;
   $("#leftFit").hide('slow');
  div.innerHTML = '<div class="form-group row">            <div class="col">              <div>                <select class="form-control" name="test' + (x + 1) + '">       <option disabled selected></option>           <option data-price="100" value="Подготовка по оказанию первой помощи">Подготовка по оказанию первой помощи</option>                  <option data-price="200" value="Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах">Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах</option>                  <option data-price="300" value="Оказание первой медицинской помощи и медицинский уход">Оказание первой медицинской помощи и медицинский уход</option>                  <option data-price="300" value="Подготовка лица командного состава судна, ответственного за охрану (переподготовка)">Подготовка лица командного состава судна, ответственного за охрану (переподготовка)</option>                  <option data-price="300" value="Подготовка лица командного состава судна, ответственного за охрану">Подготовка лица командного состава судна, ответственного за охрану</option>                  <option data-price="300" value="Подготовка по расширенной программе на танкерах-газовозах">Подготовка по расширенной программе на танкерах-газовозах</option>                  <option data-price="300" value="Перевозка опасных веществ на судах (навалом, в упаковке)">Перевозка опасных веществ на судах (навалом, в упаковке)</option>                  <option data-price="300" value="Транспортировка опасных грузов (включая ознакомление с требованиями раздела «С» 49 кодекса федеральных правил США)">Транспортировка опасных грузов (включая ознакомление с требованиями раздела «С» 49 кодекса федеральных правил США)</option>                  <option data-price="300" value="Предотвращение загрязнения моря">Предотвращение загрязнения моря</option>                  <option data-price="300" value="Правила пользования дыхательными аппаратами">Правила пользования дыхательными аппаратами</option>                  <option data-price="300" value="Подготовка специалиста по спасательным шлюпкам и плотам и дежурным шлюпкам, не являющимся скоростными дежурными шлюпками">Подготовка специалиста по спасательным шлюпкам и плотам и дежурным шлюпкам, не являющимся скоростными дежурными шлюпками</option>                  <option data-price="300" value="Подготовка по борьбе с пожаром по расширенной программе">Подготовка по борьбе с пожаром по расширенной программе</option                  <option data-price="300" value="Подготовка по расширенной программе для работы на нефтяных танкерах">Подготовка по расширенной программе для работы на нефтяных танкерах</option>                  <option data-price="300" value="Подготовка по расширенной программе для работы на танкерах-химовозах">Подготовка по расширенной программе для работы на танкерах-химовозах</option>                  <option data-price="300" value="Начальная подготовка для работы на танкерах-газовозах">Начальная подготовка для работы на танкерах-газовозах</option>                  <option data-price="300" value="Начальная подготовка по безопасности">Начальная подготовка по безопасности</option>                  <option data-price="300" value="Подготовка по охране (для лиц, имеющих назначенные обязанности по охране)">Подготовка по охране (для лиц, имеющих назначенные обязанности по охране)</option>                  <option data-price="300" value="Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах (подготовка)">Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах (подготовка)</option>                  <option data-price="300" value="Начальная подготвка по безопасности (подготовка)">Начальная подготвка по безопасности (подготовка)</option>                </select>                <div class="bg-danger">Сумма: <span class="summ">0</span> руб.</div>              </div>            </div>            <div class="col">Начало <input class="form-control" type="date" name="starat_date' + (x + 1) + '"></div>            <div class="col">Конец <input class="form-control" type="date" name="end_date' + (x + 1) + '"></div>            <div class="col">Свидетеельство <input class="form-control" type="text" name="sel' + (x + 1) + '"></div>          </div>         <div id="input0"></div>';
  profile.appendChild(div);
}else{

}
}
//
//
//
//

function delInput() {
  var div = document.getElementById('input' + x);
  div.remove();
  --x;
}



