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
			foreach($this->mods_list as $i => $value)
			{
				$this->tmp_pres->draw_module($value);
			}
		}
		
		private function load_modules()
		{
			$filename = $_SERVER['DOCUMENT_ROOT'].'/ems/config/modules.ini';
			
			if (file_exists($filename) && is_readable ($filename)) 
			{
				$mods = parse_ini_file($filename, true);	
				
				var_dump($mods);

				echo '<br>';				
				
				if(isset($mods))
				{
					foreach($mods as $i => $value)
					{
						include $_SERVER['DOCUMENT_ROOT'].'/ems/' . $value['file_path'];
						
						$mod = new $value['class_name'];
						
						$this->mods_list[$value['name']] = $mod;
					}
				}						
			}
		}
		
		private $mods_list;
		
		private $tmp_pres;
	}
	
	$contr = new FrontController();
	
	$contr->process_request();
	
	/*
	echo 'Called front controller';
	
	echo '<p> Controller called for URI: ' . $_SERVER[ 'REQUEST_URI' ];

	echo '<ul>';
	
	foreach( $_SERVER as $key => $val )
	{
	   echo '<li><b>' . $key . ':</b>
	    <tt>'. $val . '</tt></li>';
	}
	
	echo '</ul>';

	$module_name = 'news';
	
	$mod_class_name = $module_name . 'Module';

	include $_SERVER['DOCUMENT_ROOT'].'/ems/modules/'. $module_name . '.php';
	
	$module_instance = new $mod_class_name();
	
	echo $module_instance->get_caption();
	*/

?>