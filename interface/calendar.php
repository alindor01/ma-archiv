<?php 
	class controller{
		
		public $ret;
		public $enter=5;
		
		public function __construct(){
			include('modules/latte.php');
			
			$latte = new Latte\Engine;
			// kresli na výstup
			
			$ar['0'] = NULL;
			$html = $latte->renderToString('interface/pages/calendar.latte', $ar);
			
			$this->ret=$html;
		}
		
		
		
	}

?>