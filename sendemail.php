<?php

// array holding allowed Origin domains
$allowedOrigins = array(
  '(http(s)://)?(www\.)?lisaseacat\.com'
);
 
if (isset($_SERVER['HTTP_ORIGIN']) && $_SERVER['HTTP_ORIGIN'] != '') {
  foreach ($allowedOrigins as $allowedOrigin) {
    if (preg_match('#' . $allowedOrigin . '#', $_SERVER['HTTP_ORIGIN'])) {
      header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
      header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
      header('Access-Control-Max-Age: 1000');
      header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
      break;
    }
  }
}

	// Contact
	$to = 'cpup22@gmail.com';
	$subject = 'Email from LisaSeacat.com';

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
		$name    = $_POST['name'];
		$from    = $_POST['email'];
		$message = $_POST['message'];

		if (mail($to, $subject, $message, $from)) {
			$result = array(
				'message' => 'Thanks for contacting us!',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else {
			$result = array(
				'message' => 'Sorry, something is wrong',
				'sendstatus' => 1
				);
			echo json_encode($result);
		}
	}

?>