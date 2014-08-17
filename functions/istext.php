<?php
function istext ($text)
{
	//Anzahl gefundene W�rter
	$wordcount=0;
	// Dictionary �ffnen
	$handle = @fopen("german.dic", "r");
	
	if ($handle) {
		//W�rterbuch Zeilenweise (Wort f�r Wort) einlesen
		while (($wort = fgets($handle, 4096)) !== false) {
			//Newline Charakter am ende des Wortes entfernen
			$wort = rtrim($wort, "\r\n");
			//Wort im Text suchen
			if (stripos("x".$text,$wort) >0) {
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
?>