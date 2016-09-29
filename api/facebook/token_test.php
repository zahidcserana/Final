<?php

	function GetUserFacebookId($accessToken)
      {
            $parameters = array(
                //'fields' => 'email,first_name,middle_name,last_name,birthday',
                'access_token' => $accessToken
            );
            $profileInfoUrl = 'https://graph.facebook.com/v2.3/me';
            $fullUrl = $profileInfoUrl . '?' . http_build_query($parameters);
            $response = file_get_contents($fullUrl);
            $responseArray = json_decode($response,true);
            return $responseArray;
     	}
      $myId = GetUserFacebookId('EAACEdEose0cBAJBJdDxihdsWQhmhEKwVRIamNqL3zUA9RMXAXUEzHuXIJRM46kZB8gaFWZAMUvkyukLZBd71nfzUxFfelHIs5ZBUgOkksAESSOOdkIZCiCi4aherIHF9aqqqLO2WB4iIfjrBOblqrj3o644dwSUXbNZCSrq6D4AgZDZD');

     	echo '<pre>';
	print_r($myId);
	echo '</pre>';

?>