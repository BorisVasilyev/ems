<?php

	//include $_SERVER['DOCUMENT_ROOT'].'/ems/common/iemsmodule.php';

	class TemplatePresenter
	{
		public function draw_page($modules_list, IEmsModule $cur_module)
		{
			/*
			Рисуем окружение страницы и внутри div'а content - рисует текущий модуль
			*/
			$this->draw_head();
			
			$this->draw_body();
			
			echo '<h3>' . $cur_module->get_caption() . '</h3>';
		
			$this->draw_bottom();
		}
		
		/*
		private function draw_self()
		{
		}
		*/
		
		private function draw_head()
		{
			?>
			
			<html>
			<head>
				<title> EMS </title>
				<style type="text/css" media="all">
			    		@import url(../css/div.css);
			  	</style>
			</head>
	
			<?php
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
			</div>
			</body>
			</html>
			<?php
		}
	}

?>