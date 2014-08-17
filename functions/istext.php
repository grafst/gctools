<?php
if istext("DeinefetteMutter"){
		echo "Ist ein Text";
	}else {
		echo "ist kein Text";
	}
function istext ($text)
{
	$wordcount=0;
	// Dictionary öffnen
	$handle = @fopen("german.dic", "r");
	
	if ($handle) {
		while (($wort = fgets($handle, 4096)) !== false) {
			echo $wort;
			if (strpos("x".$text,$wort) !== false) {
				echo "Wort '$wort' gefunden";
				$wordcount++;
			}
		}
		if (!feof($handle)) {
			echo "Error: unexpected fgets() fail\n";
		}
		fclose($handle);
	}
	if ($wordcount > 0){
		return true;
	}
}

?>