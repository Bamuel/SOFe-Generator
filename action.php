<?php
$username = $_POST['username'];
$backgroundcolor = $_POST['backgroundcolor'];
$maincolor = $_POST['maincolor'];
$rotate = $_POST['rotate'];
$filename = $username . ".png";
if (file_exists($filename)) {
    echo "That username is already taken <br>";
    echo "<img src='$filename' width='192px' height='192px'><br>";
    echo "Here is what $username done <br>";
    echo "<a href=\"index.php\">Go Back</a>";
} else {
    list($r, $g, $b) = sscanf($maincolor, "#%02x%02x%02x");
    list($r2, $g2, $b2) = sscanf($backgroundcolor, "#%02x%02x%02x");

    $imgname = "SOFe.png";
    $im = imagecreatefrompng($imgname);

    imagetruecolortopalette($im, false, 255);

    $index = imagecolorclosest($im, 100, 217, 88); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 99, 216, 87); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 108, 218, 92); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 196, 230, 196); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 196, 230, 196); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 212, 234, 204); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 228, 234, 220); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 204, 234, 204); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 228, 238, 228); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 228, 234, 228); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 212, 234, 212); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 188, 230, 180); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 188, 230, 172); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 188, 230, 188); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR
    $index = imagecolorclosest($im, 220, 234, 220); // get Green color
    imagecolorset($im, $index, $r, $g, $b); // SET NEW COLOR

    $index = imagecolorclosest($im, 238, 238, 238); // get background
    imagecolorset($im, $index, $r2, $g2, $b2); // SET NEW COLOR
    $index = imagecolorclosest($im, 220, 218, 220); // get background
    imagecolorset($im, $index, $r2, $g2, $b2); // SET NEW COLOR

    if ($rotate != 0){ //because when set to angle 0 it overlaps (0=360) kinda like clocks
        $im = imagerotate($im, $rotate, 0);
    }

    $imgname = $username . ".png";
    imagepng($im, $imgname); // save image as gif
    imagedestroy($im);
    header('Location: ' . $filename);
    exit;
}