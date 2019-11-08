<?php
$date = new DateTime(); // ставим сегодняшнею дату
$date_day = $date->format('Y-m-d'); // формат даты 2019-11-01
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap DaeteTimePicker</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">

  </head>
<body>
  <style type="text/css">
    fieldset{
      padding: 2em;
      margin: 1em 0;
      background-color: #F7F7F9;
    }

  </style>
  <div class="contener">
    <div class="col">
      <form class="form-horizontal" enctype='multipart/form-data'  action='' method='POST'>
        <fieldset>
          <h3>Инициалы</h3>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" id="inputText" name="surname" placeholder="Фамилия">
            </div>
            <div class="col">
              <input type="text" class="form-control" id="inputText" name="name" placeholder="Имя">
            </div>
            <div class="col">
              <input type="text" class="form-control" id="inputText" name="patronymic" placeholder="Отчество">
            </div>
          </div>
        </fieldset>
        <fieldset>
          <h3>Фамилия, имя на английском как в загранпаспорте</h3>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="inputText" name="english_surname" placeholder="Surname">
            </div>
            <div class="">
            </div>
            <div class="col">
              <input type="text" class="form-control" id="inputText" name="english_name" placeholder="Name">
            </div>
          </div>
        </fieldset>
          <div class="row">
            <div class="col">
              <b>Дата рождения</b>
              <input type="date" class="form-control" id="inputText" name="date_of_birth" >
            </div>
            <div class="col">
              &nbsp;
              <input type="tel" class="form-control" id="inputText" name="phone" placeholder="Тел: +7(000)-000-00-00">
            </div>
            <div class="col">
              &nbsp;
              <input type="email" class="form-control" id="inputText" name="email" placeholder="E-mail" >
            </div>
          </div>
          <fieldset>
          <h3>Паспортные данные Российского паспорта</h3>
          <div class="form-group row">
            <div class="col">
              &nbsp;
              <input type="text" class="form-control" id="inputText" name="passport_series" placeholder="Серия паспорта">
            </div>
            <div class="col">
              &nbsp;
              <input type="text" class="form-control" id="inputText" name="passport_number" placeholder="Номер паспорта">
            </div>
            <div class="col">
              Дата выдачи
              <input type="date" class="form-control" id="inputText" name="passport_extradition">
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <input type="text" class="form-control" id="inputText" name="passport_issued_by" placeholder="Кем выдан">
            </div>
          </div>
          <div class="form-row form-group">
            <div class="col">
              <input type="text" class="form-control" id="inputText" name="passport_unit_code" placeholder="Код подразделения">
            </div>
            <div class="col">
              <input type="text" class="form-control" id="inputText" name="address_registration" placeholder="Адрес регистрации">
            </div>
          </div>
        </fieldset>
        <div class="form-row form-group">
          <div class="col">
            Ваше место положения
            <select name="education" class="form-control">
            <option value=""></option>
            <option value="Владивосток">Владивосток</option>
            <option value="Артем">Артем</option>
            <option value="Находка">Находка</option>
            </select>
          </div>
        </div>
        <div class="form-group form-row">
          <div class="col">
            <b>Образование</b>
            <select name="education" class="form-control" id="inlineFormCustomSelect">
            <option value=""></option>
            <option value="Серднее">Серднее</option>
            <option value="Профисиональное">Профисиональное</option>
            <option value="Колледж">Колледж</option>
            </select>
          </div>
          <div class="col">
            <b>Дата последней медкомисии</b>
            <input type="date"  class="form-control" id="inputText" name="medical_board">
          </div>
        </div>
        <div class="form-group row">
          <div class="col">
          Должность
          <select name="position" class="form-control" id="inlineFormCustomSelect">
          <option value="">-- Судоводители --</option>
          <option value="Капинат">Капинат</option>
          <option value="1 Помощник капитана">1 Помощник капитана</option>
          <option value="2 Помощник капитана">2 Помощник капитана</option>
          <option value="3 Помощник капитана">3 Помощник капитана</option>
          <option value="4 Помощник капитана">4 Помощник капитана</option>
          <option value="">-- Механики --</option>
          <option value="Старший механик">Старший механик</option>
          <option value="2 Механик">2 Механик</option>
          <option value="3 Механик">3 Механик</option>
          <option value="4 Механик">4 Механик</option>
          <option value="Механик ТО">Механик ТО</option>
          <option value="Слесарь ТО">Слесарь ТО</option>
          <option value="Электромеханик">Электромеханик</option>
          <option value="Электрик судовой">Электрик судовой</option>
          <option value="Трал мастер">Трал мастер</option>
          <option value="Мастер добычи">Мастер добычи</option>
          <option value="Заведующий производством">Заведующий производством</option>
          <option value="Мастер производства">Мастер производства</option>
          <option value="Доктор судовой">Доктор судовой</option>
          <option value="Повар квалифицированный">Повар квалифицированный</option>
          <option value="Повар судовой">Повар судовой</option>
          <option value="РМУ">РМУ</option>
          <option value="Буфетчица">Буфетчица</option>
          <option value="Дневальный">Дневальный</option>
          <option value="Оператор стиральных машин">Оператор стиральных машин</option>
          <option value="Токарь">Токарь</option>
          <option value="ГЭС">ГЭС</option>
          <option value="Боцман">Боцман</option>
          <option value="Лебедчик">Лебедчик</option>
          <option value="Стропальщик">Стропальщик</option>
          <option value="Машинист помповый">Машинист помповый</option>
          <option value="Газоэлектросварщик">Газоэлектросварщик</option>
          <option value="Водитель электро и автотележка">Водитель электро и автотележка</option>
          <option value="">-- Матрос --</option>
          <option value="Матрос квалифицированный">Матрос квалифицированный</option>
          <option value="Матрос вахтенный">Матрос вахтенный</option>
          <option value="Матрос судовой">Матрос судовой</option>
          <option value="Матрос обработчик">Матрос обработчик</option>
          <option value="">-- Моторист --</option>
          <option value="Моторист квалифицированный">Моторист квалифицированный</option>
          <option value="Моторист вахтенный">Моторист вахтенный</option>
          <option value="Моторист судовой">Моторист судовой</option>
          </select>
          </div>
        </div>
        <fieldset>
          <h3>Программа дополнительного профисионального оброзования</h3>
         <!-- <div id="profile">-->
            <div class="form-group row">
              <div class="col">
                <div class="box-select">
                  <select class="select form-control" name="test">
                    <option data-price="100" value="Подготовка по оказанию первой помощи">Подготовка по оказанию первой помощи</option>
                    <option data-price="200" value="Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах">Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах</option>
                    <option data-price="300" value="Оказание первой медицинской помощи и медицинский уход">Оказание первой медицинской помощи и медицинский уход</option>
                    <option data-price="300" value="Подготовка лица командного состава судна, ответственного за охрану (переподготовка)">Подготовка лица командного состава судна, ответственного за охрану (переподготовка)</option>
                    <option data-price="300" value="Подготовка лица командного состава судна, ответственного за охрану">Подготовка лица командного состава судна, ответственного за охрану</option>
                    <option data-price="300" value="Подготовка по расширенной программе на танкерах-газовозах">Подготовка по расширенной программе на танкерах-газовозах</option>
                    <option data-price="300" value="Перевозка опасных веществ на судах (навалом, в упаковке)">Перевозка опасных веществ на судах (навалом, в упаковке)</option>
                    <option data-price="300" value="Транспортировка опасных грузов (включая ознакомление с требованиями раздела «С» 49 кодекса федеральных правил США)">Транспортировка опасных грузов (включая ознакомление с требованиями раздела «С» 49 кодекса федеральных правил США)</option>
                    <option data-price="300" value="Предотвращение загрязнения моря">Предотвращение загрязнения моря</option>
                    <option data-price="300" value="Правила пользования дыхательными аппаратами">Правила пользования дыхательными аппаратами</option>
                    <option data-price="300" value="Подготовка специалиста по спасательным шлюпкам и плотам и дежурным шлюпкам, не являющимся скоростными дежурными шлюпками">Подготовка специалиста по спасательным шлюпкам и плотам и дежурным шлюпкам, не являющимся скоростными дежурными шлюпками</option>
                    <option data-price="300" value="Подготовка по борьбе с пожаром по расширенной программе">Подготовка по борьбе с пожаром по расширенной программе</option>
                    <option data-price="300" value="Подготовка по расширенной программе для работы на нефтяных танкерах">Подготовка по расширенной программе для работы на нефтяных танкерах</option>
                    <option data-price="300" value="Подготовка по расширенной программе для работы на танкерах-химовозах">Подготовка по расширенной программе для работы на танкерах-химовозах</option>
                    <option data-price="300" value="Начальная подготовка для работы на танкерах-газовозах">Начальная подготовка для работы на танкерах-газовозах</option>
                    <option data-price="300" value="Начальная подготовка по безопасности">Начальная подготовка по безопасности</option>
                    <option data-price="300" value="Подготовка по охране (для лиц, имеющих назначенные обязанности по охране)">Подготовка по охране (для лиц, имеющих назначенные обязанности по охране)</option>
                    <option data-price="300" value="Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах (подготовка)">Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах (подготовка)</option>
                    <option data-price="300" value="Начальная подготвка по безопасности (подготовка)">Начальная подготвка по безопасности (подготовка)</option>
                  </select>
                <div class="bg-danger" id="leftFit">Сумма: <span class="summ">0</span> руб.</div >
               <div class="bg-warning">Было выбрано:</div>
                <div class="list bg-warning"></div>
                </div>
              </div>
            </div>
                <!--  <div class="bg-danger">Сумма: <span class="summ">0</span> руб.</div>
                </div>
              </div>
              <div class="col">Начало <input class="form-control" type="date" name="starat_date"></div>
              <div class="col" >Конец <input class="form-control"  type="date" name="end_date"></div>
              <div class="col">Свидетеельство <input class="form-control" type="text" name="sel"></div>
            </div>
          </div>
         <div id="input0"></div>
<div class="counter btn btn-primary"  onclick="delInput()">Удалить</div>
<div class="counter btn btn-primary" id="leftFit" onclick="addInput()">Добавить</div> -->
          <!--
          <div class="form-group">
            <div class="col-xs-5">
              Начало
              <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
            <div class="col-xs-2">
            </div>
            <div class="col-xs-5">
              Конец
              <div class='input-group date' id='datetimepicker2' >
                <input type='text' class="form-control"  disabled="true"/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
        -->
        </fieldset>
        <fieldset>
          <h3>Программы дополнительного профессионального образования по охране труда</h3>
          <div class="form-group row">
            <div class="col">
              <div class="box-select">
                <select class="select form-control" >
                  <option data-price="150" value="Обучение по охране труда и проверка знаний требований охраны труда для членов экипажей судов морского флота имеющих квалификационные документы с уровнями ответственности, определенными разделом А 1/1 кодекса ПДНВ: эксплуатация и вспомогательный.">Обучение по охране труда и проверка знаний требований охраны труда для членов экипажей судов морского флота имеющих квалификационные документы с уровнями ответственности, определенными разделом А 1/1 кодекса ПДНВ: эксплуатация и вспомогательный.</option>
                  <option data-price="250" value="Обучение по охране труда и проверка знаний требований охраны труда для членов экипажей судов рыболовного флота имеющих квалификационные документы с уровнями ответственности, определенными разделом А 1/1 кодекса ПДНВ: эксплуатация и вспомогательный.">Обучение по охране труда и проверка знаний требований охраны труда для членов экипажей судов рыболовного флота имеющих квалификационные документы с уровнями ответственности, определенными разделом А 1/1 кодекса ПДНВ: эксплуатация и вспомогательный.</option>
                  <option data-price="350" value="Обучение по охране труда и проверка знаний требований охраны труда руководителей и специалистов, осуществляющих организацию и руководство выполнением работ на рабочих местах и в производственных подразделениях на судах морского флота.">Обучение по охране труда и проверка знаний требований охраны труда руководителей и специалистов, осуществляющих организацию и руководство выполнением работ на рабочих местах и в производственных подразделениях на судах морского флота.</option>
                  <option data-price="350" value="Обучение по охране труда и проверка знаний требований охраны труда руководителей и специалистов, осуществляющих организацию и руководство выполнением работ на рабочих местах и в производственных подразделениях на судах рыболовного флота.">Обучение по охране труда и проверка знаний требований охраны труда руководителей и специалистов, осуществляющих организацию и руководство выполнением работ на рабочих местах и в производственных подразделениях на судах рыболовного флота.</option>
                  <option data-price="350" value="Обучение по охране труда и проверка знаний требований охраны труда для специалистов, на которых приказом работодателя возложены функции специалиста по охране труда судоходных и рыбопромысловых организаций.">Обучение по охране труда и проверка знаний требований охраны труда для специалистов, на которых приказом работодателя возложены функции специалиста по охране труда судоходных и рыбопромысловых организаций.</option>
                  <option data-price="350" value="Обучение по охране труда и проверка знаний требований охраны труда для специалистов, на которых приказом работодателя возложены функции специалиста по охране труда в судоходных компаниях морского и речного флота">Обучение по охране труда и проверка знаний требований охраны труда для специалистов, на которых приказом работодателя возложены функции специалиста по охране труда в судоходных компаниях морского и речного флота</option>
                  <option data-price="350" value="Обучение по охране труда и проверка знаний требований охраны труда руководителей и специалистов, инженерно-технических работников, осуществляющих организацию, руководство и надзор за выполнением требований охраны труда компаний рыболовного флота">Обучение по охране труда и проверка знаний требований охраны труда руководителей и специалистов, инженерно-технических работников, осуществляющих организацию, руководство и надзор за выполнением требований охраны труда компаний рыболовного флота</option>
                  <option data-price="350" value="Обучение по охране труда и проверка знаний требований охраны труда руководителей и специалистов, инженерно-технических работников, осуществляющих организацию, руководство и надзор за выполнением требований охраны труда судоходных компаниях морского и речного флота">Обучение по охране труда и проверка знаний требований охраны труда руководителей и специалистов, инженерно-технических работников, осуществляющих организацию, руководство и надзор за выполнением требований охраны труда судоходных компаниях морского и речного флота</option>
                  <option data-price="350" value="Проверка знаний требований охраны труда">Проверка знаний требований охраны труда</option>
                </select>
                <div class="bg-danger">Сумма: <span class="summ">0</span> руб.</div >
               <div class="bg-warning">Было выбрано:</div>
                <div class="list bg-warning"></div>
              </div>
            </div>
          </div>
          <!--
          <div class="form-group">
            <div class="col-xs-5">
              Начало
              <div class='input-group date' id='datetimepicker3'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
            <div class="col-xs-2">
            </div>
            <div class="col-xs-5">
              Конец
              <div class='input-group date' id='datetimepicker4' >
                <input type='text' class="form-control"  disabled="true"/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
        -->
          </fieldset>
          <fieldset>
            <h3>Программы дополнительного профессионального образования по транспортной безопасности</h3>
            <div class="form-group row">
              <div class="col">
              <div class="box-select">
                <select class="select form-control" >
                  <option data-price="1" value="Повышение квалификации работников, назначенных в качестве лиц, ответственных за обеспечение транспортной безопасности на объекте транспортной инфраструктуры и (или) транспортном средстве.">Повышение квалификации работников, назначенных в качестве лиц, ответственных за обеспечение транспортной безопасности на объекте транспортной инфраструктуры и (или) транспортном средстве.</option>
                  <option data-price="1" value="Повышение квалификации работников субъекта транспортной инфраструктуры, подразделения транспортной безопасности, выполняющих работы, непосредственно связанные с обеспечением транспортной безопасности объекта транспортной инфраструктуры и (или) транспортного средства.">Повышение квалификации работников субъекта транспортной инфраструктуры, подразделения транспортной безопасности, выполняющих работы, непосредственно связанные с обеспечением транспортной безопасности объекта транспортной инфраструктуры и (или) транспортного средства.</option>
                  <option data-price="1" value="Повышение квалификации работников субъекта транспортной инфраструктуры, подразделения транспортной безопасности, руководящих выполнением работ, непосредственно связанных с обеспечением транспортной безопасности объекта транспортной инфраструктуры и (или) транспортного средства">Повышение квалификации работников субъекта транспортной инфраструктуры, подразделения транспортной безопасности, руководящих выполнением работ, непосредственно связанных с обеспечением транспортной безопасности объекта транспортной инфраструктуры и (или) транспортного средства</option>
                  <option data-price="1" value="Повышение квалификации работников, осуществляющих досмотр, дополнительный досмотр, повторный досмотр в целях обеспечения транспортной безопасности.">Повышение квалификации работников, осуществляющих досмотр, дополнительный досмотр, повторный досмотр в целях обеспечения транспортной безопасности.</option>
                  <option data-price="1" value="Повышение квалификации работников, осуществляющих наблюдение и (или) собеседование в целях обеспечения транспортной безопасности">Повышение квалификации работников, осуществляющих наблюдение и (или) собеседование в целях обеспечения транспортной безопасности</option>
                  <option data-price="1" value="Повышение квалификации работников, назначенных в качесиве лиц, ответственных за обеспечение транспортной безопасности в субъекте транспортной инфраструктуры">Повышение квалификации работников, назначенных в качесиве лиц, ответственных за обеспечение транспортной безопасности в субъекте транспортной инфраструктуры</option>
                  <option data-price="1" value="Повышение квалификации работников, включенных в состав группы быстрого реагирования">Повышение квалификации работников, включенных в состав группы быстрого реагирования</option>
                  <option data-price="1" value="Повышение квалификации работников, управляющих техническими средствами обеспечения транспортной безопасности">Повышение квалификации работников, управляющих техническими средствами обеспечения транспортной безопасности</option>
                </select>
                <div class="bg-danger">Сумма: <span class="summ">0</span> руб.</div>
                <div class="bg-warning">Было выбрано:</div>
                <div class="list bg-warning"></div>
              </div>
              </div>
            </div>
<!--
            <div class="form-group">
              <div class="col-xs-5">
                Начало
                <div class='input-group date' id='datetimepicker5'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="col-xs-2">
              </div>
              <div class="col-xs-5">
                Конец
                <div class='input-group date' id='datetimepicker6' >
                  <input type='text' class="form-control"  disabled="true"/>
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
            </div>
          -->
        </fieldset>
        <fieldset>
          <h3>Основная программа</h3>
          <div class="form-group">
            <div class="col-xs-12">
            <div class="box-select">
              <select class="select form-control" >
                <option data-price="1" value="Матрос">Матрос</option>
                <option data-price="1" value="Боцман">Боцман</option>
                <option data-price="1" value="Обработчик рыбы/морепродуктов">Обработчик рыбы/морепродуктов</option>
                <option data-price="1" value="Машинист помповый (донкерман)">Машинист помповый (донкерман)</option>
                <option data-price="1" value="Оператор стиральных машин">Оператор стиральных машин</option>
                <option data-price="1" value="Слесарь по ремонту технологических установок">Слесарь по ремонту технологических установок</option>
                <option data-price="1" value="Машинист рыбомучной установки">Машинист рыбомучной установки</option>
                <option data-price="1" value="Лебедчик">Лебедчик</option>
                <option data-price="1" value="Стропальщик">Стропальщик</option>
                <option data-price="1" value="Электрогазосварщик">Электрогазосварщик</option>
                <option data-price="1" value="Токарь">Токарь</option>
                <option data-price="1" value="Буфетчик">Буфетчик</option>
                <option data-price="1" value="Газоанализаторщик">Газоанализаторщик</option>
                <option data-price="1" value="Моторист">Моторист</option>
              </select>
              <div class="bg-danger">Сумма: <span class="summ">0</span> руб.</div>
              <div class="bg-warning">Было выбрано:</div>
              <div class="list bg-warning"></div>
            </div>
            </div>
          </div>
          <!--
          <div class="form-group">
            <div class="col-xs-5">
              Начало
              <div class='input-group date' id='datetimepicker5'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
            <div class="col-xs-2">
            </div>
            <div class="col-xs-5">
              Конец
              <div class='input-group date' id='datetimepicker6' >
                <input type='text' class="form-control"  disabled="true"/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
        -->
        </fieldset>
        <div class="form-group row">
          <div class="col-md-3">
            <b>Дата заключения договора</b>
			     <input type="date" class="form-control" value="<? echo $date_day?>" min="<? echo $date_day?>">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-3">
            <b>Дата предварительного посещения</b>
            <input type="date" class="form-control" value="<? echo $date_day?>" min="<? echo $date_day?>">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            <div class="input-group">
              <div class="input-group-text">ИТОГ</div>
              <span class="total_span form-control" id="exampleInputAmount">0</span>
              <div class="input-group-text">.00</div>
            </div>
          </div>
          <button type="submit" name="button" class="btn btn-primary col-md-2">Оплатиь</button>
        </div>
      </form>
    </div>
  </div>


  <script src="index.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




 <!-- <script type="text/javascript">
        $(function () {
  $('#datetimepicker1').datetimepicker({
  format: 'DD.MM.YYYY',
  minDate: moment().add(0, 'days'),
  maxDate: moment().add(3, 'days')
  }).on('dp.change', function (selected) {
  $("#datetimepicker2").datetimepicker('minDate',selected.date.add(60, 'days'));
  $(this).datetimepicker('hide');
           });
  $('#datetimepicker2').datetimepicker({
  format: 'DD.MM.YYYY',
  minDate: moment().add(0, 'days')
  }).on('dp.change', function (selected) {
  $(this).datetimepicker('hide');
  });;
   });
$(function () {
  $('#datetimepicker3').datetimepicker({
  format: 'DD.MM.YYYY',
  minDate: moment().add(0, 'days'),
  maxDate: moment().add(3, 'days')
  }).on('dp.change', function (selected) {
  $("#datetimepicker4").datetimepicker('minDate',selected.date.add(60, 'days'));
  $(this).datetimepicker('hide');
           });
  $('#datetimepicker4').datetimepicker({
  format: 'DD.MM.YYYY',
  minDate: moment().add(0, 'days')
  }).on('dp.change', function (selected) {
  $(this).datetimepicker('hide');
  });;
   });

$(function () {
  $('#datetimepicker5').datetimepicker({
  format: 'DD.MM.YYYY',
  minDate: moment().add(0, 'days'),
  maxDate: moment().add(3, 'days')
  }).on('dp.change', function (selected) {
  $("#datetimepicker6").datetimepicker('minDate',selected.date.add(60, 'days'));
  $(this).datetimepicker('hide');
           });
  $('#datetimepicker6').datetimepicker({
  format: 'DD.MM.YYYY',
  minDate: moment().add(0, 'days')
  }).on('dp.change', function (selected) {
  $(this).datetimepicker('hide');
  });;
   });


    </script>
-->
  </body>
</html>