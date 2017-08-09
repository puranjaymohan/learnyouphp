<?php
function getname($path){
	
	if(file_exists($path)){
		$name= new splFileinfo($path);
		return $name->getBasename();
	}
	else{
	return false;
	}

}
$b=$argv;
array_shift($b);	

$values = array_map("getname",$b);

$final= array_filter($values);
$i=0;
while(isset($final[$i])){

echo $final[$i] . "\n";


++$i;
}















