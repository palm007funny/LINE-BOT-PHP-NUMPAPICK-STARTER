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
  $lat = between('lat','lng',$msg);
  $lng = between('lng','/',$msg);
  $access_token = 'V/G/jNAUK4kYbKnN4egxGrc6bCG/MR9fOaGeEGfX8l6wIHy01m6s601ZKzipOnQjkho2M9FRf8yDtl+ZxdIW1HjTVMGYNcBGallFw9Js1T/rZ0CPOCS4S19curEwz1Bjb9UilfCzFpNi3B45SL6WwQdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'location',
        'title' => 'my_location',
        'address' => 'thailand',
        'latitude' => $lat,
        'longitude' => $lng
        //'text' => $text
      ];
  

      // Make a POST Request to Messaging API to reply to sender
     
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        //'to' => 'Ub95db7d216f23a9676ce61869d52e2a7',
        'to' => 'U35a7cdc226bf814183430f2d34d6285d',
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
 $access_token = 'V/G/jNAUK4kYbKnN4egxGrc6bCG/MR9fOaGeEGfX8l6wIHy01m6s601ZKzipOnQjkho2M9FRf8yDtl+ZxdIW1HjTVMGYNcBGallFw9Js1T/rZ0CPOCS4S19curEwz1Bjb9UilfCzFpNi3B45SL6WwQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
     
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U35a7cdc226bf814183430f2d34d6285d',
        //'to' => 'Ub95db7d216f23a9676ce61869d52e2a7',
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
