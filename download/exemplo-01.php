<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$content = file_get_contents($link);

$parse = parse_url($link);

echo '<pre>';
$basename = basename($parse['path']);

$file = fopen("meu_google.png", 'w+');
fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>" alt="GOOGLE">