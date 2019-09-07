<?php
/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
require_once('./LINEBotTiny.php');
$Type = $request['events'][0]['beacon']['type'];

$channelAccessToken = 'YOUx6X1kEbaLS5TynZm3x4nbd/now6MF4dSOUOIJnpNQJlQD5WKxDaJuII+9qWJlKDW8pMUx3y8VBfASSx/1LHwNdZjEtx4aHAshsp2xauoLPri836m6LlOBe+GX+ZSt8wS3SycE/96jW8gYEBCCKgdB04t89/1O/w1cDnyilFU=
';
$channelSecret = '5547fa3d2e827fe0d1c8f0305c2c29ab';
$client = new LINEBotTiny($channelAccessToken, $channelSecret);

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($channelAccessToken);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

foreach ($client->parseEvents() as $event) {
    
    $userto = $event['source'];
        
    switch ($event['type']) {
        case 'beacon':
        
              $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'sticker',
                                'packageId' => '11537',
                                'stickerId' => '52002745'
                            ]
                        ]
                    ]);
            


            $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
            $response = $bot->pushMessage($userto->userId], $textMessageBuilder);

            echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
            
            
             break;
            
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
    }
};
