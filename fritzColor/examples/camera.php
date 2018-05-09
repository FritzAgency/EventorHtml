
<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

//$time = date('r');
$any = 'Output Data'; 
echo "data: The server time is: {$any}\n\n";

/*$Hi = 'Hi Hi'; 

echo "data : Hello world: {$time}\n\n"; */ 
flush();
?>
