<?php
//decodificare in versione php il contenuto del file.json 
$database = json_decode(file_get_contents(__DIR__ . '/todo.json'));

header('Content-Type: Application/json');
echo json_encode($database);

?>