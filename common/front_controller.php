<?php

	include $_SERVER['DOCUMENT_ROOT'].'/ems/common/template_presenter.php';

	class FrontController
	{
		public function __construct()
		{
			$this->load_modules();
			
			$this->tmp_pres = new TemplatePresenter();
		}
			
		public function process_request()
		{
			/*
			Определяем из запроса, какой модуль должен обработать запрос
			находим этот модуль в списке и передаем в draw_page()
			*/	
			
			$uri = $_SERVER['REQUEST_URI'];
			$uri_cut = substr($uri, 5);			
			$mod_name = strstr($uri_cut, '/', true);

			$mod = $this->modules[$mod_name];
			
			if(isset($mod))
			{
				$this->tmp_pres->draw_page($this->mods_data, $mod);
			}
			else if(!strpos($uri_cut, '/'))
			{
				$mod = $this->modules[$uri_cut];
				
				$this->tmp_pres->draw_page($this->mods_data, $mod);
			}
		}
		
		private function load_modules()
		{
			$filename = $_SERVER['DOCUMENT_ROOT'].'/ems/config/modules.ini';
			
			if (file_exists($filename) && is_readable ($filename)) 
			{
				$this->mods_data = parse_ini_file($filename, true);	
				
				if(isset($this->mods_data))
				{
					foreach($this->mods_data as $i => $value)
					{
						include $_SERVER['DOCUMENT_ROOT'].'/ems/' . $value['file_path'];
						
						$mod = new $value['class_name'];
						
						$this->modules[$value['name']] = $mod;
					}
				}						
			}
		}
		
		private $modules; // Массив ссылок на объекты модулей

		private $mods_data; // Массив данных о модулях (название, ссылка и т.п.) из конфигурационного файла
		
		private $tmp_pres;
	}
	
	$contr = new FrontController();
	
	$contr->process_request();

?>