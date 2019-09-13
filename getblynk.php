<?php
$data = array( // ----- DATA );
header('Content-Type: application/json');
echo $_GET['callback'] . '(' . json_encode($data) . ')';
?>
