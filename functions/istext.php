<?php
function istext ($text)
{
	$wordcount=0;
	// Dictionary öffnen
	$handle = @fopen("german.dic", "r");
	
	if ($handle) {
		while (($wort = fgets($handle, 4096)) !== false) {
			$wort = rtrim($wort, "\r\n");
			if (stripos("x".$text,$wort) >0) {
				echo "Wort '$wort' gefunden<br/>";
				$wordcount++;
			}
		}
		if (!feof($handle)) {
			echo "Error: unexpected fgets() fail\n";
		}
		fclose($handle);
	}

		return $wordcount;
}
if (istext("Koordinate")==true){
		echo "Ist ein Text";
	}else {
		echo "ist kein Text";
	}


?>