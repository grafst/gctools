<?php
include '../../functions/rot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	//do the rotate
	echo '<table>';
	$input = $_POST['string'];
	for ($i = 1; $i < 26 ; $i++) {
		$outputstring = rot("$i","$inputstring");
		echo "<tr><td>Rot $i</td><td>$output</td></tr>";
	}
	echo '</table>';
} else {
	//show the form to enter a text
	echo '<form action="/modules/crypt/rot.php" method="post"><textarea name="string"</textarea></form>';
}



?>
