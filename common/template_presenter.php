<?php

	//include $_SERVER['DOCUMENT_ROOT'].'/ems/common/iemsmodule.php';

	class TemplatePresenter
	{
		public function draw_page($modules_list, IEmsModule $cur_module)
		{
			$this->draw_head();
			
			$this->draw_body();
			
			echo '<h3>' . $cur_module->get_caption() . '</h3>';
		
			$this->draw_bottom();
		}
		
		private function draw_self()
		{
		}
		
		private function draw_head()
		{
			echo '<html>
			<head>
				<title> Simple ems </title>
			</head>
			';
		}
		
		private function draw_body()
		{
			echo '<body>';
		}
		
		private function draw_bottom()
		{
			echo '</body></html>';
		}
	}

?>