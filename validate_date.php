<?php
    $date = $_POST['variable_date'];
    function filterDate($date){
		if(trim($date) == ''){
			echo 'No has introducido ningun valor<br>';
			return false;
		}else{
			if (!preg_match("~(0[1-9]|1[012])[-/.](0[1-9]|[12][0-9]|3[01])[-/.](19|20)\d\d~",$date)){
				echo 'La fecha introducida no es valida<br>';
				return false;
			}else{
				echo 'Fecha introducida es valida<br>';
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