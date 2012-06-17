<?php

	public interface IEmsModule
	{
		public function process_request($uri);
		
		public function get_caption();
	}

?>