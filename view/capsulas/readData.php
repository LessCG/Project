<?php
header('Content-type: application/json');
$Arr = file_get_contents("../ejercicios/data/data.json");
echo json_encode($Arr, true);
?>