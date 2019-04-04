<?php
//YT : Haykal Tutorial
echo              
  "© BOT PROKABAR ©
© SAUDARA NYA CAPING © 
© CREATOR : BA2NG ©
©YT : Haykal Tutorial ©
[Silahkan DI SUBSCRIBE]
=====================================================: ";



echo "Masukkan UserId/Uid : ";
$uid 	= trim(fgets(STDIN));
echo "Masukkan N ID : ";
$n 	= trim(fgets(STDIN));
echo "Masukkan Jumlah NGANU : ";
$jumlah	= trim(fgets(STDIN));
echo "SetSleep : ";
$wait	= trim(fgets(STDIN));
    $i=0;
while($i<$jumlah){
			sleep($wait);
			$i++;
			flush();
			
		$news		=	news($uid,$n);
		$video		=	video($uid,$n);
		$share		=	share($uid,$n);
		$code		=	code($uid,$n);
		$klik		=	klik($uid,$n);
	echo "TASK NEWS  $news\n";
	echo "TASK VIDEO $video\n";
	echo "TASK SHARE $share\n";
	echo "TASK CODE  $code\n";
	echo "TASK KLIK  $klik\n";
	
	}
function news($uid,$n){ 
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id:443/v2/event/news/view/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
				$headers[] = "Cookie: u=$uid;n=$n";
				$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi Note 5 Build/OPM1.171019.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/1.0.0";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function video($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id:443/v2/event/video/view/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi Note 5 Build/OPM1.171019.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/1.0.0";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function share($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id:443/v2/event/share/news/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi Note 5 Build/OPM1.171019.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/1.0.0";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function code($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id:443/v2/event/share/code"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi Note 5 Build/OPM1.171019.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/1.0.0";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function klik($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id:443/v2/event/share/click/push"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi Note 5 Build/OPM1.171019.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/72.0.3626.121 Mobile Safari/537.36;CapingNews/1.0.0";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
?>
