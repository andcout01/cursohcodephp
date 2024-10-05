<?php

header("Content-type: image/png");

$image = imagecreate(400, 200);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP", $red);
imagepng($image);
// imagedestroy($image);


// header("Content-Type: image/png");
// $im = @imagecreate(110, 20)
//     or die("Não é possível inicializar um novo stream de imagem GD.");
// $background_color = imagecolorallocate($im, 0, 0, 0);
// $text_color = imagecolorallocate($im, 233, 14, 91);
// imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
// imagepng($im);
// imagedestroy($im);


?>