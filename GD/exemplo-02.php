<?php

$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
imagestring($image, 5, 450, 150, 'CERTIFICADO', $titleColor);
imagestring($image, 5, 440, 350, 'Andre Coutinho Silva', $titleColor);
imagestring($image, 3, 440, 370, 'Concluido em: ' . date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");
imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 100);
imagedestroy($image);
