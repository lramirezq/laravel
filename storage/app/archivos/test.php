<?php

// Obtén el contenido del XML
$xmlString = file_get_contents('76245828-4-52-3160504.xml');

// Crea un objeto SimpleXMLElement a partir del XML
$xml = new SimpleXMLElement($xmlString);

// Convierte el objeto SimpleXMLElement a JSON
$json = json_encode($xml);

// Opcionalmente, puedes decodificar el JSON para convertirlo en un array asociativo
$array = json_decode($json, true);

// Puedes imprimir el JSON o el array asociativo resultante
echo $json;
//echo json_encode($array, JSON_PRETTY_PRINT); // Si quieres imprimir el array asociativo formateado

foreach ($array['SetDTE']['DTE']['Documento']['Encabezado'] as $key => $value) {
    echo $key . "\n";
} 
?>
