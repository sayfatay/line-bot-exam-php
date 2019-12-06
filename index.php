<?php
require "vendor/autoload.php";
$access_token = 'UHuhOvtaKhe9FpKkcqOLL132zDsTy84bhuC3JN1BiIdZhw06CFYTv+YBxRwmSZnRzR0dGpUIy3FQkTqJnylG7Z6udY0FXLRWpWXRDByjdt7sABwhge/C2Kbd00zHsV9VP3AfQsSMnciD5QAEyM/WgAdB04t89/1O/w1cDnyilFU=';
$channelSecret = '8df2c5e814e2234260110eb479dd68fe';
$idPush = '1653628392'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
