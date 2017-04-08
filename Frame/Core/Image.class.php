<?php 
class Image{
	public static function water($dst,$water, $postion=9){

				//取要加水印图片的信息，以及打开图片

		$dst_info=getimagesize($dst);
		
		$dstCreateFun=str_replace('/','createfrom',$dst_info['mime']);
		$dst_im=$dstCreateFun($dst);


		//取得水印图片的信息，以及打开水印图片
		$water_info=getimagesize($water);
		$waterCreateFun=str_replace('/','createfrom',$water_info['mime']);
		$water_im=$waterCreateFun($water);
		switch($postion){
			case 1:
				$x=0;
				$y=0;
				break;
			case 2:
				$x= ($dst_info[0]-$water_info[0])/2;
				$y= 0;
				break;
			case 3:
				$x=$dst_info[0] - $water_info[0];
				$y=0;
				break;
			case 4:
				$x=0;
				$y=($dst_info[1] - $water_info[1]) /2;
				break;
			case 5:
				$x=($dst_info[0]-$water_info[0])/2;
				$y=($dst_info[1] - $water_info[1]) /2;
				break;
			case 6:
				$x=$dst_info[0] -$water_info[0];
				$y=($dst_info[1] - $water_info[1]) /2;
				break;
			case 7:
				$x=0;
				$y=$dst_info[1] - $water_info[1];
				break;
			case 8:
				$x=($dst_info[0]-$water_info[0])/2;
				$y=($dst_info[1] - $water_info[1]);
				break;
			case 9:
				$x=$dst_info[0] - $water_info[0];
				$y=$dst_info[1] - $water_info[1];
				break;


		}
		//加水印
		if($water_info[2]==3){
			imagecopy($dst_im, $water_im, $x, $y, 0, 0, $water_info[0],$water_info[1]);
		}else{
			imagecopymerge($dst_im, $water_im, $x, $y, 0, 0, $water_info[0],$water_info[1],80);
		}

		//保存图片
		$saveFun= str_replace('/','', $dst_info['mime']);
		$saveFun($dst_im,$dst);   //将原图覆盖
		imagedestroy($dst_im);
		imagedestroy($water_im);
	}

	//缩略图
	/**
	 * /
	 * 
	 * 	 
	 * 	 	 	 */
	public static function thumb($src,$width,$height,$is_dengbi=true){
		$src_info=getimagesize($src);
		$srcCreateFun=str_replace('/','createfrom',$src_info['mime']);
		$src_im=$srcCreateFun($src);
		$w=$width;
		$h=$height;
		if($is_dengbi){
			$src_info[0];
			$src_info[1];
			if($src_info[0] /$width  >= $src_info[1]/$height){
				$w=$width;
				$h=$src_info[1]*$width/$src_info[0];
			}else{
				$w= $src_info[0]*$height/$src_info[1];
				$h=$height;
			}
		}
		$dst_im=imagecreatetruecolor($w,$h);
		imagecopyresampled($dst_im,$src_im,0,0,0,0,$w,$h,$src_info[0],$src_info[1]);
		$dstSaveFun=str_replace('/','',$src_info['mime']);
		$dstSaveFun($dst_im,$src);
		imagedestroy($src_im);
		imagedestroy($dst_im);

	}
}


Image::thumb('./1.jpg',300,50,false);


 ?>