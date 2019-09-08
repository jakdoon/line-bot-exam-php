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
      "direction" => "ltr",
      "header" => [
        "type" => "box",
        "layout" => "vertical",
        "contents" => [
          [
        "type" => "image",
        "url" => "https://www.nespresso.com/shared_res/mos/free_html/au/recipes-banners/img/caramelito-iced-coffee-recipe-menu.jpg",
        "size" => "full",
        "gravity" => "center",
        "aspectMode" => "cover",
        "position" => "relative",
        "aspectRatio" => "150:196",
        "paddingAll" => "0px"      
          ],
          [
            "type" => "text",
            "text" => "฿ 100.00",
            "size" => "3xl",
            "weight" => "bold",
            "color" => "#000000"
          ],
          [
            "type" => "text",
            "text" => "Rabbit Line Pay",
            "size" => "lg",
            "weight" => "bold",
            "color" => "#000000"
          ],
          [
            "type" => "text",
            "text" => "2019.02.14 21:47 (GMT+0700)",
            "size" => "xs",
            "color" => "#B2B2B2"
          ]
         
        ]
      ],
      "body" => [
        "type" => "box",
        "layout" => "vertical",
        "contents" => [
          [
            "type" => "separator",
            "color" => "#C3C3C3"
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
