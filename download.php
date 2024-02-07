<?php
$file = 'SANJAY.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
readfile($file);
?>