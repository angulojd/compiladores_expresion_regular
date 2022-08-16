<?php	
	$url = $_POST['variable_url'];
	function filterUrl($url){
		if(trim($url) == ''){
			echo 'No has introducido ningun valor<br>';
			return false;
		}else{
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|](\.)[a-z]{2}/i",$url)) {
				echo 'La direccion introducida no es valida<br>';
				return false;
			}else{
				echo 'Direccion valida<br>';
				return true;
			}
		}
	}
	if (!filterUrl($url)) {	
		echo 'URL incorrecta';
	}else {
		echo 'La URL '.$url.' es correcta';
	}		
?>
