<?php
session_start();

//Файл конфигурации таблицы данных
require_once 'config.php';
require_once 'helpers/system_helper.php'; //Редиректы

function __autoload($class_name){
	require_once 'classes/'.$class_name. '.class.php';
}