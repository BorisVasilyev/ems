<?php

	interface IEmsModule
	{
		function process_request($uri);
		 
		function get_caption();
	}

?>