require 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}

	function testData(){
		$a=$_GET[�a�];
		$b=$_GET[�b�];
		$c=$_GET[�c�];
		
		// Ki?m tra nh?p thi?u d? li?u.        
		if (empty($a) || empty($b) || empty($c)) {
			echo �Nh?p thi?u d? li?u !!!�;
			exit();
		}
		//Ki?m tra d? d�i c� ph?i l� s? hay kh�ng.
		if (!is_numeric ($a) || !is_numeric ($b) || !is_numeric ($c)) {
			echo ��? d�i ph?i l� s? !!!�;
			exit();
		}
		
		if (($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b) {
			echo �Th?a m�n y�u c?u l� tam gi�c �;
		}
		else {
			echo �Kh�ng t?o th�nh du?c tam gi�c �;
		}
	}
	
	function Triangle(){
		$a2=$a*$a;
		$b2=$b*$b;
		$c2=$c*$c;
		
		if ($a == $b && $b == $c) {
        $tam_giac = �Tam gi�c d?u�;
		}
			
		else if ($a == $b || $a == $c || $c == $b)  {
				if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
					$tam_giac = �Tam gi�c vu�ng c�n�;
				}
		else {
					$tam_giac = �T�m gi�c c�n�;
				}
		}
			
		else if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
				$tam_giac= �Tam gi�c vu�ng�;
		}
			
		else {
				$tam_giac = �Tam gi�c thuong�;
		}
	}
}

$user_api = new api();