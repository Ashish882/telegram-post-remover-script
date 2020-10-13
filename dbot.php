<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$settings = [
'app_info' => [
'api_id' => 1234567,
'api_hash' => 'apihashsahffakdljk'
]];


$MadelineProto = new \danog\MadelineProto\API('index.madeline',$settings);
$me = $MadelineProto->start();



$str= "https://t.me/yourchannel/301
 https://t.me/yourchannel/302
 https://t.me/yourchannel/303
 https://t.me/yourchannel/304
 https://t.me/yourchannel/305
 https://t.me/yourchannel/306
 https://t.me/yourchannel/307
 https://t.me/yourchannel/308
 https://t.me/yourchannel/309
 https://t.me/yourchannel/312
 https://t.me/yourchannel/313
 https://t.me/yourchannel/314
 https://t.me/yourchannel315
 https://t.me/yourchannel/316
 https://t.me/yourchannel/317
";

if (preg_match_all('!\d+!', $str, $matches))
{
$count = count($matches[0]);
for($i=0;$i<$count;$i++){

$id = $matches[0][$i];


$messages = $MadelineProto->channels->deleteMessages(['channel' => @yourchannel, 'id' => [$id, $id], ]);

}

}






?>
