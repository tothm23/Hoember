<?php

header('content-type: image/png');
$w = 600;
$h = 800;

// Stores the colors
$img = imagecreatetruecolor($w, $h);
$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$orange = imagecolorallocate($img, 255, 165, 0);
$aqua = imagecolorallocate($img, 0, 255, 255);

// Background
imagefill($img, 0, 0, $aqua);

// White balls
imagefilledellipse($img, $w/2, 225, 150, 150, $white);
imagefilledellipse($img, $w/2, 400, 200, 200, $white);
imagefilledellipse($img, $w/2, 625, 250, 250, $white);

// Eyes
imagefilledellipse($img, $w/2-25, 190, 15, 15, $black);
imagefilledellipse($img, $w/2+25, 190, 15, 15, $black);

// Orange ball
imagefilledellipse($img, $w/2, 225, 30, 30, $orange);

// Black balls in the second white ball
for ($i = 350; $i <= 450; $i+=50) { 
    imagefilledellipse($img, $w/2, $i, 25, 25, $black);
}

// Black balls in the third white ball
for ($i = 550; $i <= 700; $i+=75) { 
    imagefilledellipse($img, $w/2, $i, 25, 25, $black);
}

imagepng($img);
imagedestroy($img);

?>