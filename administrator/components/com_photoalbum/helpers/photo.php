<?php

/**
* 
*/
class ComPhotoalbumHelperPhoto
{

	public function createThumbnail($source,$destination,$new_w,$new_h, $crop=true)
	{
        jimport('joomla.filesytem.file');

        $ext = JFile::getExt($source);

        switch ($ext) {
            case 'png': $src_img = imagecreatefromjpeg($source); break;
            case 'gif': $src_img = imagecreatefromgif($source); break;
            case 'bmp': $src_img = imagecreatefrombmp($source); break;

            case 'jpeg':
            case 'jpg':
                $src_img = imagecreatefromjpeg($source); 
            break;
        }

		if (!$src_img) { /* See if it failed */ 
			$src_img  = imagecreate ($new_w, $new_h); /* Create a blank image */ 
			$bgc = imagecolorallocate ($src_img, 255, 255, 255); 
			$tc  = imagecolorallocate ($src_img, 0, 0, 0); 
			imagefilledrectangle ($src_img, 0, 0, 150, 100, $bgc); 
			/* Output an errmsg */ 
			imagestring ($src_img, 1, 5, 5, "No Image", $tc); 
		}
		
		$old_w=imageSX($src_img);
		$old_h=imageSY($src_img);

        // Crop
        $scaleByWidth = $new_w / $old_w;
        $scaleByHeight = $new_h / $old_h;

        if ($crop) {
            $scale = $scaleByWidth > $scaleByHeight ? $scaleByWidth : $scaleByHeight;
            $width = $new_w/$scale;
            $height = $new_h/$scale;

            if (($old_w - $width) > ($old_h - $height)) {
                $src = array(floor(($old_w - $width)/2), 0, floor($width), $old_h);
            }else {
                $src = array(0, floor(($old_h - $height)/2), $old_w, floor($height));
            }

            $dst = array(0,0, floor($new_w), floor($new_h));
        }else {
            $scale = $scaleByWidth < $scaleByHeight ? $scaleByWidth : $scaleByHeight;
            $width = floor($new_w * $scale);
            $height = floor($new_h * $scale);

            $src = array(0,0, $old_w, $old_h);
            $dst = array(0,0, $width, $height);
        }

        $dst_img = ImageCreateTrueColor($dst[2],$dst[3]) or die ("Cannot Initialize new GD image stream"); ;
        imagecopyresampled($dst_img,$src_img,$dst[0],$dst[1], $src[0],$src[1], $dst[2],$dst[3], $src[2],$src[3]); 

        switch ($ext) {
            case 'png': imagepng($dst_img, $destination); break;
            case 'gif': imagegif($dst_img, $destination); break;
            case 'bmp': imagewbmp($dst_img,$destination); break;

            case 'jpeg':
            case 'jpg': 
                imagejpeg($dst_img,$destination, 100); 
            break;            
        }

		imagedestroy($dst_img);
		imagedestroy($src_img);
	}
}
