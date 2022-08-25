<?php
    $date = $_POST['variable_date'];
    function filterDate($date){
		if(trim($date) == ''){
			echo 'No has introducido ningun valor<br>';
			return false;
		}else{
			$fecha = strtotime($date);
			if (!preg_match("~([0-2][0-9]|3[0-1])[-/.](0[1-9]|[12][0-9]|3[01])[-/.](19|20)\d\d~",$date)){
				echo 'La fecha introducida no es valida<br>';
				return false;
			}else{
				echo 'Fecha introducida es valida<br>';
				$valores = explode('/', $date);
				if(!checkdate($valores[1], $valores[0], $valores[2])){
					echo 'Los valores no corresponden al calendario<br>';
					return false;
				}
				return true;
			}
		}
	}
	if (!filterDate($date)) {	
		echo 'Fecha incorrecta';
	}else {
		echo 'La fecha '.$date.' es correcta';
	}
?>