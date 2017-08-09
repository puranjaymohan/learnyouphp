<?php 
require_once __dir__ ."/fifth_task_class.php";


	$filterme = new directoryFilter;
	$filterme->filter($argv[1],$argv[2]);
