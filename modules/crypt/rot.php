<?php
include '../../functions/rot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	//do the rotate
} else {
	//show the form to enter a text
	echo '<form action="/modules/crypt/rot.php" method="post"><textarea name="string"</textarea></form>';
}



?>
