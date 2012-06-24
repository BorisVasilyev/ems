<?php

	include $_SERVER['DOCUMENT_ROOT'].'/ems/common/iemsmodule.php';
	
	class newsModule implements IEmsModule
	{
		public function get_caption()
		{
			return 'Новости';
		}
		
		public function process_request() 
		{
		}
	}

?>