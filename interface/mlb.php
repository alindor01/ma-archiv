<?php 
	class controller{
		
		public $ret;
		public $enter=5;
		
		public function __construct(){
			include('modules/latte.php');
			require_once('router/DB.php');
			
			$db = new database();
			$result = $db->select("SELECT * FROM matches");
			$result2 = $db->select("SELECT * FROM stats");
			$result3 = $db->select("SELECT * FROM stats where lague='US' ORDER by points DESC");
			
			$latte = new Latte\Engine;
			// kresli na výstup
			$ar['result3'] = $result3;
			while ($row = $result2->fetch_assoc()){
				$data[$row['id']]=$row['team_name'];
			}
			
			if($_GET){
				if(isset($_GET['decay'])){
					$this->decay();
				}
			}
			
			//$db->update($table,$colum,$edit,$id);
			
			
			$ar['data'] = $data;
			$ar['result'] = $result;
			
			$html = $latte->renderToString('interface/pages/mlb.latte', $ar);
			
			$this->ret=$html;
			
			
			
		}
		private function decay() {
			return "Decay applied";
		}

		
		
		
	}

?>