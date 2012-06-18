<?php

	//include $_SERVER['DOCUMENT_ROOT'].'/ems/common/iemsmodule.php';

	class TemplatePresenter
	{
		public function draw_module(IEmsModule $module)
		{
			echo $module->get_caption();
		}
		
		private function draw_self()
		{
		}
		
		private function draw_head()
		{
		}
		
		private function draw_body()
		{
		}
	}

?>