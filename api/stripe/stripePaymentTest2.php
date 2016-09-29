<?php
	$apiKey = 'sk_test_gHChnCztNN9UXf3sQg4Z0Gzd';
	$url = 'https://api.stripe.com/v1/charges';
	$ch = curl_init($url);
	
	$parameters = array(
					'amount' 	=> 	500,
					'currency'	=>	'usd',
					'source'	=>	array(
										"object"=>'card',
										"number" => '4242424242424242',
										"exp_month" => '09',
										"exp_year" => '19',
										"cvc" => '123',
										"name"=> 'Jhon cena'
									) ,
					'description' => 'sample description'
				);
	
	$request = http_build_query($parameters);
	
	$optionArr = array(
					CURLOPT_CONNECTTIMEOUT	=> 	200,
					CURLOPT_TIMEOUT 		=> 	200,
					CURLOPT_USERPWD 		=> 	$apiKey . ':',
					CURLOPT_POST			=>	1,
					CURLOPT_POSTFIELDS		=>	$request,
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