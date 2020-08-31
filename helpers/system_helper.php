<?php
//redirect('index.php', 'Your job has been listed', 'success');
//FALSE, NULL< NULL - по умолчанию
function redirect($page=FALSE, $message=NULL, $message_type=NULL){
	if (is_string($page)){
		$location=$page; //возврат на главную страницу
	} 
	else {
		$location=$_SERVER['SCRIPT_NAME']; //Переменная $_SERVER - это массив, содержащий информацию, такую как заголовки, пути и местоположения скриптов. Записи в этом массиве создаются веб-сервером. 'SCRIPT_NAME' - Содержит путь к текущему исполняемому скрипту. Это полезно для страниц, которые должны указывать на самих себя. Константа __FILE__ содержит полный путь и имя текущего (то есть включенного) файла. 'REQUEST_URI'www.example.com
	}

	//Check for messages
	if ($message!=NULL){
		$_SESSION['message']=$message; //"Your job has been listed" or "Smthg went wrong"
	}	

	//Check for type
	if ($message_type!=NULL){   
	$_SESSION['message_type']=$message_type;   //Succes or error
	}

	//redirect
	header('Location:' .$location);  //location: address. Возврат на текущую или главную странциу
	exit;		
}

function displayMessage(){
	if (!empty($_SESSION['message'])){
		//Assign message var - из сессии берем данные и кладем в переменные
		$message=$_SESSION['message']; //в сессии хранится сообщение
	
		if(!empty($_SESSION['message_type'])){ //succes or error
			//assign type var
			$message_type=$_SESSION['message_type']; //
			//Create output
			if($message_type == 'error'){
				echo '<div class="alert alert-danger">' . $message . '</div>';
			} else {
				echo '<div class="alert alert-success">' . $message . '</div>';
			}	
		} 

		unset($_SESSION['message']);
		unset($_SESSION['message_type']);
	}
	else {
		echo'';
		 }
}

/*
Пример #1 Пример использования $_SERVER

<?php
echo $_SERVER['SERVER_NAME'];
?>
Результатом выполнения данного примера будет что-то подобное:

www.example.com
*/

/*
Элемент $_SERVER['SERVER_NAME']
В элемент $_SERVER['SERVER_NAME'] помещается имя сервера, как правило, совпадающее с доменным именем сайта, расположенного на нём. Например,

www.softtime.ru

Содержимое элемента $_SERVER['SERVER_NAME'] часто совпадает с содержимым элемента $_SERVER['HTTP_HOST']. Помимо имени сервера суперглобальный массив $_SERVER позволяет выяснить ещё ряд параметров сервера, например IP-адрес сервера, прослушиваемый порт, какой Web-сервер установлен и версию HTTP протокола. Эта информация помещается в элементы $_SERVER['SERVER_ADDR'], $_SERVER['SERVER_PORT'], $_SERVER['SERVER_SOFTWARE'] и $_SERVER['SERVER_PROTOCOL'], соответственно. Ниже приводится пример с использованием данных элементов.



PHP: $_SERVER['SCRIPT_NAME']

$_SERVER['SCRIPT_NAME'] contains the path of the current script.

Example:
<?php
echo $_SERVER['SCRIPT_NAME'];
?>
Copy
Output:
/php/super-variables/$_SERVER-SERVER_SCRIPT_NAME-example1.php

*/
?>