<?php

include_once 'config/init.php';

$template = new Template('templates/items.php');
$toy = new Toy;
$consumer = new Consumer;

$tmp = array();
$toyinfo = array();

$toy_id=isset($_GET['id']) ? $_GET['id'] : null; //Забираем номер игрушки из URL!!!
$tmp=$toy->getExactToyInfo($toy_id); //Массив данных об одной конкретной игрушке. Сожержит объект с свойствами. 
$toyinfo=(array)$tmp[0]; //Первый элемент массива - объект. Его принудительно делаем массивом свойств 

$template->averagemark=$consumer->getAverageMark($toy_id); //Вычисляем среднюю оценку по данной игрушке
$template->toyinfo=$toyinfo; //toyinfo - массив с информаций о игрушке
 
$template->reviews=$consumer->getALLInfoByToyId($toy_id); //массив объектов со свойствами. Через foreach выведем их на html странице

echo $template;
?>

