<?php 
	
	class controller{
		
	
		public $ret;
		
		public function __construct(){
			$_SESSION['log']="false";
			$_SESSION['enter']=0;
			header("Location:/");
		}
		
	}

?>

