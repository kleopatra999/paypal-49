<?php
header("Content-Type: application/xml");

$provincias["01"] = "BocasdelToro";
$provincias["04"] = "Chiriqui";



foreach($provincias as $codigo => $nombre) {
  $elementos_xml[] = "<provincia>\n<codigo>$codigo</codigo>\n<nombre>".$nombre."</nombre>\n</provincia>";
}

echo "<provincias>\n".implode("\n", $elementos_xml)."\n</provincias>"

?>
