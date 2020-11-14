<?php
$Name = $_POST['Name'];
$Suname = $_POST['Suname'];
$MiddleName = $_POST['MiddleName'];
$Gender = $_POST['Gender'];
$Birthday = $_POST['Birthday'];
$BirthPlace = $_POST['BirthPlace'];
$Docs = $_POST['Docs'];
$DocsMore = $_POST['DocsMore'];
$DocsOther = $_POST['DocsOther'];
$Citizenship = $_POST['Citizenship'];
$CitizenshipMore = $_POST['CitizenshipMore'];
$CitizenshipOther = $_POST['CitizenshipOther'];
$Reg = $_POST['Reg'];
$SubRF = $_POST['SubRF'];
$Country = $_POST['Country'];
$TypeMJ = $_POST['TypeMJ'];
$Occupation = $_POST['Occupation'];
$OccupationOther = $_POST['OccupationOther'];
$Contact = $_POST['Contact'];
?>



<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Anketa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img style="width: 50%;" src="logo.png">
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <h5>Карта № </h5>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <h4 class="text-center">Анкета посетителя</h4>
        </div>

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Фамилия<?php echo $Suname ?></td>
                    <td colspan="2">Имя <?php echo $Name ?></td>
                    <td colspan="4">Отчество <?php echo $MiddleName ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Пол</td>
                    <td>X <?php echo $Gender ?></td>
                    <td>3</td>
                    <td>День рождения</td>
                    <td>00 <?php echo $Birthday ?></td>
                    <td>00</td>
                    <td>0000</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td colspan="2">Место рождения</td>
                    <td colspan="5">X <?php echo $BirthPlace ?></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td colspan="2">Есть ли документ, удостоверяющий личность? </td>
                    <td colspan="5">X <?php echo $Docs ?></td>
                </tr>
                <tr>
                    <td>Паспорт <?php echo $DocsMore ?></td>
                    <td>Свид.рожд.</td>
                    <td>Воен.билет</td>
                    <td>Вод.права</td>
                    <td>Другой:</td>
                    <td colspan="4">X <?php echo $DocsOther ?></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td colspan="2">Гражданство:</td>
                    <td colspan="5">X <?php echo $Citizenship ?></td>
                </tr>
                <tr>
                    <td>РФ <?php echo $CitizenshipMore ?></td>
                    <td>Гражданство государств – бывш.республики СССР:</td>
                    <td>Другое:</td>
                    <td colspan="5">X <?php echo $CitizenshipOther ?></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td colspan="2">Есть ли сейчас постоянная регистрация по месту жительства?</td>
                    <td colspan="5">X <?php echo $Reg ?></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td colspan="7">Последнее (или в данный момент) место регистрации </td>
                </tr>
                <tr>
                    <td>Субъект РФ:</td>
                    <td>X <?php echo $SubRF ?></td>
                    <td>Страна:</td>
                    <td colspan="5">X <?php echo $Country ?></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td colspan="7">Тип места жительства в Москве</td>
                </tr>
                <tr>
                    <td colspan="8">X <?php echo $TypeMJ ?></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td colspan="7">Род занятий:</td>
                </tr>
                <tr>
                    <td>работает <?php echo $Occupation ?></td>
                    <td>временные подработки</td>
                    <td>безработн. / в поиске</td>
                    <td>нетрудоспособн. (инвалидность)</td>
                    <td>пенсионер</td>
                    <td>Другое:</td>
                    <td colspan="2">X <?php echo $OccupationOther ?></td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td colspan="7">контактный телефон, мейл и пр.контакты (свои или друзей/родственников):</td>
                </tr>
                <tr>
                    <td colspan="8">X <?php echo $Contact ?></td>
                </tr>
            </tbody>
        </table>

        <div class="row d-flex justify-content-center">
            <h4 class="text-center font-italic">Согласие на обработку персональных данных</h4>
        </div>

        <div class="row">
            <p class="text-justify">Я понимаю, что все добровольно указанные выше мною персональные данные будут использованы исключительно для оказания необходимой мне помощи, а также для получения статистических данных о людях, оказавшихся в Москве в трудной жизненной ситуации.
                Я даю согласие АНО «Центр социальных и культурно-просветительских услуг «Друзья общины святого Эгидия», сохраняющей и обрабатывающей персональные данные по месту реализации проекта «Дом Друзей на улице»: 127473, город Москва, улица Садовая-Самотечная,
                дом 7, строение 1, на обработку моих персональных данных, то есть на совершение действий, предусмотренных п. 3 ст. 3 Федерального закона от 27.07.2006 N 152-ФЗ "О персональных данных".
            </p>
            <p class="text-justify">
                Настоящее согласие действует со дня его подписания до дня отзыва в письменной форме.
            </p>
        </div>
        <div class="row">
            <div class="col">
                <p>
                    Дата:
                </p>
                <p class="text-justify">
                    "____"_____________ ______ г.
                </p>
            </div>
            <div class="col d-flex justify-content-end">
                <div>
                    <p class="text-end">
                        Субъект персональных данных:
                    </p>
                    <p class="text-end">
                        ____________/_______________________
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col d-flex justify-content-center">

                    </div>
                    <div class="col d-flex justify-content-start">
                        (подпись)
                    </div>
                    <div class="col d-flex justify-content-start">
                        (Ф.И.О.)
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>