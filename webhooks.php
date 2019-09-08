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
$todayHH = date("H"); 
$todayMM = date("i"); 

$jsonFlex = [ //1
    "type" => "flex",
    "altText" => "ร้าน Avenue ยินดีต้อนรับค่ะ",
    "contents" => [   //2
      "type" => "bubble",
      "direction" => "ltr",
      "header" => [  //3
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
        "aspectRatio" => "150:150"    
          ],
          [
            "type" => "text",
            "text" => "Avenue",
            "align" => "center",
            "size" => "xxl",
            "weight" => "bold",
            "color" => "#000000"
          ],
          [
            "type" => "text",
            "text" => "Brew With Happiness",
            "align" => "center",
            "size" => "xl",
            "weight" => "bold",
            "color" => "#000000"
          ],
          [
            "type" => "text",
            "text" => "  ",
            "align" => "center",
            "size" => "md",
            "weight" => "bold",
            "color" => "#000000"
          ],
          [
            "type" => "text",
            "text" => "ยินดีให้บริการครับ",
            "align" => "center",
            "size" => "md",
            "weight" => "bold",
            "color" => "#000000"
          ],
          [
            "type" => "text",
            "text" => "สามารถติดตามข่าวสาร โปรโมชั่นดีๆ ได้ที่".$todayHH,
            "align" => "center",
            "size" => "md",
            "weight" => "bold",
            "color" => "#000000"
          ],
          [
            "type" => "text",
            "text" => $todayHH,
            "align" => "start",
            "size" => "sm",
            "color" => "#C1CDE0"
          ]
            
            
         
        ], 
        "paddingAll" => "0px"
      ],
      "body" => [
        "type" => "box",
        "layout" => "vertical",
        "contents" => [
          [
            "type" => "separator",
            "margin" => "lg",
            "color" => "#C3C3C3"
          ],
             [
        "type" => "button",
        "action" => [
          "type" => "uri",
          "label" => "Fackbook",
          "uri" => "https://www.facebook.com/Avenue.hdy"
        ],
        "gravity" => "center",
        "style" => "primary",
        "color" => "#4E7BED"
      ],
      [
            "type" => "separator",
            "margin" => "lg",
            "color" => "#C3C3C3"
          ],
      [
        "type" => "button",
        "action" => [
          "type" => "uri",
          "label" => "Instagram",
          "uri" => "https://www.instagram.com/avenue.hdy"
        ],
        "gravity" => "center",
        "style" => "primary",
        "color" => "#F07152"
      ]
      
          
        ]
      ]
        
    ] //2
    
    
  ];  //1
foreach ($client->parseEvents() as $event) {    
   if($todayHH == "17" ) {
                
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
