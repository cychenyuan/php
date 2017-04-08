<?php 
class Verify{
	public static function code($width=200,$height=80){
		$im=imagecreatetruecolor($width,$height);
		$bgcolor=imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imagefill($im,0,0,$bgcolor);
		for ($i=0; $i<10 ; $i++) { 
			
		
		$linecolor=imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imageline($im,mt_rand(0,200),mt_rand(0,80),mt_rand(0,200),mt_rand(0,80),$linecolor);}
		$baseStr="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$shuffle=str_shuffle($baseStr);
		$mystr=substr($shuffle,0,4);
		$_SESSION['yzm']=$mystr;
		for ($i=0; $i<4 ; $i++) { 
			
		
		$ttfcolor=imagecolorallocate($im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imagettftext($im,'50',mt_rand(-30,30),50*$i,65,$ttfcolor,CORE_PATH.'YZM.ttf',substr($mystr,$i,1));}
		ob_clean();
		header('content-type:image/png');
		imagepng($im);
		imagedestory($im);
	}
}
 ?>
