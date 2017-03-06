<?php
$url ='https://rest.nexmo.com/sms/json?api_key=79d76a2c&api_secret=d88015491304a62e&from=NEXMO&to=919619450064&text=Welcome+to+Nexmo' . http_build_query([
        'api_key' => 79d76a2c,
        'api_secret' => d88015491304a62e,
        'to' => 919619450064,
        'from' => Demo,
        'text' => 'Hello from Nexmo'
    ]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

 $decoded_response = json_decode($response, true);

  error_log('You sent ' . $decoded_response['message-count'] . ' messages.');

  foreach ( $decoded_response['messages'] as $message ) {
      if ($message['status'] == 0) {
          error_log("Success " . $message['message-id']);
      } else {
          error_log("Error {$message['status']} {$message['error-text']}");
      }
  }
?>