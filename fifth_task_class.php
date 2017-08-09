<?php 
	class directoryFilter{
	

		public function filter($path,$ext){

  			foreach (new DirectoryIterator($path) as $file) {
		       
				if($file->getExtension() === $ext){
					echo $file->getFilename() . "\n";
				
				}
			}
		}
	}
?>
