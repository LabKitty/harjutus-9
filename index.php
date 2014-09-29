<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-9 - Funktsioonid ja nende defineerimine</title>
</head>

<body>
	<h2>Funktsiooni defineerimine</h2>
		<h3>Argumendita funktsioon</h3>
			<?php
				function say_hello() {
					echo 'Minu esimene funktsioon!<br>';
				}
				say_hello();
			?>
		<h3>Argumendiga funktsioon</h3>
			<?php
				function say_hello_to($person) {
					echo "<div class='container'><p>Tere {$person}!<br></p></div>";
				}
				say_hello_to("Veronika");
			?>
			
			
</body>
</html>