<?php
header("Content-Type: application/xml");

$municipios["01"]["0029"] = "Almirante";
$municipios["01"]["0493"] = "Changuinola";
$municipios["01"]["0035"] = "Bocas";
$municipios["04"]["0500"] = "David";
$municipios["04"]["0501"] = "Bugaba";
$municipios["04"]["0502"] = "Puerto Armuelles";



$provincia = trim($_POST["provincia"]);
$losMunicipios = $municipios[$provincia];

foreach($losMunicipios as $codigo => $nombre) {
  $elementos_xml[] = "<municipio><codigo>$codigo</codigo><nombre>".$nombre."</nombre></municipio>";
}

echo "<municipios>\n".implode("\n", $elementos_xml)."</municipios>";

?>
