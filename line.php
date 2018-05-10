 <?php
  

function send_LINE($msg){
 $access_token = 'na4wsAj6QmDfw6vAt5AVFh1mwrM5pcQD0K9kCUYKrGrqs62O6rQgu+h7xu664kpls7SMfIxoVTDqx6O9QL6aGMcp+YY/PYpImWqIs08XPcb8BGbudNk83fEx9tGyYPW8TDU5pAHLHvCxbctWE9jmGgdB04t89/1O/w1cDnyilFU='; 

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

?>
