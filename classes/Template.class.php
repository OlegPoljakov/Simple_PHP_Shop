<?php class Template{
	//Путь к шаблону
	protected $template;

	//Переменные
	protected $vars = array();

	//Конструктор
	public function __construct($template){
		$this->template=$template;
	} 

	public function __get($key){
		return $this->vars[$key];
	}

	public function __set($key, $value){
		$this->vars[$key]=$value;
	}

	public function __toString(){

		extract($this->vars); //extract variables from the array
		
		//chdiir - Изменяет текущий каталог PHP на указанный в качестве параметра directory.
		//dirname — Возвращает имя родительского каталога из указанного пути
		chdir(dirname($this->template)); //template - путь к шаблону
		
		// включаем буфер
		ob_start(); //https://anton.shevchuk.name/php/php-for-beginners-output-buffer/

		//Эта функция вернет имя файла, чей путь был передан в качестве параметра. Если имя файла оканчивается на suffix, он также будет отброшен.	
		include basename($this->template);
		
		// отключаем и очищаем буфер	
		return ob_get_clean();

		//Use basename() to get the filename and dirname() to get the path.
		/*ex-le:
		$full_name='/usr/local/php/php.ini';
		$base=basename($full_name); -- $base is "php.ini"
		$dir=dirname($full_name); --$dir is "/usr/local/php"*/
    }
	}
?>