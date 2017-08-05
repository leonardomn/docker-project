<?php
#Script write a log by day using year, month and day.

$rotate = date('Y-m-d');
echo $rotate;
$getData = array('Username' => get_current_user(), 'WorkingDirectory' => $_SERVER["HOME"]);
file_put_contents("/app/logs/log-" . $rotate . ".log", json_encode($getData) . "\n", FILE_APPEND)

?>