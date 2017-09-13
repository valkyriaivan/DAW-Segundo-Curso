<!DOCTYPE html>
<html>
    <head>
		<title>¡PHP para ganadores!</title>
		<meta content="initial-scale=1.0, width=device-width" name="viewport" />
		<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	</head>
	<body>
        <!-- Comentarios en HTML.-->
        <p>
            <?php
    			echo "<table border=1>";
    			$contador=1;
				const lado = 10;
    			for ($n1=1; $n1<=lado; $n1++){
        			echo "<tr>";
        			for ($n2=1; $n2<=lado; $n2++){
						if (($contador % 2) == 0){
							echo "<td>", $contador, "</td>";
						}
						else{
							echo "<td bgcolor='red'>", $contador, "</td>";
						}
            			$contador=$contador+1;
        			}
        			echo "</tr>";
    			}
    			echo "</table>";
			?>
        </p>   
	</body>
</html>
