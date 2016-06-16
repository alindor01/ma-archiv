<?php 
	
	class controller{
		
	
		public $ret;
		
		public function __construct(){
			require_once('router/DB.php');
			require_once('router/router.php');
			require_once('library/datetime.php');
			$ccc=new date1();
			$url = router::parse();
			
			
			$db = new database();
			$result = $db->select("SELECT * FROM clanky where id=" . $url['1']);
			//include('interface/pages/clanek.php');
			include('modules/latte.php');
			
			$latte = new Latte\Engine;
			// kresli na výstup
			
			$ar['result'] = $result;
			$ar['ccc'] = $ccc;
			
			$html = $latte->renderToString('interface/pages/clanek-detail.latte', $ar);
			
			$this->ret=$html;
			
			
			
			
		}
		
	}

?>

