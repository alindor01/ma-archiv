<?php 
	
	class controller{
		
	
		public $ret;
		
		public function __construct(){
			if ($_SESSION['log']=="true")
				header("Location:/");
			
			require_once('router/DB.php');
			require_once('router/router.php');
			require_once('library/datetime.php');			
			include('modules/latte.php');
			
			$db = new database();
			
			$latte = new Latte\Engine;
			// kresli na výstup
			
			$ar=[];
			$html = $latte->renderToString('interface/pages/login.latte', $ar);
			
			$this->ret=$html;
			
			if (isset($_POST['login'])){
				$result = $db->select("SELECT * FROM users WHERE login='".$_POST['login']."'");
				foreach ($result as $key) 
					if ((hash('sha256', $_POST['password'])==$key['password'])&&($_POST['login']==$key['login']))
							$_SESSION['log']="true";
							$_SESSION['enter']=intval($key['rights']);
							header("Location:/");
			}
			
			
			
			//}
		}
		
	}

?>

