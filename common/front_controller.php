<?php

	echo 'Called front controller';
	
	echo '<p> Controller called for URI: ' . $_SERVER[ 'REQUEST_URI' ];

	echo '<ul>';
	
	foreach( $_SERVER as $key => $val )
	{
	   echo '<li><b>' . $key . ':</b>
	    <tt>'. $val . '</tt></li>';
	}
	
	echo '</ul>';

	/*
	class FrontController
	{
	}
	*/

?>