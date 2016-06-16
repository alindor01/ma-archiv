<?php 
	class controller{
		
		public $ret;
		public $enter=5;
		
		public function __construct(){
			include('modules/latte.php');
			ini_set('max_execution_time', 300);
			$latte = new Latte\Engine;
			// kresli na výstup
			
			$ftp_conn = ftp_connect("185.136.109.14") or die("couldnt connect");
			$login = ftp_login($ftp_conn, "spravce", "9082");
			ftp_pasv($ftp_conn, true);
			
			//$ftp= ftp_nlist($ftp_conn,'/MULTIMEDIALNI_ARCHIV');
			$ftp= $this->ftpRecursiveFileListing($ftp_conn);
			$dict = $this->format($ftp);
			
			
			ftp_close($ftp_conn);
			
			$ar['conn'] = $ftp;
			$html = $latte->renderToString('interface/pages/ma-archiv.latte', $ar);
			
			$this->ret=$html;
		}
	
	public function format($content){
		
		
		
	}
	
	public function ftpRecursiveFileListing($ftp_conn) { 
		$files = ftp_nlist($ftp_conn,'/MULTIMEDIALNI_ARCHIV');
		
	
		return $files;
	} 
		
		
	}

?>