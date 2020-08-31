<?php

include_once 'config/init.php';

$toy = new Toy;
$consumer = new Consumer;
$template = new Template('templates/shoppage.php');

$template->toys=$toy->getALLToys();


$averagemarks = array();

if($template->toys)
{
	foreach($template->toys as $itoy){
		$averagemark=$consumer->getAverageMark($itoy->id);
		$averagemarks[$itoy->id] = $averagemark;
	}
}




$template->averagemarks=$averagemarks;

echo $template;