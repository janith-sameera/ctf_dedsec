<?php
session_start();
if (isset($_SESSION['User'])){
    if ((time()-$_SESSION['start'])>600){
        session_destroy();
        header("location:../../Welcome/login.html");
    }
}else{
    header("location:../../Welcome/login.html");
}
include "../../../check.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shame On you..!</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="popup/dist/jquery.fullscreen-popup.js"></script>

    <style>

        .body{
            animation-name: brightnessfademain;
            animation-duration: 3s;
            animation-iteration-count: 1;
            -webkit-filter: blur(5px);
            -webkit-filter: brightness(10%);
        }

        .open-popup{
            float: contour;
            padding: 10px;
            padding-left: 15px;
            padding-right: 15px;
            background: #3f0009;
            color: #f1f1f1;
            font-family: Consolas;
            border-style: none;
            animation-name: move3;
            animation-duration: 0.5s;
            animation-iteration-count: infinite;

        }
        .open-popup:hover {
            background: #ff0023;
            font-size: 16px;
            cursor: pointer;
            animation-name: color-change2;
            animation-duration: 3s;
            animation-iteration-count: infinite;
        }
        .open-popup:focus{
            background: #111111;
            color: #f1f1f1;
            animation-name: move;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        .open-popup:after{
            background: #00ae0f;
        }

        .open-popupx{
            float: contour;
            padding: 10px;
            padding-left: 15px;
            padding-right: 15px;
            background: #e51200;
            color: #f1f1f1;
            font-family: Consolas;
            border-style: none;

        }
        .open-popupx:hover {
            background: #ff0023;
            font-size: 16px;
            cursor: pointer;
            animation-name: color-change2;
            animation-duration: 3s;
            animation-iteration-count: infinite;
        }
        .open-popupx:focus{
            background: #111111;
            color: #f1f1f1;
            animation-name: move;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        .open-popupx:after{
            background: #00ae0f;
        }



        @keyframes color-change {
            from {background-color: #A80D00}
            to {background-color: #ff0005;
                filter: invert(100%);}
            from {background-color: #ff0005;}
            to {background-color: #A80D00}
        }

        @keyframes color-change2 {
            from {}
            to {
                filter: invert(100%);}
        }

        @keyframes move {
            0%   { left:3px; top:2px;}
            80% { right:1px; bottom:2px;}
            100% { right:3px; top:0px;}
        }

        @keyframes movex {
            0%   {right:0px; top:0px;}
            100% { left:500px; top:0px;}
        }

        .header1{
            background-color: #A80D00;
            animation-name: color-change;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }

        body{

        }

        .image{
            position: relative;
            animation-name: move2;
            animation-duration:5s;
            animation-iteration-count: infinite;
        }
        @keyframes move2 {
            0%   { height: auto;
                width: 0%;
                z-index: 5}

            100% { width: 250%; height: auto; z-index:  5}
        }

        @keyframes move3 {
            0%   { background-color: #ff0023; color: #f1f1f1}
            50% { background: transparent; color: #111111}
            100% { background: #ff0005;color: #111111}
        }



        #go:hover{
            position: relative;
            animation-name: movex;
            animation-duration:5s;
            cursor: not-allowed;
            animation-direction: alternate;
            animation-iteration-count: infinite;
        }

    </style>

</head>
<body  style="padding: 200px;  background: url(df67baf37e918e95bade47a7850e91da.png) ; background-repeat: no-repeat;  ">


<div class="maind" style="width: 50%; margin: 0 auto; text-align: center ; background: rgba(0,0,0,0.9); padding-bottom: 20px;box-shadow: 0px 0px 10px rgba(24,24,24,0.93);">
    <h1 class="header1" style="padding: 10px; background: #a80d00; color: #f1f1f1; font-family: Consolas">You are Trapped..!</h1>
    <p style="background: #2b2b2b; color: #f1f1f1; font-family: Consolas; padding: 10px">"Everything that makes your life easier consists of the same basic materials. The planet will soon run out of these materials. We've already exhausted over half our supply in the last 100 years and production is only increasing. Governments are already waging wars, overt and shadow, to control those final building blocks, but who will end up with the most toys? Who really funds those wars? Who is on the receiving end of every favor owed? "</p>
    <button class="open-popup" data-popup="#popup2" >Who..?</button>
    <audio controls autoplay hidden>
        <source src="please_confirm.mp3" type="audio">
        unsupported !!
    </audio>
</div>


<div id="popup2" style="display: none; width: 60%; margin: 0 auto; text-align: center ; margin-top: -100px">
    <h1 class="header1" style="padding: 10px; background: #a80d00; color: #f1f1f1; font-family: Consolas">The answer is easy. Take your phone out of your pocket and look at the logo. You will need this code. Do not ever forget it. Do not under estimate the 48bit</h1>
    <button class="open-popupx" data-popup="#popup3" style="float: contour">Let me to escape</button>
</div>

<div id="popup3" style="display: none; width: 640px ;" >
    <h1 style="color: #f1f1f1;font-family: Consolas">F#ck the System..!</h1>
    <p style="color: #f1f1f1;font-family: Consolas">You want to make a statement. You want to be a part of the change. But I don't know how, you say. I am powerless. I am weak. I am afraid. We answer: one person can disrupt an entire system simply by standing still. One person can spread a message to a thousand more simply by choosing to speak. Stand beside others, and you become a wall. Shout along with others, and you become a bullhorn. If we push together, we can topple their towers...</p>
    <button class="open-popupx" data-popup="#popup4" style="float: contour" >What should I do..?</button>
</div>

<div class="popup4" id="popup4" style="display: none; width: 640px; " onmouseover="showCoords(event)">
    <h1 style="color: #f1f1f1; ">Take the control</h1>
    <p style="color: #f1f1f1">You should find a back door to access the CT-OS. We let you in to the OS. You should find it. If you could made it, you will realize the truth. cheers...<> </p>
    <button id="go" class="open-popupx"  style="float: contour" onclick="warn()">Okay let me In</button>

</div>

<script>

    $(".open-popup").fullScreenPopup({
        bgColor: 'rgba(8,0,1,0.98)'
    });
    $(".open-popupx").fullScreenPopup({
        bgColor: 'rgb(0,0,0)'
    });

    function warn() {
        swal("Are you sure? coz there is no going back.")
            .then((value) => {
                value=1;
                if (value==1){
                    swal("Are you sure you like what you like?")
                        .then((value1) => {
                            value1=2;
                            if (value1==2){
                                swal("Are you sure that you are sure?")
                                    .then((value2) => {
                                        value2=3;
                                        if (value2==3){
                                            infinite();
                                        }
                                    });
                            }
                        });
                }
            });


    }

    var ii =0;
    var speedi = 500;
    function infinite() {
        if(ii < 50000){
            ii++;
            window.open("Ouch.html?3C21444F43545950452068746D6C3E3C68746D6C206C616E673D22656E223E3C686561643E3C7469746C653E4865783C2F7469746C653E3C6D65746120636861727365743D227574662D38223E3C6D657461206E616D653D2276696577706F72742220636F6E74656E743D2277696474683D6465766963652D77696474682C20696E697469616C2D7363616C653D31223E3C7374796C653E2A207B626F782D73697A696E673A20626F726465722D626F783B7D626F6479207B666F6E742D66616D696C793A20417269616C2C2048656C7665746963612C73616E732D73657269663B6261636B67726F756E642D636F6C6F723A20233138313731373B6261636B67726F756E643A2075726C282268747470733A2F2F77616C6C70617065726163636573732E636F6D2F66756C6C2F313532353339312E6A706722293B6D617267696E3A202D313070783B7D6865616465727B6261636B67726F756E642D636F6C6F723A2072676261283235352C20302C2033332C20302E3933293B70616464696E673A20333070783B636F6C6F723A20233030303030303B746578742D616C69676E3A2063656E7465723B666F6E742D66616D696C793A20706978656C663B666F6E742D73697A653A20333570783B7D6E6176207B666C6F61743A2072696768743B77696474683A203330253B6865696768743A203135303070783B6261636B");
            window.open("Ouch.html?67726F756E643A2075726C282268747470733A2F2F692E70696E696D672E636F6D2F6F726967696E616C732F64662F36372F62612F64663637626166333765393138653935626164653437613738353065393164612E706E6722293B6261636B67726F756E642D73697A653A20636F7665723B7D6E617620756C207B6C6973742D7374796C652D747970653A206E6F6E653B70616464696E673A20303B7D61727469636C65207B666C6F61743A206C6566743B70616464696E673A20323070783B77696474683A203730253B666F6E742D66616D696C793A706978656C66203B636F6C6F723A20236533666630303B666F6E742D73697A653A20333270783B6261636B67726F756E642D636F6C6F723A207267626128302C20302C20302C20302E3833293B70616464696E672D6C6566743A2033303070783B6865696768743A206175746F3B7D73656374696F6E3A6166746572207B636F6E74656E743A2022223B646973706C61793A207461626C653B636C6561723A20626F74683B7D666F6F746572207B6261636B67726F756E642D636F6C6F723A20233038303830383B70616464696E673A20313070783B746578742D616C69676E3A2063656E7465723B636F6C6F723A2077686974653B7D2E6D61696E7B6261636B67726F756E643A207267626128302C20302C20302C20302E3933293B7D406D6564696120286D61");
            window.open("Ouch.html?782D77696474683A20363030707829207B6E61762C2061727469636C65207B77696474683A20313030253B6865696768743A206175746F3B7D7D40666F6E742D66616365207B666F6E742D66616D696C793A20706978656C663B7372633A2075726C28506978656C47616D65466F6E742E747466293B7D3C2F7374796C653E3C2F686561643E3C626F64793E3C64697620636C6173733D226D61696E223E3C6865616465723E3C68313E3C623E436F6E67726174756C6174696F6E733C2F623E3C2F68313E3C2F6865616465723E3C73656374696F6E3E3C6E61763E3C696D673E3C2F6E61763E3C61727469636C653E3C6831207374796C653D226261636B67726F756E643A20236662666630303B2070616464696E672D6C6566743A20323070783B2070616464696E672D72696768743A20323070783B2070616464696E672D746F703A20323070783B70616464696E672D626F74746F6D3A20323070783B20636F6C6F723A2023613330303038223E446F20796F7520657665722066696E6420796F757273656C662073746172696E67206F7574207468652077696E646F7720776F6E646572696E672077687920616C6D6F737420382062696C6C696F6E2070656F706C65207363757272792066726F6D20706F696E74204120746F20706F696E7420422C206E65766572206576656E207265616C697A696E6720746861");
            window.open("Ouch.html?74207468657265206973206120706F696E7420433F2050656F706C65206E6F206C6F6E676572207365656B20696E666F726D6174696F6E206265636175736520746865792772652066696C6C656420746F2063617061636974792E204F7665726C6F616465642E2054616B652061206C6F6F6B2061726F756E64206F75742074686572652E204C6F6F6B20617420616C6C207468652062696C6C626F6172647320616E64206D6F6E69746F72732E20486F77206D75636820426C756D6520646F20796F75207365653F20446F20796F75207468696E6B2074686572652077696C6C206265206D6F7265206F72206C657373207768656E20746865206E6578742043544F5320676F6573206C6976653F204B656570206C6F6F6B696E6720666F7220706F696E74204320616E64207765276C6C206B6565702074616C6B696E672E3C2F68313E3C703E3C623E596F75206861766520666F756E6420746865206261636B20646F6F7220746F20616363657373207468652070726F746F74797065206F662043542D4F532E2052656D656D6265722E2E212045766572797468696E6720697320636F6E6E65637465642E203C61207374796C653D22636F6C6F723A20236666303032332220687265663D226162632E636F6D223E436F6E6E656374696F6E3C2F613E20697320706F7765722E20203C2F623E3C2F703E3C2F61727469");
            window.open("Ouch.html?636C653E3C2F73656374696F6E3E3C666F6F7465723E3C703E4465645365633C2F703E3C2F666F6F7465723E3C2F6469763E3C2F626F64793E3C2F68746D6C3E");
            setTimeout(infinite, speedi);
        }


    }



</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</body>
</html>