<?php
/**
 * Serve as image output
 */
header("Content-Type: image/png");
header('Content-disposition: inline; filename="image.png"');

/**
 * Do not serve too large image.
 *
 * Example of an image source:
 *   http://pixel.example.com/?w=200&h=100
 */

$width = (int)($_GET["w"]??1);
$width = ($width < 1 || $width > 1000)?1:$width;

$height = (int)($_GET["h"]??1);
$height = ($height < 1 || $height > 1000)?1:$height;

/**
 * When GD not installed or other errors
 */
function error()
{
    readfile("1x1.png");
}

if(function_exists("imagecreate"))
{
    $im = imagecreate($width, $height) or die(error());
    $background_color = imagecolorallocate($im, 0xDD, 0xDD, 0xDD);
    imagepng($im);
    imagedestroy($im);
}
else
{
    error();
}
