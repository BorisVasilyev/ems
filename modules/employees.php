<?php

	//include $_SERVER['DOCUMENT_ROOT'].'/ems/common/iemsmodule.php';
	
	class employeesModule implements IEmsModule
	{
		public function get_caption()
		{
			return 'Сотрудники';
		}
		
		public function process_request() 
		{
		}
	}

?>