<?php
	$apiKey = 'EAACEdEose0cBAErSctgbhLzWoyek4ZAzEnzYVmFZC77deLIQvU3urpjz94ZAogpWs7eZC730jZAP5ZAYwbV6zYv38OqLWHqSZBPYJTPyOV4onRoEFUFSg7BxgZANyGRejVy0sZCsCVg0IJwBOMVDHBdW3AghLpgW4lwrNQjLPPeZBmQAZDZD';
	$url = 'https://graph.facebook.com/v2.3/me';
	
	
	$parameters = array(
					
                			'access_token' => $apiKey
				);
	
	$request = http_build_query($parameters);
	$url = $url . '?' . $request;
	$ch = curl_init($url);
	$optionArr = array(
					CURLOPT_CONNECTTIMEOUT	=> 	200,
					CURLOPT_TIMEOUT 		=> 	200,
					CURLOPT_POST			=>	0,
					CURLOPT_RETURNTRANSFER	=> 	1,
				);
	curl_setopt_array($ch, $optionArr);
	$data = curl_exec($ch);

	curl_close($ch);
	
	$dataArr = json_decode($data, true);
	
	echo '<pre>';
	print_r($dataArr);
	echo '</pre>';
?>