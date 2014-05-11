<?php
echo '
<style type="text/css">
html, body, #container { height: 100%; margin: 0; padding: 0; }
body > #container { height: auto; min-height: 100%; }
#content { padding-bottom: 3em; }
#footer { clear: both; position: relative; z-index: 10; height: 3em; margin-top: 1em; }
body { font: .75em/normal "Lucida Sans", "Lucida Grande", sans-serif; }
a, a:link, a:visited { color: #c6762f; text-decoration: underoline; }
a:hover, a:focus {  }
p { margin-bottom: 1em; }
#about { padding: 50px; } 
#footer { 
background-color: black; color: white; font-size: 200%; text-align: center; line-height: 3em; 
}

</style>
<style type="text/css">

*{margin:0;padding:0}
body{background-color:#0C0C0C;font-family:verdana,arial,tahoma,sans-serif;font-size:10pt;margin:0}
h1{font-size:18pt}
h2{font-size:14pt}
h3{font-size:12pt;text-align:center}
h4{font-size:10pt;text-align:center}
h5{font-size:7pt}
h6{font-size:5pt}
a:hover{text-decoration:none}
.ralign{text-align:right}
.lalign{text-align:left}
.rfloat{float:right}
.mstatlabel{width:240px}
.mstatdisp{width:90px}
.tstatlabel{width:170px;vertical-align:top}
.tstatbigdisp{width:110px}
.tstatdisp{width:75px}
.tribeinfolabel{width:160px;vertical-align:top}
.tribeinfodisp{width:120px}
.cfmbot_command{background-color:#E0E0E0;white-space:nowrap;font-family:"courier new";}
#container{color:#666;overflow:visible;width:970px;margin:0 auto;padding:0;}
#header-wrap{background-color:#000;border-bottom:1px solid #232323;height:120px;margin:0;padding:0;}
#navbar{background-color:#101010;height:50px;margin:0;padding:0;}
#logo{display:block;height:120px;line-height:120px;vertical-align:middle;}
#logo img{border:0 none;display:block;margin:0 auto;vertical-align:middle;}
a:link,a:hover,a:active,a:visited{color:#0387DB;text-decoration:none;padding:0;}
table{border:1px solid #232323;margin:0 auto;}
thead td{background-color:#0C0C0C;color:#0387DB;font-size:14px;font-weight:700;padding:3px;}
.lb1,.lb2{background-color:#232323;color:#191C1E!important;cursor:pointer;font-size:12px;padding:1px;}
table.mdirectorytable td.lb1 td,table.mdirectorytable td.lb1 td{color:#191C1E!important;}
tr.lb1 td,tr.lb2 td{color:#999;font-size:13px;padding:3px;}
tr.lb1 td span,tr.lb2 td span{color:#999;}
.lb1 a,.lb1 a:link,.lb1 a:hover,.lb1 a:active,.lb1 a:visited,.lb2 a,.lb2 a:link,.lb2 a:hover,.lb2 a:active,.lb2 a:visited{color:#999!important;}
.lb1 a:hover,.lb1 a:active,.lb2 a:hover,.lb2:active{text-decoration:underline;}
.lb2{background-color:#191919;}
.lb1:hover,.lb2:hover{background-color:#3C3C3C;}
.c1{width:5px;white-space:nowrap;}
.c2{text-align:right;width:70px;}
.c3{text-align:right;width:70px;}
.c4{text-align:right;width:65px;}
.c6{text-align:right;width:60px;}
.c10{text-align:right;width:75px;}
.c5,.c9{text-align:right;width:100px;}
.c7,.c8{text-align:right;width:105px;}
.t1{width:65px;}
.t3{width:65px;text-align:right;}
.t4{text-align:right;width:70px;}
.t5{text-align:right;width:65px;}
.t7{text-align:right;width:60px;}
.t6,.t10{text-align:right;width:100px;}
.t8,.t9{text-align:right;width:105px;}
#footer {clear:both}
#footer p{text-align:center;color:#666;margin:0;padding:5px 0 20px;}
#profile h1{color:#FFF;font-family:tfm,verdana;padding-top:15px;text-align:center;text-shadow:0 0 20px #06CCFF;margin:0;}
#triberanks table, #register_table table{border:medium none;margin:0 auto;}
#profile fieldset{border:2px solid #232323;margin:0 auto;padding:0 8px 5px;}
p{padding-top:15px;}
.fullscreen{padding-bottom:20px;padding-top:30px;text-align:center;margin:3px;}
.pagination{padding-bottom:20px;padding-top:20px;text-align:center;margin:3px;}
.pagination a{border:1px solid #232323;color:#0078FF;text-decoration:none;margin:2px;padding:2px 5px;background-color:#000014}
.pagination a:hover,div.pagination a:active{border:1px solid #555;}
.pagination c{background-color:#2E6AB1;border:1px solid #232323;color:#FFF;font-weight:700;margin:2px;padding:2px 5px;}
.pagination c:hover,div.pagination a:active{border:1px solid #555;}
.pagination span.disabled{border:1px solid #232323;color:#888;margin:2px;padding:2px 5px;background-color:#000014}
#faq{margin:0 auto;width:85%;}
img.center{border:2px solid #232323;display:block;margin:0 auto;max-width:300px;max-height:150px;padding:4px;}
img.avatar{border:2px solid #232323;display:block;margin:0 auto;max-width:200px;max-height:200px;padding:4px;}
.centered{margin:0 auto;padding-top:10px;text-align:center;}
.servers{padding-bottom:5px;padding-top:15px;text-align:right;vertical-align:middle;}
.servers span{background-image:url(http://spicyemu.formice.com/images/sprites/community-sprite4.png);background-repeat:no-repeat;width:16px;height:13px;display:inline-block;margin-right:10px;}
.lang{padding-bottom:5px;padding-top:15px;text-align:center;vertical-align:middle;}
.selected{border:2px solid #E03FB1;}
#heading{border-bottom:3px solid #232323;color:#666;font-size:18px;margin-left:0;min-height:16px;padding-bottom:3px;width:100%;}
@font-face{font-family:tfm;src:url(http://spicyemu.formice.com/css/tfm.ttf);}
#sidebar{float:left;overflow:hidden;width:255px;text-align:left;margin:5px 0 0 40px;padding-top:10px;}
#content{float:right;overflow:hidden;padding-left:15px;width:620px;min-height:484px;margin:10px 12px 14px 14px;}
#content h1{color:#FFF;font-family:tfm,verdana;padding-top:5px;text-align:left;text-shadow:0 0 20px #06CCFF;display:inline;margin:0;}
#content h3{font-size:11pt;padding-top:10px;text-align:right;margin:0;}
#content h4{font-size:10pt;padding-top:10px;text-align:left;display:inline;}
#sidebar h4{padding:5px 0 0px;}
#sidebar h3{font-size:11pt;}
#sidebar small{color:#969696;font-size:11px;margin-top:5px;}
#sidebar p{padding:0 0 5px;}
#info{margin:0 20px;}
#info span{background-image:url(http://spicyemu.formice.com/images/sprites/community-sprite4.png);background-repeat:no-repeat;width:16px;height:13px;display:inline-block;}
#search h3,.c2{text-align:left;}
#navwidth,#header{margin:0 auto;max-width:970px;min-width:970px;}
.navitem{font:bold 17px Trebuchet MS,Verdana,sans-serif;background-color:#101010;width:100%;height:50px;}
.navitem ul{margin:0;padding:0;list-style-type:none;z-index:99999999;}
.navitem ul li{position:relative;display:inline;float:left;display:block;margin:0;padding:0}
.navitem ul li a{color:#E03FB1;display:block;overflow:hidden;line-height:50px;margin:0;padding:0 16px;background-color:#101010;border-right: 1px solid #232323;}
* html .navitem ul li a{display:inline-block}
.navitem ul li a:hover{background-color:#232323}
.navitem ul li ul{position:absolute; left:0; display:block; visibility:hidden}
.navitem ul li ul li{display:list-item; float:none}
.navitem ul li ul li ul{top:0}
.navitem ul li ul li a{font:bold 15px Trebuchet MS,Verdana,sans-serif; width:160px; padding:5px; margin:0; border-top-width:0; line-height:40px; padding:0 8px; border-bottom:1px solid #232323}
.navitem ul li ul li a:hover{background-color:#232323; color:#E03FB1}
.left-border{border-left: 1px solid #232323;}
#interview {width: 870px; margin-right: auto; margin-left: auto;}
#interview h2 {text-align: center;}
.interview_comments{float:right;margin-right:20px;}
.blockhead{background:url(http://spicyemu.formice.com/images/newbtn_middle.png) repeat-x scroll 0 0 #101010;border:1px solid #232323;color:#e03fb1;font:14px Tahoma,Calibri,Verdana;font-weight:700;text-align:left!important;padding:4px 10px}
.blockhead a{color:#E03FB1}
.blockitem{clear:both;min-height:80px;position:relative;padding:0 10px 5px}
.blockbody{background:none no-repeat scroll 0 0 #202020;padding:10px 0}
#interview li{list-style:none outside none}
.blockitem .avatarlink{border:none}
img.int_avatar{border:1px solid #333;padding:2px}
.blocksubhead{background:none repeat-x scroll 0 0 #171717;border-top:1px solid #101010;text-align:left;padding:4px 10px}
.int_table{margin-right:0;margin-left:0;border:none;text-align:center;padding:5px}
table.int_table td{padding:3px}
table.reg_table td{padding:7px}
.centered2{margin:0 auto;text-align:center;padding:5px 0}
ol.commentlist{list-style-type:none;width:85%;margin:10px auto 0;padding:0}
ol.commentlist li{background:transparent url(http://spicyemu.formice.com/images/clbg.png);list-style-type:none;overflow:auto;margin:10px 0;padding:10px 0 10px 10px}
ol.commentlist li p{line-height:14pt;width:600px;overflow:hidden;margin:6px 0;padding:0 12px 0 0}
ol.commentlist a{color:#0687db;text-decoration:none}
ol.commentlist table{border:0;float:left;font-size:11px;margin:0}
ol.commentlist .date{color:#0687db;font-size:8pt}
.forum-avatar{float:left;display:block;border:3px solid #0C0C0C;outline:2px solid #232323;margin:5px 0}
div.reply{float:right;font-size:11px;margin:0 15px 0 0;padding:7px 0 0 10px;text-align:right}
cite{color:#e03fb1;font-family:Trebuchet MS,sans-serif;font-size:12pt;font-weight:700;font-style:normal;text-align:center}
.buttons{text-align:center;margin-top:15px}
.rating{float:right;margin-right:15px;font-size:11px;color:#666}
.newtopic-button{background:url(http://spicyemu.formice.com/images/newbtn_middle.png) repeat-x scroll left top #101010;border:0 none;clear:right;color:#e03fb1!important;display:block;float:left;font:14px Arial,sans-serif;padding:5px 15px!important}
.newtopic-button span{display:inline;font-size:15px;font-weight:700}
#wrap{font-size:11px;min-width:650px;width:900px;direction:ltr;margin:0 auto;padding:0 20px}
.forumbg{clear:both;background-color:#090909;border:#232323 1px solid;margin-top:50px;padding:5px 5px 3px}
dl.icon dt{padding-left:10px;padding-right:40px}
ul.topiclist li{display:block;list-style-type:none;color:#666;margin:0}
ul.topiclist dl{position:relative;height:1%;overflow:hidden}
ul.topiclist li.row dl{padding-top:3px}
ul.topiclist dt{display:block;float:left;width:50%;font-size:1.1em;overflow:hidden}
ul.topiclist dd{display:block;float:left;border-left:1px solid #000;border-left-color:#000;padding:4px 0}
ul.topiclist dfn{position:absolute;left:-999px;width:990px}
ul.topiclist li.row dt a.subforum{background-image:none;background-position:0 50%;background-repeat:no-repeat;position:relative;white-space:nowrap;padding:0 0 0 12px}
.username-coloured{font-weight:700;color:#e03fb1!important;display:inline!important;padding:0!important}
a.topictitle{font-size:1.1em;font-weight:700;color:#0387bd;text-decoration:none}
li.header dt,li.header dd{line-height:1em;border-left-width:0;padding-top:2px;padding-bottom:2px;font-size:14px;color:#0387DB;font-weight:700;margin:2px 0 4px}
dd.posts,dd.topics,dd.views{width:8%;text-align:center;line-height:2.2em;font-size:1.2em}
li.row{border-top-color:#000;border-bottom-color:#000;background-color:#191919;border-top:1px solid #000;border-bottom:1px solid #000}
dl.icon{min-height:35px;height:auto!important}
img{border-width:0}
dd.lastpost{width:25%;font-size:1.1em}
dd.lastpost span,ul.topiclist ul.topiclist dd.info span,ul.topiclist dd.time span,dd.redirect span,dd.moderation span{display:block;padding-left:5px}
li.header dl.icon{min-height:0}
.new-topic{margin-top:15px}
.bad-post{color:#444!important}
.post-container{min-height:100px;float:right;width:640px}
hr.signature{color:#333;background-color:#333;float:right;width:97%;margin:10px 15px 5px 0}
ol.commentlist li ul li{list-style-type:disc;list-style-position: inside;margin:0 0 0 30px;padding:0;background:none;overflow:visible}
ol.commentlist li ol li{list-style-type:decimal;list-style-position: inside;margin:0 0 0 30px;padding:0;background:none;overflow:visible}
blockquote{background-color:#1f1f1f;margin:10px 15px 10px 5px!important;border: 1px solid #171717;padding:10px!important}
.postprofile{display:inline;float:left;min-height:96px;width:170px;margin:0}
.postprofile dd{line-height:1.2em;margin-left:5px;font-size:8pt}
.postprofile dt{line-height:1.2em;margin-left:5px;display:table-row}
table.visualizer{text-align:center;border:medium none;width:100%}
table.visualizer td{padding:4px}
.num{text-align:right}
.quote_comment_form {background-color: #1F1F1F;margin: 10px 15px 10px 5px !important;padding: 10px 15px !important}
.homeblock{padding:0 15px 0}
#homewrap {width:100%}
#homewrap li{list-style:none outside none;}
.mainblock {float:left;width:32%;padding-right:15px;padding-bottom:15px}
.mainblockright {float:left;width:32%;padding-bottom:15px}
#facebox{position:absolute;top:0;left:0;z-index:100;text-align:left}
#facebox .content{background:none repeat scroll 0 0 rgba(35,35,35,0.75);font-family:"Trebuchet MS",Helvetica,sans-serif;width:500px;border:20px solid rgba(10,10,10,0.25);border-radius:20px 20px 20px 20px;color:#FFF;padding:25px}
#facebox .heading{background:none repeat scroll 0 0 #B40000;border:1px solid #640000;border-radius:5px 5px 5px 5px;font-size:12pt;font-weight:700;margin-bottom:10px;background-color:#B40000;border-top-left-radius:5px;border-top-right-radius:5px;color:#FFF;padding:5px 10px}
#facebox .popup .success{background:none repeat scroll 0 0 #0160cc;border:1px solid #0057b9;background-color:#0160cc}
#facebox .content > p:first-child{margin-top:0}
#facebox .content > p:last-child{margin-bottom:0}
#facebox .close{cursor:pointer;height:35px;position:absolute;right:4px;top:4px;width:35px}
#facebox .close img{opacity:0.3}
#facebox .close:hover img{opacity:1.0}
#facebox img{border:0;margin:0}
#facebox_overlay{position:fixed;top:0;left:0;height:100%;width:100%}
#facebox ul li{line-height:2;list-style:disc inside none}
.facebox_hide{z-index:-100}
.facebox_overlayBG{background-color:#000;z-index:99}
#facebox .loading,#facebox .image{text-align:center}
.fs_table{border:none;}
.fs_table td{padding:5px}
.fs_table span{background-image:url(http://spicyemu.formice.com/images/sprites/community-sprite4.png);background-repeat:no-repeat;width:16px;height:13px;display:inline-block;}
.visualizer span{background-image:url(http://spicyemu.formice.com/images/sprites/graph-sprite.png);background-repeat:no-repeat;width:128px;height:128px;display:inline-block;}
legend{color:#666}
#cfm_banner_left{background-position:0 0;}
#cfm_banner_left_sourdough{background-position:0 -165px;}
#cfm_banner_right{background-position:0 -330px;}
#cfm_banner_right_sourdough{background-position:0 -495px;}
.cfm_banner{float:left;display:inline;background:url(http://spicyemu.formice.com/images/sprites/banner-sprite.png) no-repeat;width:242px;height:115px;}
.cfm_banner_ad{float:left;padding-top:10px;display:inline;}
#lang_select{float:right;vertical-align:bottom;}
#lang_select span{background-image:url(http://spicyemu.formice.com/images/sprites/language-sprite4.png);background-repeat:no-repeat;width:14px;height:11px;margin-right:10px;display:inline-block;}
#lang_en{background-position: 0 -488px;}
#lang_br{background-position: 0 0;}
#lang_tr{background-position: 0 -427px;}
#lang_fr{background-position: 0 -183px;}
#lang_ru{background-position: 0 -366px;}
#lang_cn{background-position: 0 -61px;}
#lang_es{background-position: 0 -122px;}
#lang_nl{background-position: 0 -244px;}
#lang_no{background-position: 0 -305px;}
#lang_hu{background-position: 0 -613px;} 
#lang_pl{background-position: 0 -674px;}
#lang_id{background-position: 0 -735px;} 
#lang_ro{background-position: 0 -801px;} 
.comm_all{background-position: 0 0;}
.comm_br{background-position: 0 -63px;} 
.comm_cn{background-position: 0 -126px;}
.comm_en{background-position: 0 -189px;}
.comm_es{background-position: 0 -252px;}
.comm_fr{background-position: 0 -315px;}
.comm_ro{background-position: 0 -378px;}
.comm_nl{background-position: 0 -441px;}
.comm_no{background-position: 0 -504px;}
.comm_ru{background-position: 0 -567px;}
.comm_tr{background-position: 0 -630px;}
.comm_vk{background-position: 0 -693px;}
.comm_pl{background-position: 0 -819px;}
.comm_hu{background-position: 0 -756px;}
.comm_id{background-position: 0 -882px;}
.comm_en2{background-position: 0 -945px;}
.comm_de{background-position: 0 -1008px;margin-right:0!important}
.stat_label span,#user_label span,#heading span,#triberanks span{background-image:url(tema/2/icons-sprite4.png);background-repeat:no-repeat;width:16px;height:16px;display:inline-block;}
.sprite_add_friend{background-position: 0 0;}
.sprite_down{background-position: 0 -66px;}
.sprite_remove_friend{background-position: 0 -132px;}
.sprite_star_admin{background-position: 0 -198px;}
.sprite_star_mod{background-position: 0 -264px;}
.sprite_star_tl{background-position: 0 -330px;}
.sprite_up{background-position: 0 -396px;}
.sprite_none{background-position: 0 -462px;}
.sprite_compare{background-position: 0 0;} 
.sprite_graph{background-position: 0 -178px;} 
.sprite_stat_tracker{background-position: 0 -356px;} 
.sprite_trend{background-position: 0 -534px;}
#homewrap span{background-image:url(http://spicyemu.formice.com/images/sprites/home-sprite2.jpg);background-repeat:no-repeat;width:280px;height:210px;display:inline-block;}
#emailconfirm{display:none;}
#forum_box{background-position: 0 0;}
#mapdb_box{background-position: 0 -215px;}
#mouse_leaderboard_box{background-position: 0 -430px;}
#quotes_box{background-position: 0 -645px;}
#search_box{background-position: 0 -860px;}
#tribe_leaderboard_box{background-position: 0 -1075px;}
.f1{white-space:nowrap;}
.f3,.f4,.f6,.f10,.f5,.f9,.f7,.f8,.f11,.f12,.f13{text-align:right}
.f2{white-space:nowrap}
.barrel_roll{-webkit-transition: -webkit-transform 4s ease;-webkit-transform: rotate(360deg);-moz-transition: -moz-transform 4s ease;-moz-transform: rotate(360deg);-o-transition: -o-transform 4s ease;-o-transform: rotate(360deg);transition: transform 4s ease;transform: rotate(360deg);}
form .counter{right:0;bottom:0;font-size:15px;font-weight:700;color:#ccc;margin-left:5px}
form .warning{color:#600}
form .exceeded{color:#e00}
.xenTooltip{font-size:11px;color:#fff;background:rgba(0,0,0,0.6);_filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;display:none;z-index:15000;cursor:default;padding:5px 10px}
.xenTooltip a,.xenTooltip a:hover{color:#fff;text-decoration:underline}
.xenTooltip .arrow{border-top:6px solid rgba(0,0,0,0.6);_border-top:6px solid #000;border-right:6px solid transparent;border-bottom:1px none #000;border-left:6px solid transparent;position:absolute;bottom:-6px;left:9px;line-height:0;width:0;height:0;_display:none}
.xenTooltip.statusTip{line-height:17px;width:250px;height:auto;padding:5px 10px}
.xenTooltip.statusTip .arrow{border:6px solid transparent;border-right-color:rgba(0,0,0,0.6);_border-right-color:#000;border-left:1px none #000;top:6px;left:-6px;bottom:auto;right:auto}
.xenTooltip.iconTip{margin-left:-6px}
.minigame-list{font-size:1.2em;font-weight:bold;margin-bottom:.5em;}
#breadcrumbs{display:inline;text-align:left;}
#groupAdd{height:2em;width:20em;margin-top:10px;}
#js-disabled{background-color:rgba(16,16,16,0.5); color:#e03fb1; font-family:sans-serif; font-size:110%; font-weight:bold; left:0; padding:5px 0; position:fixed; text-align:center; top:0; width:100%; z-index:9999}
.title_name{width:230px;white-space:nowrap;}
.title_description{width:370px;text-align:left;}
.title_table{width:600px;}
.lang_flag{padding-right:6px;margin-right:0px!important}
.dropdown{z-index:9999;position: relative;height: 27px;border-width: 1px;border-style: solid;border-color: #272c33 #242930 #22272d;border-radius: 3px;display: -moz-inline-box;-moz-box-orient: vertical;display: inline-block;margin-top:-7px;text-align:left;zoom: 1;*display: inline;*vertical-align: auto;background-color: #363d47;background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #4a5361), color-stop(100%, #363d47));background-image: -webkit-linear-gradient(top, #4a5361, #363d47);background-image: -moz-linear-gradient(top, #4a5361, #363d47);background-image: -ms-linear-gradient(top, #4a5361, #363d47);background-image: -o-linear-gradient(top, #4a5361, #363d47);background-image: linear-gradient(top, #4a5361, #363d47);-webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), 0 1px 2px rgba(0, 0, 0, 0.15);-moz-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), 0 1px 2px rgba(0, 0, 0, 0.15);box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), 0 1px 2px rgba(0, 0, 0, 0.15);opacity:0.5}
.dropdown:hover,.dropdown_active{opacity:1}
.dropdown a{font-size:12px;text-shadow:0 1px #000}
.dropdown a:hover{text-decoration:none}
.dropdown > a{float:left;position:relative;height:27px;line-height:26px;color:#ecf0f1;border-radius:2px 0 0 2px;padding:0 10px;min-width:115px;}
.dropdown > a:before{content:"";display:inline-block;width:14px;height:14px;vertical-align:-2px;margin-right:10px;background:url(http://spicyemu.formice.com/images/sprites/language-sprite4.png) 0 -549px no-repeat}
.dropdown > a:active{background:#343b44}
.dropdown div{float:left;height:27px;width:26px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAALCAYAAACzkJeoAAAApUlEQVQYV2P4//8/AwhLSKiIyiqqbwfRMDEwISMjwymrqHlSWUP/P4gG8cGSQMAM1LFRWcPgv6qW0X8QDeKDxBnkFNW7lNX1wRIwDOLLKmr0gozlA2IpLJgPbCcuzCCrpD5NTknjPzoGiTNcvXpVSNfYaieynSA+SBysfePGjVJa+ubnQRIgGsQHGws1n7G5c4K6jpHFPhAN4iNLgjATEAtDabAYAMvNnITXlqBKAAAAAElFTkSuQmCC) 9px 9px no-repeat;border-left:1px solid #292e36;-webkit-box-shadow:inset 1px 0 rgba(255,255,255,0.08);-moz-box-shadow:inset 1px 0 rgba(255,255,255,0.08);box-shadow:inset 1px 0 rgba(255,255,255,0.08);border-color:rgba(0,0,0,0.4)}
.dropdown_hover_ul{display:block!important}
.dropdown ul{display:none;position:absolute;top:27px;left:-1px;right:-1px;background:#272c33;border:1px solid #20242a;border-radius:0 0 3px 3px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.2);-moz-box-shadow:0 1px 2px rgba(0,0,0,0.2);box-shadow:0 1px 2px rgba(0,0,0,0.2);margin:0;padding:0}
.dropdown div:active{background:#343b44}
.dropdown ul li{display:block}
.dropdown ul li:last-child a{border-radius:0 0 3px 3px}
.dropdown ul a{display:block;line-height:25px;color:#b2b8c4;border-top:1px solid transparent;padding:0 10px 1px}
.dropdown ul a:hover{color:#fff;text-shadow:0 1px rgba(0,0,0,0.7);background-color:#426ebf;border-color:#78aad5;background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5e9ace), color-stop(100%, #416cb8));background-image: -webkit-linear-gradient(top, #5e9ace, #416cb8);background-image: -moz-linear-gradient(top, #5e9ace, #416cb8);background-image: -ms-linear-gradient(top, #5e9ace, #416cb8);background-image: -o-linear-gradient(top, #5e9ace, #416cb8);background-image: linear-gradient(top, #5e9ace, #416cb8);}
.debug_icon{background:url(http://spicyemu.formice.com/images/sprites/debug.png) no-repeat;border-width:0;vertical-align:middle;margin-right:3px;display:inline-block;}
.locked_topic{background:url("/forum/styles/default/xenforo/xenforo-ui-sprite.png") no-repeat -16px -16px;float:right;height:16px;width:16px;margin-right:-38px;}
.sticky_topic{background:url("/forum/styles/default/xenforo/xenforo-ui-sprite.png") no-repeat 0 -16px;float:right;height:16px;width:16px;margin-right:-38px;}
.tf_pagination{float:right;display:block;}
.tf_pagination2{padding:0 0 0 0;font-size: 13px;}
.admin_mouse{font-weight:bold;text-decoration:underline!important;}
.manager_mouse{font-weight:bold;}
.moderator_mouse{font-weight:normal;}
.profile-clearfix{display:inline-block;width:100%;}
</style>';
?>