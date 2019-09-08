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
      "type" => "bubble",
  "body" =>  [
    "type" =>  "box",
    "layout"=>  "vertical",
    "contents" =>  [
      [
        "type" =>  "box",
        "layout" =>  "horizontal",
        "contents" =>  [
          [
            "type" =>  "image",
            "url" =>  "https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/A_small_cup_of_coffee.JPG/1200px-A_small_cup_of_coffee.JPG",
            "size" =>  "full",
            "aspectMode" =>  "cover",
            "aspectRatio" =>  "150 => 196",
            "gravity" =>  "center",
            "flex" =>  1
          ],
          [
            "type" =>  "box",
            "layout" =>  "vertical",
            "contents" =>  [
              [
                "type" =>  "image",
                "url" =>  "https://www.nespresso.com/shared_res/mos/free_html/au/recipes-banners/img/caramelito-iced-coffee-recipe-menu.jpg",
                "size" =>  "full",
                "aspectMode" =>  "cover",
                "aspectRatio" =>  "150 => 98",
                "gravity" =>  "bottom"
              ],
              [
                "type" =>  "image",
                "url" =>  "https://athome.starbucks.com/sites/site.prod.athome.starbucks.com/files/2019-06/CoffeeFinder_ArticleHeader_Desktop_1176x712.jpg",
                "size" =>  "full",
                "aspectMode" =>  "cover",
                "aspectRatio" =>  "150 => 98",
                "gravity" =>  "center"
              ]
            ],
            "flex" =>  1
          ]
        ]
      ],
      [
        "type" =>  "box",
        "layout" =>  "horizontal",
        "contents" =>  [
          [
            "type" =>  "box",
            "layout" =>  "horizontal",
            "contents" =>  [
              [
                "type" =>  "image",
                "url" =>  "https://scontent.fbkk12-4.fna.fbcdn.net/v/t1.0-9/69124712_382950179051151_436505828464263168_n.jpg?_nc_cat=110&_nc_oc=AQmi6xYlPICphTnJuVeZgDjZf4apk0ZNo89sdp-tIu6uRM7oP8tZ53srBcake4CCwHc&_nc_ht=scontent.fbkk12-4.fna&oh=1cfaa2af3ec394b955bacc381edb316b&oe=5DFB08F6",
                "aspectMode" =>  "cover",
                "size" =>  "full",
                "margin" =>  "md",
                "align" =>  "center"
              ]
            ],
            "cornerRadius" =>  "100px",
            "width" =>  "95px",
            "height" =>  "95px"
          ],
          [
            "type" =>  "box",
            "layout" =>  "vertical",
            "contents" =>  [
              [
                "type" =>  "text",
                "contents" =>  [
                  [
                    "type" =>  "span",
                    "text" =>  "Avenue Hatyai",
                    "weight" =>  "bold",
                    "color" =>  "#000000",
                    "size" =>  "lg",
                    "style" =>  "normal"
                  ],
                  [
                    "type" =>  "span",
                    "text" =>  " "
                  ],
                  [
                    "type" =>  "span",
                    "text" =>  "Brew With Happiness",
                    "size" =>  "sm"
                  ]
                ],
                "size" =>  "sm",
                "wrap" =>  true
              ],
              [
                "type" =>  "box",
                "layout" =>  "baseline",
                "contents" =>  [
                  [
                    "type" =>  "text",
                    "text" =>  "1,140,753 Like",
                    "size" =>  "sm",
                    "color" =>  "#bcbcbc"
                  ]
                ],
                "spacing" =>  "sm",
                "margin" =>  "md"
              ]
            ]
          ]
        ],
        "spacing" =>  "xl",
        "paddingAll" =>  "20px"
      ]
    ],
    "paddingAll" =>  "0px"
  ],
  "footer" =>  [
    "type" =>  "box",
    "layout" =>  "vertical",
    "contents" =>  [
      [
        "type" =>  "button",
        "action" =>  [
          "type" =>  "uri",
          "label" =>  "Facebook",
          "uri" =>  "https://www.facebook.com/Avenue.hdy/"
        ],
        "position" =>  "relative",
        "height" =>  "md",
        "style" =>  "link",
        "gravity" =>  "center"
      ],
      [
        "type" =>  "separator"
      ],
      [
        "type" =>  "button",
        "action" =>  [
          "type" =>  "uri",
          "label" =>  "Instagram",
          "uri" =>  "https://www.instagram.com/avenue.hdy/?hl=en"
        ]
      ]
    ]
  ],
  "styles" =>  [
    "header" =>  [
      "separator" =>  false
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
