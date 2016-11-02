<!doctype html>
<html>
	<head>
		<title>Directorio</title>
	</head>
	<body>
		<h1>Directorio</h1>
		<?php
			$directorio_actual = '/var/www/php/';
			$directorio = opendir($directorio_actual);

			echo "<p>El directorio actual es: $directorio_actual</p>";
			echo '<p>Contenido: </p><ul>';
			while ($archivo = readdir($directorio))
			{
				echo "<li>$archivo</li>";
			}
			echo '</ul>';
			closedir($directorio);
		?>
	</body>
</html>
