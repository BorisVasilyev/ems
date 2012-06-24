<?php

	//include $_SERVER['DOCUMENT_ROOT'].'/ems/common/iemsmodule.php';

	class TemplatePresenter
	{
		public function draw_page($modules_list, IEmsModule $cur_module)
		{
			$this->modules = $modules_list;
			$this->cur_module = $cur_module;
			
			/*
			Рисуем окружение страницы и внутри div'а content - рисует текущий модуль
			*/
			
			$this->draw_head();
			
			$this->draw_body();

			$this->draw_menu();
			
			$this->draw_module();
		
			$this->draw_bottom();
		}
		
		private function draw_module()
		{
			echo '<div class="content">';
			echo '<h1>' . $this->cur_module->get_caption() . '</h1>';
			echo '</div>';
		}
		
		private function draw_head()
		{
			?>
			
			<html>
			<head>
				<title> EMS </title>
				<style type="text/css" media="all">
					@import url(/ems/css/div.css);		
				</style>
			</head>
	
			<?php
		}
		
		private function draw_menu()
		{
			?>

				<div class="header">
					<h1> Employee management system </h1>				
				</div>	
				<div class="menu">
				
				<?
					foreach($this->modules as $i => $value)
					{
						echo '<a href="../' . $value["name"] . '/" class="menu_text">' . $value["display_name"] . '</a> ';
					}
					
				?>				
				</div>
			
			<?
		}
		
		private function draw_body()
		{
			?>
			
			<body>
			<div class="container">
			
			<?php
		}
		
		private function draw_bottom()
		{
			?>
			<div class="bottom"> Bottom of the page </div>
			</div>
			</body>
			</html>
			<?php
		}
		
		private $modules;
		private $cur_module;
	}

?>