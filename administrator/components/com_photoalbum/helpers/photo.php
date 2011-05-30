<?php

/**
* 
*/
class ComPhotoalbumHelperPhoto
{

	public function createThumbnail($name,$filename,$new_w,$new_h, $type="thumb")
	{
		$system=explode('.',$name);
		$ext = $system[count($system)-1];

		if (preg_match('/jpg|jpeg/',$ext)){
			$src_img=imagecreatefromjpeg($name);
		}
		if (preg_match('/png/',$ext) ){
			$src_img=imagecreatefrompng($name);
		}
		if (preg_match('/gif/',$ext) ){
			$src_img=imagecreatefromgif($name);
		}
		if (preg_match('/bmp/',$ext) ){
			$src_img=imagecreatefrombmp($name);
		}
		if (!$src_img) { /* See if it failed */ 
			$src_img  = imagecreate (100, 100); /* Create a blank image */ 
			$bgc = imagecolorallocate ($src_img, 255, 255, 255); 
			$tc  = imagecolorallocate ($src_img, 0, 0, 0); 
			imagefilledrectangle ($src_img, 0, 0, 150, 100, $bgc); 
			/* Output an errmsg */ 
			imagestring ($src_img, 1, 5, 5, "No Image", $tc); 
		} 

		$old_x=imageSX($src_img);
		$old_y=imageSY($src_img);

		if ($type == "thumb")
		{
			if ($new_w < $old_x) {
				$thumb_w = $new_w;
				$thumb_h = $old_y - ( $old_y * ( ($old_x - $new_w) / $old_x ) );
			} else  {
				$thumb_w=$old_x;
				$thumb_h=$old_y;
			}
			if ( $thumb_h > $new_h ) {
				$thumb_w = $thumb_w - ( $thumb_w * ( ( $thumb_h - $new_h ) / $thumb_h ) );
				$thumb_h = $new_h;		
			}			

		}
		// resize image for Detailed Profile
		else
		{
			if ($new_w < $old_x) {
				$thumb_w = $new_w;
				$thumb_h = $old_y - ( $old_y * ( ($old_x - $new_w) / $old_x ) );
			} else  {
				$thumb_w = $new_w;
				//$thumb_h = $old_y + ( $old_y * ( ($new_w - $old_x) / $new_w ) );
				$thumb_h = floor(($new_w * $old_y) / $old_x);
			}
			if ( $thumb_h > $new_h ) {
				$thumb_w = $thumb_w - ( $thumb_w * ( ( $thumb_h - $new_h ) / $thumb_h ) );
				$thumb_h = $new_h;		
			}							
		}

        $thumb_w = $new_w; $thumb_h = $new_h;
        //echo $thumb_w.'X'.$thumb_h.'<br />';

        // Crop
        if ($type == 'thumb' or 1) {
            $width = $thumb_w; $height = $thumb_h;
            $w = $old_x; $h = $old_y;

            $scale = (($width / $w) > ($height / $h)) ? ($width / $w) : ($height / $h); // greater rate
            $newW = $width/$scale;    // check the size of in file
            $newH = $height/$scale;

            // which side is larger (rounding error)
            if (($w - $newW) > ($h - $newH)) {
                $src = array(floor(($w - $newW)/2), 0, floor($newW), $h);
            }
            else {
                $src = array(0, floor(($h - $newH)/2), $w, floor($newH));
            }
            
            $dst = array(0,0, floor($width), floor($height));
        }


		//$dst_img=ImageCreateTrueColor($thumb_w,$thumb_h) or die ("Cannot Initialize new GD image stream"); ;
		//imagecopyresized($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y); 
        
        $dst_img=ImageCreateTrueColor($dst[2],$dst[3]) or die ("Cannot Initialize new GD image stream"); ;
        imagecopyresized($dst_img,$src_img,$dst[0],$dst[1], $src[0],$src[1], $dst[2],$dst[3], $src[2],$src[3]); 

		if (preg_match("/png/",$system[1]))	{
			imagepng($dst_img,$filename); 
		} elseif (preg_match("/gif/",$system[1])) {
			imagegif($dst_img,$filename); 
		} elseif (preg_match("/bmp/",$system[1])) {
			imagewbmp($dst_img,$filename); 
		} else {
			imagejpeg($dst_img,$filename, 100); 
		}
		imagedestroy($dst_img); 
		imagedestroy($src_img);

		return true;
	}
}
