<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>قيصر الشرق</title>
        <link rel="icon" type="image/png" href="images/favicon.png" sizes="128×128">
        <meta id="" name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no">
        <link rel="stylesheet" href="css-3.4.113/reset-min.css"/>
        <link rel="stylesheet" href="css-3.4.113/fonts-min.css"/>
        <link rel="stylesheet" href="css-3.4.113/base.css"/>
        <link rel="stylesheet" href="css-3.4.113/city.css"/>
        <link rel="stylesheet" href="css-3.4.113/world.css"/>
        <link rel="stylesheet" href="css-3.4.113/lastStyle.css"/>
        <link rel="stylesheet" href="css-3.4.113/lastOfLast.css"/>
        <link rel="stylesheet" href="css-3.4.113/finishing.css"/>
        <link rel="stylesheet" href="css-3.4.113/tooltips.css"/>
        <link rel="stylesheet" href="css-3.4.113/animation.css"/>
        <link rel="stylesheet" href="css-3.4.113/hero.css"/>
        <link rel="stylesheet" href="css-3.4.113/godPoints.css"/>
        <link rel="stylesheet" href="css-3.4.113/ui.css"/>
        <link rel="stylesheet" href="css-3.4.113/team.css"/>
        <!-- <link rel="stylesheet" href="css/loader.css"/>-->
        <!--<script src="js/loader.js"></script>-->

    </head>
    <body>

        <div id="loader-layer">
            <div  class="logo">
                <img  src="images/icons/Logo-wow.png"/>
            </div>
            <div id="loader-grab">

            </div>
            <div id="load-bar">
                <div>

                </div>
            </div>
            <div id="load-percent">
                0%
            </div>
        </div>
                <div id="menu-bar">
            <div class="content-wrapper flex">
                <div class="left flex">
                    <div class="left-half flex">
                        <div class="wrapper-icon">
                            <div class="icon" id="ToggelFullSrc" style="background-image: url(images/btns/withBg/buttonFullScreenOn.png)"></div>
                        </div>
                        <div class="wrapper-icon">
                           <div class="icon" id="ToggelSound" style="background-image: url(images/btns/withBg/buttonSoundOptions.png)"></div>
                        </div>
                        <div class="wrapper-icon">
                            <div class="icon" id="OpenSettingsBox" style="background-image: url(images/btns/withBg/buttonOptions.png)"></div>
                        </div>
                    </div>
                    <div class="right-half">
                        <div id="server-bing">
                            Ping:  <span class="stroke"></span>
                        </div>
                    </div>
                </div>
                <div class="mid" style="position: absolute;right: 50%;margin-right: -150px;">
                    <div id="server-name">
                        <div class="name">العقرب</div>
                        <div class="time"></div>
                    </div>
                </div>
                <div id="global-menu-list" class="right">
                    
                </div>
            </div>
        </div>
        <div id="global-announce" data-statge="0" data-now="6000">
            <div class="wrapper">
                <div class="text"><span class="warning">مبروك!</span>  لقد  اصبح محمد  المسيطر على  عاصمة المشاة</div>
            </div>
        </div>
        <div id="city-data">
            <div class="name">1</div>
            <div class="coords">[ 239 , 141 ]</div>
        </div>

        <div id="luck-wheel-btn">
            <div class="track"></div>
        </div>
        
        
        <div id="godGateBtnWrapper">
            <div class="fire"></div>
            <button title="بوبات الالهة"></button>
            <div class="fire-tail"></div>
        </div>
        <div id="helpGateBtnWrapper">
            <button title="بوبات الالهة"></button>
            <div class="fire-tail"></div>
        </div>
	    <div id="ArenaChallangeBtnWrapper">
            <button></button>
            <div class="fire-tail"></div>
        </div>
        <div id="PlayerTeamWrapper">
            <button class="NoTeamIcon"></button>
        </div>
        <div class="profile" id="player-profile">
            <div id="p-provile-slider">
                <img src="images/btns/show_hide.png">
            </div>
            <div class="left">
                <div id="matrial-box">
                    <button></button>
                </div>
                <div id="smallMap-icon">
                    <img src="images/icons/world_map.png">
                </div>
                <div class="avatar">
                    <div class="avatar-img">
                        <img ondragstart="return false;" src="images/hero/faceA5.jpg">
                    </div>
                </div>
                <div class="avatar-name">
                    <h1> 
                        الكينج                    </h1>
                </div>
            </div>
            <div class="list_of_data">
                <ul>
                    <li id="player_prestige">
                        <img ondragstart="return false;" src="images/icons/prestige.png"> 
                        <span>50</span>
                    </li>
                    <li id="player_title">
                        <img ondragstart="return false;" src="images/icons/rank-player.png"> 
                        <span></span>
                    </li>
                    <li id="player_rank">
                        <img ondragstart="return false;" src="images/icons/stat_streak.png"> 
                        <span>1523</span>
                    </li>
                    <li  id="player_guild" id_guild = "">
                        <img ondragstart="return false;" src="images/icons/guild.png"> 
                        <span></span>
                    </li>
                    <li id="player_honor">
                        <img  ondragstart="return false;" src="images/icons/honor.png"> 
                        <span>14</span>
                    </li>
                    <li id="player_gold">
                        <img  ondragstart="return false;" src="images/icons/gold.png"> 
                        <span>0</span>
                    </li>
                </ul>
            </div>

        </div>
        <div id="city_col">
            <div id="player-city-list">
                <ul>

                </ul>
            </div>
            <button id="WorldCity" disabled="disabled" data-view="city">
                العالم
            </button>
        </div>

        <div id="city-profile">
            <div id="city-profile-tooltipe">

            </div>
            <div id="city-profile-slider">
                <img src="images/btns/show_hide.png"/>
            </div>

            <div class="upper_nave_bar">
                <ul>
                    <li show='default'>
                        <img ondragstart="return false;" src="images/btns/menu_res.png"/>
                    </li>
                    <li show='hero'>
                        <img ondragstart="return false;" src="images/btns/menu_hero.png"/>
                    </li>
                    <li show='army'>
                        <img ondragstart="return false;" src="images/btns/menu_mill.png"/>
                    </li>
                    <li show='wild'>
                        <img  ondragstart="return false;" src="images/btns/menu_bar.png"/>
                    </li>
                </ul>
            </div>
            <div class="page_content" data-view="resource">

            </div>

        </div>

        <div id="player_stat_bar">
            <ul></ul>
        </div>

        <div id="current-tasks">
            <div id="build-tsk">
             


            </div>
            <div id="study-tsk">
               
                
            </div>
            <div id="jop-tsk">
            </div>
        </div>
        
        <div id="chat-box" class="bg-general">
            <div id="navigator-bar" class="bg-btn-blu">
                <div id="UPDOWN-chat">
                    <img src="images/btns/show_hide.png"/>
                </div>
                <div id="hide-show" style="display: none">
                    <div id="nav-btn" class="flex">
                        <input type="checkbox" id="FastNav" checked="true" style="margin-right: 10px;">
                        <button class="full-btn full-btn-3x" style="">اذهب الى </button>
                        
                    </div>

                    <label class="pull-R">Y</label>
                    <div id="y_coord-input" class="coords-input">
                        <input type="text" class="only_num input" min="0"  max="499"/>
                    </div>
                    <label class="pull-R">X</label>
                    <div id="x_coord-input" class="coords-input ">
                        <input type="text" class="only_num input" min="0" max="499"/>
                    </div>

                </div>
                <div id="active-chat-rooms">
                    <ul>

                    </ul>
                </div>
            </div>
            <div id="drop-down-list-wrapper">

            </div>
            <div style="height: 20px;"></div>
            <div id="chat-area" data-width="x">
                <div id="chat-icons">
                    <ul>
                        <li data-show="anounce">
                            <img src="images/icons/chat/annonces.png"/>
                        </li>
                        <li class="active" data-show="world">
                            <img src="images/icons/chat/world.png"/>
                        </li>
                        <li data-show="guild">
                            <img src="images/icons/chat/guild.png"/>
                        </li>
                        <li data-show="private">
                            <img src="images/icons/chat/private.png"/>
                        </li>
                    </ul>
                </div>
                <div id="msg-area">
                </div>
            </div>
            <div id="input-area" class="flex">
                <div class="quote-wrapper"></div>
                <div id="expand-chat">
                    <button class=" full-btn full-btn-3x send pull-R">
                        <img src="images/btns/buttonGoHome.png">
                    </button>
                    <button class="full-btn full-btn-3x pull-L expand">
                        <i></i>
                        <i></i>
                        <i></i>
                    </button>
                </div>
                <div id="input-chat">
                    <div class="input-area flex">
                        <div class="input-warpper">
                            <input data-pastable="true"  class="input chat-input"/>
                        </div>
                        <div class="emjoi-icon">
                            <button class="full-btn-3x flex">
                                <img src="images/icons/emjoi.png">
                            </button>
                        </div>
                    </div>
                </div>
                <div id="msg-for">
                    <button id="chat-to" class="full-btn full-btn-3x" data-chat-to="world">
                        <img src="images/icons/chat/world.png">
                        <label>العالم</label>
                    </button>
                </div>
            </div>
        </div>
        <div id="GameWindow"></div>
        <script>
            var player             = {"id_user":75022,"id_player":204169,"user_group":0,"prestige":50,"honor":14,"gold":0,"avatar":14,"guild":null,"id_guild":null,"name":"\u0627\u0644\u0643\u064a\u0646\u062c","lang":null,"city_flag":"0","porm":0,"chat_panne":0,"online":1,"last_seen":0,"panned":0,"p_token":"$2y$10$uVCVCXuUrBGuYQWTQLYJBudc87pa6LggNijmOPOPAsR7gKOJg.xAe","rank":1523,"guild_data":false};
            const  BASE_ASSET_BATH = "";
            const  ID_PLAYER       = 204169;
            var  TOKEN             = "621412-937094-179357-581306-634203";
            const  SERVER_ID       = 1;
            const  BASE_URL      = "https://web.game.com";
            const  API_URL       = "https://app.game.com";
            const  WS_PORT       = 8081;
            const  WS_HOST       = "ws.game.com";
            const  ID_FIRST_CITY = 2041681;
            const  JS_VERSION    = "-3.4.113";
            var PLAYER_NOTIF     = {"msg_in":0,"msg_diff":0,"msg_report":0,"spy_report":0,"battel_number":0,"hero_in_battel":0,"hero_back":0,"spy_task":0};
            var isMobile         = false; //initiate as false
			var EXAMINE_PLAYER_MUTE = false;
            // device detection
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
                    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
                isMobile = true;
            };
            
            
        </script>
        <!--
        <script type="text/javascript" src="js-3.4.113/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js-3.4.113/lib/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="js-3.4.113/lib/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js-3.4.113/lib/phaser.min.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/translate.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/userLan.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/navBar.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/LPreLoad.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/LBaseData.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/base.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/boxWrapper.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/rank.js"></script>
        <script type="text/javascript" src="js-3.4.113/player.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/province.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/city.js"></script>
        <script type="text/javascript" src="js-3.4.113/fullscr.js"></script>
        <script type="text/javascript" src="js-3.4.113/alert.js"></script>
        <script type="text/javascript" src="js-3.4.113/city/city_profile.js"></script>
        <script type="text/javascript" src="js-3.4.113/city/army_building.js"></script>
        <script type="text/javascript" src="js-3.4.113/interatction.js"></script>
        <script type="text/javascript" src="js-3.4.113/base/schadular.js"></script>
        <script type="text/javascript" src="js-3.4.113/building.js"></script>
        <script type="text/javascript" src="js-3.4.113/city/cityBuilding.js"></script>
        <script type="text/javascript" src="js-3.4.113/city/PlayerHero.js"></script>
        <script type="text/javascript" src="js-3.4.113/army.js"></script>
        <script type="text/javascript" src="js-3.4.113/hero.js"></script>
        <script type="text/javascript" src="js-3.4.113/heroArmy.js"></script>
        <script type="text/javascript" src="js-3.4.113/matrial.js"></script>
        <script type="text/javascript" src="js-3.4.113/LItemUse.js"></script>
        <script type="text/javascript" src="js-3.4.113/education.js"></script>
        <script type="text/javascript" src="js-3.4.113/menu-list/menuList.js"></script>
        <script type="text/javascript" src="js-3.4.113/menu-list/exchange.js"></script>
        <script type="text/javascript" src="js-3.4.113/menu-list/battelReport.js"></script>
        <script type="text/javascript" src="js-3.4.113/menu-list/dominant.js"></script>
        <script type="text/javascript" src="js-3.4.113/menu-list/LItem.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/server.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/wsBattel.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/chat.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/battel.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/guild.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/mail.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/hero.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/player.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/serverAnnounce.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/city.js"></script>
        <script type="text/javascript" src="js-3.4.113/ws/lib/Base.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/worldUnit.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/worldCampBox.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/WorldUnitIcon.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/WorldUnitArmy.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/worldUtil.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/worldUnitPrize.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/worldMap.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/WorldMapBattel.js"></script>
        <script type="text/javascript" src="js-3.4.113/world/world.js"></script>
        <script type="text/javascript" src="js-3.4.113/battel.js"></script>
        <script type="text/javascript" src="js-3.4.113/guild.js"></script>
        <script type="text/javascript" src="js-3.4.113/message.js"></script>
        <script type="text/javascript" src="js-3.4.113/quest.js"></script>
        <script type="text/javascript" src="js-3.4.113/lastUtil.js"></script>
        <script type="text/javascript" src="js-3.4.113/tools/luck_wheel.js"></script>
        <script type="text/javascript" src="js-3.4.113/tools/market.js"></script>
        <script type="text/javascript" src="js-3.4.113/tools/palace.js"></script>
        <script type="text/javascript" src="js-3.4.113/tools/spy.js"></script>
        <script type="text/javascript" src="js-3.4.113/navigate.js"></script>
        <script type="text/javascript" src="js-3.4.113/animation.js"></script>
        <script type="text/javascript" src="js-3.4.113/equipment.js"></script>
        <script type="text/javascript" src="js-3.4.113/tools/tradeCenter.js"></script>
        <script type="text/javascript" src="js-3.4.113/tools/jop.js"></script>
        <script type="text/javascript" src="js-3.4.113/battel/joinAttack.js"></script>
        <script type="text/javascript" src="js-3.4.113/battel/battelField.js"></script>
        <script type="text/javascript" src="js-3.4.113/feature/godGate.js"></script>
        <script type="text/javascript" src="js-3.4.113/feature/setting.js"></script>
        <script type="text/javascript" src="js-3.4.113/feature/emjoi.js"></script>
        <script type="text/javascript" src="js-3.4.113/feature/contribute.js"></script>
        <script type="text/javascript" src="js-3.4.113/feature/arenaChallange.js"></script>
        <script type="text/javascript" src="js-3.4.113/ui/ui.js"></script>

-->  <script type="text/javascript" src="js-3.4.113/lib/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js-3.4.113/lib/jquery.nicescroll.min.js"></script>
            <script type="text/javascript" src="js-3.4.113/lib/jquery-ui.min.js"></script>
            <script type="text/javascript" src="js-3.4.113/lib/phaser.min.js"></script>
            <script type="text/javascript" src="js-3.4.113/obfuscated.js"></script>
        
          </body>
</html>