 <?php
  

function send_LINE($msg){
 $access_token = '4sXuyfiP4D3M5hRXVZC+yC/Sw/qyFYku2tSzua4JNESbF8Q6ei0Nwy3vkPsj8fqFztOhGWhLTLLEv4HtmHYVYBbPFYxl92CkMb/ni/SARw0/+KUab0FiKO+RC8c3a8joF1SHSsqDcFeeqhWHUyu87gdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      if ($messages == "test") {   
        'message' => {
        "id": "325708",
        "type": "location",
        "title": "my location",
        "address": "〒150-0002 東京都渋谷区渋谷２丁目２１−１",
        "latitude": 35.65910807942215,
        "longitude": 139.70372892916203
        }
      }
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ub95db7d216f23a9676ce61869d52e2a7',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
