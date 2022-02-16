<?php
//Keys to Access
$access_token = 'cy8uWvKZ+vrFXXgLPWLDGYJHVb7M2V7t3GihlsWJlDrh7W+y9rK3P/x0Dt4iQcYOEwSi6MT60XgoS7+GffKaZiGiW9Up9ufD2oOL/3XVjBcZqxhI8voNmpzDpmH0KeE0Ern+ByTJz/c5DfQQqDlaZgdB04t89/1O/w1cDnyilFU=';
$content = file_get_contents('php://input');
$arr_json = json_decode($content, true);
$strurl = "https://api.line.me/v2/bot/message/reply";

//Header
$arrhdr = array();
$arrhdr[] = "Content-Type: application/json";
$arrhdr[] = "Authorization: Bearer {$Access_Token}";

//Condition to Send Message
if($arr_json['events'][0]['message']['text'] == "สวัสดีครับ" || 
   $arr_json['events'][0]['message']['text'] == "สวัสดีค่ะ" ||
   $arr_json['events'][0]['message']['text'] == "ว่าไง")
{
  $arrpostdata = array();
  $arrpostdata['replytoken'][0]['type'] = "text";
  $arrpostdata['message'][0]['text'] = "สวัสดีครับ มีอะไรให้รับใช้ครับ";
  $arrPostData['messages'][0]['originalContentUrl'] = 'https://github.com/swunews/LINE-BOT-PHP-Starter/blob/master/grief-and-loss.jpg?raw=true';
  $arrPostData['messages'][0]['previewImageUrl'] = 'https://github.com/swunews/LINE-BOT-PHP-Starter/blob/master/grief-and-loss_preview.jpg?raw=true';
}

//Post
$ch = curl_init();
curl_setopt($ch, curlopt_url, $strurl);
curl_setopt($ch, curlopt_header, false);
curl_setopt($ch, curlopt_post, true);
curl_setopt($ch, curlopt_httpheader, $arrhdr);
curl_setopt($ch, curlopt_postfields, json_encode($arrpostdata));
curl_setopt($ch, curlopt_returntransfer, true);
curl_setopt($ch, curlopt_ssl_verifypeer, false);
$result = curl_exec($ch);
curl_close($ch);
?>
