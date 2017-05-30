<?php

function getIP(){
	if (!empty($_SERVER['HTTP_X_REAL_IP'])){ 
		$ip = $_SERVER['HTTP_X_REAL_IP'];
	}elseif (!empty($_SERVER['HTTP_CDN_SRC_IP'])){ //ip from cdn
		$ip = $_SERVER['HTTP_CDN_SRC_IP'];
	}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){  //to check ip is pass from proxy
		$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
		for ($i = (count($ips)-1); $i >= 0; $i--) {
			if (!preg_match("/^(10|172\.16|192\.168)\./", $ips[$i])){
				$ip = $ips[$i];
				 break;
			}
		}
	}
	if( !$ip ){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){ //check ip from share internet
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}else{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
	}
	return $ip;
}