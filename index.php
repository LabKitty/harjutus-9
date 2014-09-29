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
			<?php
				say_hello();
				say_hello_to("Maile");
			?>
		 <h3>Väärtuse tagastamine</h3>
			<?php
				function add($number1, $number2) {
					$sum = $number1 + $number2;
						return $sum;
				}
				$result = add(3, 4);
					echo $result;
			?>
			
			
</body>
</html>