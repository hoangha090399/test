require 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}

	function testData(){
		$a=$_GET[‘a’];
		$b=$_GET[‘b’];
		$c=$_GET[‘c’];
		
		// Ki?m tra nh?p thi?u d? li?u.        
		if (empty($a) || empty($b) || empty($c)) {
			echo ‘Nh?p thi?u d? li?u !!!’;
			exit();
		}
		//Ki?m tra d? dài có ph?i là s? hay không.
		if (!is_numeric ($a) || !is_numeric ($b) || !is_numeric ($c)) {
			echo ‘Ð? dài ph?i là s? !!!’;
			exit();
		}
		
		if (($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b) {
			echo ‘Th?a mãn yêu c?u là tam giác ‘;
		}
		else {
			echo ‘Không t?o thành du?c tam giác ‘;
		}
	}
	
	function Triangle(){
		$a2=$a*$a;
		$b2=$b*$b;
		$c2=$c*$c;
		
		if ($a == $b && $b == $c) {
        $tam_giac = ‘Tam giác d?u’;
		}
			
		else if ($a == $b || $a == $c || $c == $b)  {
				if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
					$tam_giac = ‘Tam giác vuông cân’;
				}
		else {
					$tam_giac = ‘Tâm giác cân’;
				}
		}
			
		else if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
				$tam_giac= ‘Tam giác vuông’;
		}
			
		else {
				$tam_giac = ‘Tam giác thuong’;
		}
	}
}

$user_api = new api();