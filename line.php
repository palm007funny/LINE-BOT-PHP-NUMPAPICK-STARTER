 <?php

function after ($this, $inthat) {
    if (!is_bool(strpos($inthat, $this)))
      return substr($inthat, strpos($inthat,$this)+strlen($this));
 };
function before ($this, $inthat){
    return substr($inthat, 0, strpos($inthat, $this));
 };

function between ($this, $that, $inthat){
        return before ($that, after($this, $inthat));
};  

function send_LINE($msg){
  if($msg[0] == 'l' && $msg[1] == 'a' && $msg[2] == 't' ) {
  &lat = floatval(between('lat','lng',$string));
  &lng = floatval(between('lng','/',$string));
  $access_token = '4sXuyfiP4D3M5hRXVZC+yC/Sw/qyFYku2tSzua4JNESbF8Q6ei0Nwy3vkPsj8fqFztOhGWhLTLLEv4HtmHYVYBbPFYxl92CkMb/ni/SARw0/+KUab0FiKO+RC8c3a8joF1SHSsqDcFeeqhWHUyu87gdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'location',
        'title' => 'my_location',
        'address' => 'thailand',
        'latitude' => &lat,
        'longitude' => &lng
        //'text' => $text
      ];
  

      // Make a POST Request to Messaging API to reply to sender
     
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
  } else {
 $access_token = '4sXuyfiP4D3M5hRXVZC+yC/Sw/qyFYku2tSzua4JNESbF8Q6ei0Nwy3vkPsj8fqFztOhGWhLTLLEv4HtmHYVYBbPFYxl92CkMb/ni/SARw0/+KUab0FiKO+RC8c3a8joF1SHSsqDcFeeqhWHUyu87gdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
     
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
}

?>
