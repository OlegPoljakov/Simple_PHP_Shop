<?php

include_once 'config/init.php';

$consumer = new Consumer;
$toy_id = $_POST['toyid'];

echo "hello!";
if (isset($_POST)){
	echo "fff";
	
	$data=array();
	$data['toyid']=$_POST['toyid'];
	$data['review']=$_POST['review'];
	$data['consumername']=$_POST['consumername'];
	$data['numofstars']=$_POST['numofstars'];

	if($consumer->add($toy_id, $data)){
		redirect('item.php?id='. $toy_id, 'Your review has been sent', 'success');
	} else{
		redirect('item.php?id='. $toy_id, 'Something went wrong', 'error'); 
	}	
}

?>