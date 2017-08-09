<?php
$i=1;
while(isset($argv[$i])){

	try{
		$file=new splFileobject($argv[$i]);
		echo $file->getBasename() . "\n";
	}	
	
		catch(Exception $e){
	echo "Unable to open file at path '" . $argv[$i] . "'\n";

}++$i;

}


