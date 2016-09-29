<?php
	$url = 'http://bdnews24.com/';
	$ch = curl_init($url);
	$optionArr = array(
		
				CURLOPT_HTTPGET 	=> 1,
				CURLOPT_HEADER 	=> 1,
			);
	curl_setopt_array($ch, $optionArr);
	$data = curl_exec($ch);
	curl_close($ch);
	echo $data;
?>