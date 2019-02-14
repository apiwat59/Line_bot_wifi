 <?php
  

function send_LINE($msg){
 $access_token = 'LG03eF7ZQAq1J1vTACiQP2h/1W98nGw65OTkKwS13RzzlfDh5YGcUvTib6/pc7kFIQKQArO5MYvxjJSUwxNQwk+ToGcABsDYuFvsGuEUusIyvlMG8UZF5Xr4knytfILv8G7WMFutDUPu2WbOq0ueTgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'Userid' => 'U8778cbd46dce776a77e5abcfbf70ebc4',
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
