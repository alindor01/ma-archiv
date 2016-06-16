<?php 
	class controller{
		
		public $ret;
		
		public function __construct(){
			require_once('router/DB.php');
			require_once('modules/gallery/gallery.php');
			
			$g=new gallery();
			$g->gen_prev("/design/", "140", "150");
			
			$db = new database();
			$result = $db->select("SELECT * FROM clanky");
			//include('interface/pages/clanek.php');
			include('modules/latte.php');
			
			$latte = new Latte\Engine;
			// kresli na výstup
			
			$ar['result'] = $result;
			$html = $latte->renderToString('interface/pages/clanek.latte', $ar);
			
			$this->ret=$html;
		}
		
		
		
	}

?>