<?php 
	
	class controller
	{
		
		public $ret;
		
		public function __construct(){
			require_once('router/DB.php');
			require_once('router/router.php');
			require_once('library/datetime.php');
			$ccc=new date1();
			$url = router::parse();
			
			
			include('modules/latte.php');
			
			$latte = new Latte\Engine;
			// kresli na výstup
			
			
			$ar['0'] =NULL;
			
			$html = $latte->renderToString('interface/pages/homepage.latte', $ar);
			
			$this->ret=$html;
			
			
			
			
		}
		
		
		
	}

?>

