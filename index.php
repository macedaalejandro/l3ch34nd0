
<?php
		#paginar
		$maximo=6;
		if(!empty($_GET['pag'])){
			$pag=limpiar($_GET['pag']);
			
		}else{
			$pag=1;
		}
		$inicio=($pag-1)*$maximo;
		
			$cans=mysql_query("SELECT COUNT(campo)as total FROM tabla");
			if($dat=mysql_fetch_array($cans)){
				$total=$dat['total']; #inicializo la variable en 0
			}
			echo "mamadas";
?>
