<?php
$url = 'http://localhost/exercise/php/quiz/basicphp5.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>
