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

date_default_timezone_set("Asia/Bangkok");
$today = date("d"); 



foreach ($client->parseEvents() as $event) {
     if($today == "09" ) {
                
    switch ($event['type']) {
        
        case 'beacon':
                
             $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [  
                                'type' => 'text',
                                'text' => 'วันนี้วันที่ 9 ครับ'
                                
                                //'type' => 'image',
                               // 'originalContentUrl' => 'http://personal.psu.edu/xqz5228/jpg.jpg',
                               // 'previewImageUrl' => 'http://personal.psu.edu/xqz5228/jpg.jpg'
                            ]
                        ]
                    ]);
             break;
            
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
            }
                
        } //end if
    
   if($today == "08" ) {
                
    switch ($event['type']) {
        
        case 'beacon':
                
             $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [  
                                'type' => 'text',
                                'text' => 'วันนี้วันที่ 8 ครับ'+ $today;
                                
                                //'type' => 'image',
                               // 'originalContentUrl' => 'http://personal.psu.edu/xqz5228/jpg.jpg',
                               // 'previewImageUrl' => 'http://personal.psu.edu/xqz5228/jpg.jpg'
                            ]
                        ]
                    ]);
             break;
            
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
            }
                
        } //end if
    
    
 
};
