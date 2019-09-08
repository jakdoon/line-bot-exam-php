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

$jsonFlex = [
    "type" => "flex",
    "altText" => "Hello Flex Message",
    "contents" => [
      "type" => "bubble",
      "body" => [
        "type" => "box",
        "layout" => "vertical",
        "contents" => [
          [
            "type" => "box",
            "layout" => "horizontal",  
                 "contents" => [
                          "type" => "image",
                           "url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/A_small_cup_of_coffee.JPG/1200px-A_small_cup_of_coffee.JPG",
                            "size" => "full"
                            "aspectMode" => "cover",
                              "aspectRatio" => "150:196",
                              "gravity" => "center",
                             "flex" => 1          
                                ]
                                
                                    
          ],
          [
            "type" => "box",
            "layout" => "baseline",
            "margin" => "lg",
            "contents" => [
              [
                "type" => "text",
                "text" => "Merchant",
                "align" => "start",
                "color" => "#C3C3C3"
              ],
              [
                "type" => "text",
                "text" => "BTS 01",
                "align" => "end",
                "color" => "#000000"
              ]
            ]
          ],
          [
            "type" => "box",
            "layout" => "baseline",
            "margin" => "lg",
            "contents" => [
              [
                "type" => "text",
                "text" => "New balance",
                "color" => "#C3C3C3"
              ],
              [
                "type" => "text",
                "text" => "฿ 45.57",
                "align" => "end"
              ]
            ]
          ],
          [
            "type" => "separator",
            "margin" => "lg",
            "color" => "#C3C3C3"
          ]
        ]
      ],
      "footer" => [
        "type" => "box",
        "layout" => "horizontal",
        "contents" => [
          [
            "type" => "text",
            "text" => "View Details",
            "size" => "lg",
            "align" => "start",
            "color" => "#0084B6",
            "action" => [
              "type" => "uri",
              "label" => "View Details",
              "uri" => "https://google.co.th/"
            ]
          ]
        ]
      ]
    ]
  ];


foreach ($client->parseEvents() as $event) {    
   if($today == "08" ) {
                
    switch ($event['type']) {
        
        case 'beacon':
                
             $client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [$jsonFlex]
                         
                    ]);
             break;
            
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
            }
                
        } //end if
    
    
 
};
