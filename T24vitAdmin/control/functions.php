<?php


// Function to generate a random unique string for file names
function generateUniqueFileName($extension)
{
    return uniqid() . '.' . $extension;
}

// Function to reduce image quality by 50%
function compressImage($source, $destination, $quality)
{
    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
    } elseif ($info['mime'] == 'image/gif') {
        $image = imagecreatefromgif($source);
    } else {
        return false;
    }

    return imagejpeg($image, $destination, $quality);
}
