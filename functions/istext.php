<?php
//Untersucht ob ein String deutsche Wörter enthält und gibt die Anzahl gefundenen Wörter zurück.
function istext ($text)
{
	//Anzahl gefundene Woerter
	$wordcount=0;
	// Dictionaries suchen
	$dictionaries=glob(realpath(dirname(__FILE__))."/*.dic");
	foreach ($dictionaries as $dictionary) {
		echo $dictionary;
		//Dictionary oeffnen
		$handle = @fopen($dictionary, "r");
		if ($handle) {
			//Woerterbuch Zeilenweise (Wort fuer Wort) einlesen
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
	}
	return $wordcount;
}
?>