<?php
	/**
	 * Deliver HTTP Response
	 * @param string $format The desired HTTP response content type: [json, html, xml]
	 * @param string $api_response The desired HTTP response data
	 * @return void
	 **/
	function deliver_response($format, $api_response){

		$http_response_code = array(
			200 => 'OK',
			400 => 'Bad Request',
			401 => 'Unauthorized',
			403 => 'Forbidden',
			404 => 'Not Found'
		);

		header('HTTP/1.1 '.$api_response['status'].' '.$http_response_code[ $api_response['status'] ]);
		header('Access-Control-Allow-Origin: *');
		header('X-Class-Id: cs1520');
		header('X-Taught-By: matt bowytz');
		header('X-Rap-Name: matty-digital - now make a request to this name!');

		if( strcasecmp($format,'json') == 0 ){

			header('Content-Type: application/json; charset=utf-8');

			$json_response = json_encode($api_response);

			echo $json_response;

		}elseif( strcasecmp($format,'xml') == 0 ){

			header('Content-Type: application/xml; charset=utf-8');

			
			function array_to_xml( $data, &$xml_data ) {
		    foreach( $data as $key => $value ) {
	        if( is_array($value) ) {
            if( is_numeric($key) ){
              $key = 'item'.$key;
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
	        } else {
	          $xml_data->addChild("item",htmlspecialchars("$value"));
	        }
		    }
			}

			$data = $api_response['data'];

			$xml_data = new SimpleXMLElement('<?xml version="1.0"?><data></data>');

			array_to_xml($data, $xml_data);

			echo $xml_data->asXML();
			
		}else{

			header('Content-Type: text/html; charset=utf-8');

			$htmlData = $api_response['data'];			

			function getRespponseForHTML($arr) {
				$htmlString = '';
				if (!$arr) {
					$htmlString .= '<li>You have borked the application!</li>';
				}

				if (isset($arr['interests'])) {
					foreach ($arr['interests'] as $interest) {
						$htmlString .= '<li>' . $interest . '</li>'; 
					}
				}
				foreach ($arr as $a) {
					if (isset($arr['programming'])) {
						foreach ($arr['programming'] as $pro) {
							$htmlString .= '<li>' . $pro . '</li>';
						} 
					} elseif (isset($arr['programming'])) {
						foreach ($arr['programming'] as $pro) {
							$htmlString .= '<li>' . $pro . '</li>';
						} 
					} else {
						foreach ($arr as $a) {
							$htmlString .= '<li>' . $a['interests'] . '</li>';
							$htmlString .= '<li>' . $a['programming'] . '</li>';
						}
					} 
				}
				return $htmlString;
			}
			
			$returnHtml = getRespponseForHTML($htmlData);
			echo $returnHtml;

		}

		exit;

	}

	$HTTPS_required = FALSE;

	$authentication_required = FALSE;

	$api_response_code = array(
		0 => array(
			'HTTP Response' => 400,
			'Message' => 'Unknown Error'
		),
		1 => array(
			'HTTP Response' => 200,
			'Message' => 'Success'
		),
		2 => array(
			'HTTP Response' => 403,
			'Message' => 'HTTPS Required'
		),
		3 => array(
			'HTTP Response' => 401,
			'Message' => 'Authentication Required'
		),
		4 => array(
			'HTTP Response' => 401,
			'Message' => 'Authentication Failed'
		),
		5 => array(
			'HTTP Response' => 404,
			'Message' => 'Invalid Request'
		),
		6 => array(
			'HTTP Response' => 400,
			'Message' => 'Invalid Response Format'
		),
		7 => array(
			'HTTP Response' => 200,
			'Message' => 'Please GET "data" with "all", "interests", or "programming"'
		),
		8 => array(
			'HTTP Response' => 200,
			'Message' => 'This is all of the data, you can request "interests" or "programming" as well.'
		),
		9 => array(
			'HTTP Response' => 200,
			'Message' => 'This is the interests data, you can request "all" or "programming" as well.'
		),
		10 => array(
			'HTTP Response' => 200,
			'Message' => 'This is the programming data, you can request "all" or "interests" as well.'
		),
		11 => array(
			'HTTP Response' => 200,
			'Message' => 'You found the response headers! Now you know my rap name!'
		)
	);

	$response['code'] = 0;
	$response['status'] = 404;
	$response['data'] = NULL;

	if( $HTTPS_required && $_SERVER['HTTPS'] != 'on' ){
		$response['code'] = 2;
		$response['status'] = $api_response_code[ $response['code'] ]['HTTP Response'];
		$response['data'] = $api_response_code[ $response['code'] ]['Message'];

		deliver_response($_GET['format'], $response);
	}

	if( $authentication_required ){

		if( empty($_POST['username']) || empty($_POST['password']) ){
			$response['code'] = 3;
			$response['status'] = $api_response_code[ $response['code'] ]['HTTP Response'];
			$response['data'] = $api_response_code[ $response['code'] ]['Message'];

			deliver_response($_GET['format'], $response);

		}

		elseif( $_POST['username'] != 'bowytz@pitt.edu' && $_POST['password'] != 'password' ){
			$response['code'] = 4;
			$response['status'] = $api_response_code[ $response['code'] ]['HTTP Response'];
			$response['data'] = $api_response_code[ $response['code'] ]['Message'];

			deliver_response($_GET['format'], $response);

		}

	}

	$terms = array(
		'interests' => array(
			'Comic Books',
			'Collecting',
			'Painting',
			'Art',
			'Illustration',
			'Video Games',
			'Playstation 4',
			'Fallout 4',
			'Transformers',
			'Legos',
			'Green Lantern',
			'Board Games',
			'Card Games'
		),
		'programming' => array(
			'PHP',
			'Javascript',
			'HTML',
			'node.js',
			'CSS',
			'SASS',
			'jQuery',
			'MySQL',
			'Git',
			'GitHub',
			'Command Line',
			'Heroku',
			'Atom',
			'Sublime Text',
			'Angular',
			'Ember',
			'MongoDB'
		)
	);

	$matchFile = strcasecmp($_GET['method'],'simple_api') == 0;
	$ifData    = isset($_GET['data']);

	if ($matchFile && !$ifData) {
		$response['code']   = 7;
		$response['status'] = $api_response_code[ $response['code'] ]['HTTP Response'];
		$response['info']   = array("hint" => $api_response_code[ $response['code'] ]['Message']);
		$response['data']   = null;
	}

	if ($matchFile && $ifData && strcasecmp($_GET['data'],'matty-digital') == 0) {
		$response['code']   = 11;
		$response['status'] = $api_response_code[ $response['code'] ]['HTTP Response'];
		$response['info']   = array("hint" => $api_response_code[ $response['code'] ]['Message']);
		$response['data']   = 'You deserve a trophy for this. Unfortunately, it\'s going to have ot be one of those "verbal trophies", I mean, I\'m rich and famous just like you, but I\'m certainly not "giving out trophies all willie nillie" rich. Who do you think I am? Bruce Wayne?'; 
	}

	if ($matchFile && $ifData && strcasecmp($_GET['data'],'all') == 0) {
		$response['code']   = 8;
		$response['status'] = $api_response_code[ $response['code'] ]['HTTP Response'];
		$response['info']   = array("hint" => $api_response_code[ $response['code'] ]['Message']);
		$response['data']   = $terms;
	}	elseif ($matchFile && $ifData && strcasecmp($_GET['data'],'interests') == 0) {
		$response['code']   = 9;
		$response['status'] = $api_response_code[ $response['code'] ]['HTTP Response'];
		$response['info']   = array("hint" => $api_response_code[ $response['code'] ]['Message']);
		$response['data']   = $terms['interests'];
	}	elseif ($matchFile && $ifData && strcasecmp($_GET['data'],'programming') == 0) {
		$response['code']   = 10;
		$response['status'] = $api_response_code[ $response['code'] ]['HTTP Response'];
		$response['info']   = array("hint" => $api_response_code[ $response['code'] ]['Message']);
		$response['data']   = $terms['programming'];
	} 

	deliver_response($_GET['format'], $response);

?>
    