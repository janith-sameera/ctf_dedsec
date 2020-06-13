<?php
session_start();
if (isset($_SESSION['User'])){
    if ((time()-$_SESSION['start'])>600){
        session_destroy();
        header("location:Welcome/login.html");
    }
}else{
    header("location:Welcome/login.html");
}
include "../check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="DedCss/Dboard.css" rel="stylesheet" type="text/css">
    <title>DedSec</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/x.gif">
    <script src="MDProgressBarChart.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <script src="pureknob.js" type="text/javascript"></script>
    <script src="dynamic_content.js" type="text/javascript"></script>
    <script type="text/javascript">
        // <![CDATA[

        /*
         * Demo code for knob element.
         */
        function demoKnob() {
            // Create knob element, 300 x 300 px in size.
            var knob = pureknob.createKnob(300, 300);

            // Set properties.
            knob.setProperty('angleStart', -0.75 * Math.PI);
            knob.setProperty('angleEnd', 0.75 * Math.PI);
            knob.setProperty('colorFG', '#0dff06');
            knob.setProperty('trackWidth', 0.4);
            knob.setProperty('valMin', 0);
            knob.setProperty('valMax', 100);

            // Set initial value.
            knob.setValue(12);

            /*
             * Event listener.
             *
             * Parameter 'knob' is the knob object which was
             * actuated. Allows you to associate data with
             * it to discern which of your knobs was actuated.
             *
             * Parameter 'value' is the value which was set
             * by the user.
             */
            var listener = function(knob, value) {
                console.log(value);
            };

            knob.addListener(listener);

            // Create element node.
            var node = knob.node();

            // Add it to the DOM.
            var elem = document.getElementById('some_element');
            elem.appendChild(node);
        }

        /*
         * Demo code for bar graph element.
         */
        function demoBarGraph() {
            var body = document.getElementsByTagName('body')[0];
            var graph = pureknob.createBarGraph(400, 40);
            graph.setProperty('colorFG', '#00ae0f');
            graph.setProperty('colorMarkers', '#ffffff');
            graph.setProperty('markerStart', -60);
            graph.setProperty('markerEnd', 0);
            graph.setProperty('markerStep', 10);
            graph.setProperty('valMin', -145);
            graph.setProperty('valMax', 0);
            graph.setValue(-25);
            graph.setPeaks([-18]);
            var node = graph.node();
        //    body.appendChild(node);
            window.graph = graph;

            /*
             * This is executed on each timer tick.
             */
            var t = function(e) {
                var v = graph.getValue();

                /*
                 * As long as value is greater than -80, decrement it.
                 */
                if (v > -80) {
                    v--;
                    graph.setValue(v);
                }

            };

            window.setInterval(t, 200);
        }

        /*
         * This is executed after the document finished loading.
         */
        function ready() {
            demoKnob();
            demoBarGraph();
        }

        document.addEventListener('DOMContentLoaded', ready, false);
        // ]]>
    </script>

</head>
<body onscroll="onscroll_function()" >

<div id="main-div" class="main-div">

    <div  class="main-div-p">
        <div class="md-1"> </div>
        <div class="md-2">
            <h1 style="font-family:Zombiebranch">DedSec</h1>
        </div>
        <div class="md-3">
            <h4 style="color:#78ae00;">DedSec has given you the truth, do what you will *</h4>
        </div>
        <?php
            $user=$_SESSION['User'];
            echo "<h3>$user</h3>";
        ?>
        <div class="md-4"> </div>
    </div>

</div>

<div style="overflow:auto; background: rgba(8,8,8,0.95);">

    <div class="menu" style="    margin-top: 200px; padding-left: 0px; padding-right: 0px">
        <h4 style="color: #78ae00; text-align: left; padding: 10px; padding-bottom: 0px">DedSec Menu</h4>
        <hr style="margin-bottom: 20px; border: 0.5px solid #1a1a1b;  border-radius: 5px; margin-top: -10px">
        <div class="menuitem" style="margin-right: 20px"><b>Profile</b></div>
        <div class="menuitem" style="margin-right: 20px"><b>Levels</b></div>
        <div class="menuitem" style="margin-right: 20px"><b>Rankings</b></div>
        <div class="menuitem" style="margin-right: 20px"><b>Your flags</b></div>
        <div class="menux">
            <h4 style="color: #ffc800; text-align: left; padding: 10px; padding-bottom: 0px">You decide</h4>
            <hr style="  margin-bottom: 20px; border: 0.5px solid #1a1a1b;  border-radius: 5px; margin-top: -10px">
            <div class="menuitemx" ><b>About Dedsec</b></div>
            <div class="menuitemx" ><b>How to play</b></div>
            <div class="menuitemx"><b>Any suggesions?</b></div>
            <div class="menuitemx"><b>Share</b></div>

        </div>
    </div>



    <div class="main">

        <div class="main-p">

            <div class="m-1" style="    background: #78ae00;"> </div>
            <div id="m3"  class="m-3" style="align-content: center; text-align: center;">
                <div class="m6" id="some_element" style="  display: block; margin-left: auto; margin-right: auto; width: 100%; padding-top: 50px; background-color: #000000">
                    <h3 style="color: #b6bb5f" onmouseover="demoKnob()"><b>level you right now</b></h3>
                </div>
            </div>
            <div id="m4" class="m-4" style="	background: #222222; ">
                <svg width="700" height="400" id="mainSVG" style="color: #f1f1f1; z-index:1;"></svg>
            </div>
            <div id="m5" class="m-5" style="background: #2a2a2a ; filter: brightness(90%)">
                <b id="phase" style="color:  #96dc00;">>Phase 01</b>
                <h5 id="phase_description" style="    background: #171819;color: #ffffff; padding: 10px"> In this field we are going to describe to the user about the phase that related to selected level. As a example if user has selected level 01, since level 01 is in the phase one , we describe the 1st phase as :
                    Qualification levels to the DedSec ;
                </h5>

                <img id="story_line" src="" height="auto" width="auto" style="display: block;margin-left: auto; margin-right: auto;width: 100%;  "/><h5 style=" background: #78ae00;color: #000000; padding: 10px">    </h5>
                <div class="description">
                    <div class="phase-level" style="background: #adff00; width: 20%">
                        <b id="level">
                            Level 1
                        </b>
                    </div>
                    <div id="solvers" class="solvers-level">[00028 solvers]</div>
                    <div class="level">

                        <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="like"></b>

                    </div>
                    <div class="level">

                        <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="dislike"></b>

                    </div>
                    <div class="level">
                        <img src="images/easy.png" height="20px"width="auto"/><b id="skill_level"></b>
                    </div>
                    <div class="level">
                        <img src="images/icons8-flag-2-96.png" height="20px"width="auto"/><b id="flags"></b>
                    </div>
                </div>

                <h5 id="level_content" style="background: #171819;color: #ffffff; padding: 10px; font-size: 14px"> In this field we are going to describe to the user about the phase that related to selected level. As a example if user has selected level 01, since level 01 is in the phase one , we describe the 1st phase as :
                    Qualification levels to the DedSec ;Capture the Flag (CTF) is a competition that related to information security where the participants will be test on a various of security challenges like web penetration testing, reverse engineering, cryptography, steganography and few others more. Participants must get the â€œflagâ€ to gain their points. So, the team who have the highest point at the end of the game will be the winner;
                </h5>

            </div>
            <div class="m-6" style="background: #222222">

            </div>
            <div class="m-7" style="background: #121212">

                <div class="m-7-p">
                    <div class="m7-1">
                            <div class="phase">
                                <div class="phase-level" onclick="phase_and_level(1)"><b>Level 1</b></div>
                                <div class="phase-level" onclick="phase_and_level(2)"><b>Level 2</b></div>
                                <div class="phase-level" onclick="phase_and_level(3)"><b>Level 3</b></div>
                            </div>
                        <div class="solvers">
                            <div id="solvers_no1" class="solvers-level">[00028 solvers]</div>
                            <div id="solvers_no2"  class="solvers-level">[38911 solvers]</div>
                            <div id="solvers_no3"  class="solvers-level">[452789 solvers]</div>
                        </div>

                        <div class="likes">
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes1">8</b>

                            </div>
                            <div class="likes-level">

                                    <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes2">11</b>

                            </div>
                            <div class="likes-level">

                                    <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes3">89</b>

                            </div>
                        </div>

                        <div class="dislikes">
                            <div class="dislikes-level">

                                    <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes1">8</b>

                            </div>
                            <div class="dislikes-level">

                                    <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes2">11</b>

                            </div>
                            <div class="dislikes-level">

                                    <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes3">89</b>

                            </div>
                        </div>

                        <div class="run">
                            <div class="run-level">
                                    <img src="images/easy.png" height="200%"width="auto"/>
                            </div>
                            <div class="run-level">

                                    <img src="images/medium.png" height="200%"width="auto"/>

                            </div>
                            <div class="run-level">

                                    <img src="images/hard.png" height="200%"width="auto"/>

                            </div>
                        </div>

                        <div class="flags">
                            <div class="flags-level">
                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next1">x0</b>
                            </div>
                            <div class="flags-level">

                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next2">x1</b>

                            </div>
                            <div class="flags-level">

                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next3">x2</b>

                            </div>
                        </div>



                    </div>
                    <div class="m7-2">

                        <div class="phase">
                            <div class="phase-level" onclick="phase_and_level(4)"><b>Level 4</b></div>
                            <div class="phase-level" onclick="phase_and_level(5)"><b>Level 5</b></div>
                            <div class="phase-level" onclick="phase_and_level(6)"><b>Level 6</b></div>
                        </div>
                        <div class="solvers">
                            <div id="solvers_no4" class="solvers-level">[00028 solvers]</div>
                            <div id="solvers_no5"  class="solvers-level">[38911 solvers]</div>
                            <div id="solvers_no6"  class="solvers-level">[452789 solvers]</div>
                        </div>

                        <div class="likes">
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes4">8</b>

                            </div>
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes5">11</b>

                            </div>
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes6">89</b>

                            </div>
                        </div>

                        <div class="dislikes">
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes4">8</b>

                            </div>
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes5">11</b>

                            </div>
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes6">89</b>

                            </div>
                        </div>

                        <div class="run">
                            <div class="run-level">
                                <img src="images/easy.png" height="200%"width="auto"/>
                            </div>
                            <div class="run-level">

                                <img src="images/medium.png" height="200%"width="auto"/>

                            </div>
                            <div class="run-level">

                                <img src="images/hard.png" height="200%"width="auto"/>

                            </div>
                        </div>

                        <div class="flags">
                            <div class="flags-level">
                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next4">x0</b>
                            </div>
                            <div class="flags-level">

                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next5">x1</b>

                            </div>
                            <div class="flags-level">

                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next6">x2</b>

                            </div>
                        </div>

                    </div>
                    <div class="m7-3">

                        <div class="phase">
                            <div class="phase-level" onclick="phase_and_level(7)"><b>Level 7</b></div>
                            <div class="phase-level" onclick="phase_and_level(8)"><b>Level 8</b></div>
                            <div class="phase-level" onclick="phase_and_level(9)"><b>Level 9</b></div>
                        </div>
                        <div class="solvers">
                            <div id="solvers_no7" class="solvers-level">[00028 solvers]</div>
                            <div id="solvers_no8"  class="solvers-level">[38911 solvers]</div>
                            <div id="solvers_no9"  class="solvers-level">[452789 solvers]</div>
                        </div>

                        <div class="likes">
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes7">8</b>

                            </div>
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes8">11</b>

                            </div>
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes9">89</b>

                            </div>
                        </div>

                        <div class="dislikes">
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes7">8</b>

                            </div>
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes8">11</b>

                            </div>
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes9">89</b>

                            </div>
                        </div>

                        <div class="run">
                            <div class="run-level">
                                <img src="images/easy.png" height="200%"width="auto"/>
                            </div>
                            <div class="run-level">

                                <img src="images/medium.png" height="200%"width="auto"/>

                            </div>
                            <div class="run-level">

                                <img src="images/hard.png" height="200%"width="auto"/>

                            </div>
                        </div>

                        <div class="flags">
                            <div class="flags-level">
                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next7">x0</b>
                            </div>
                            <div class="flags-level">

                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next8">x1</b>

                            </div>
                            <div class="flags-level">

                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next9">x2</b>

                            </div>
                        </div>

                    </div>
                    <div class="m7-4">

                        <div class="phase">
                            <div class="phase-level" onclick="phase_and_level(10)"><b>Level 10</b></div>
                            <div class="phase-level" onclick="phase_and_level(11)"><b>Level 11</b></div>
                            <div class="phase-level" onclick="phase_and_level(12)"><b>Level 12</b></div>
                        </div>
                        <div class="solvers">
                            <div id="solvers_no10" class="solvers-level">[00028 solvers]</div>
                            <div id="solvers_no11"  class="solvers-level">[38911 solvers]</div>
                            <div id="solvers_no12"  class="solvers-level">[452789 solvers]</div>
                        </div>


                        <div class="likes">
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes10">8</b>

                            </div>
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes11">11</b>

                            </div>
                            <div class="likes-level">

                                <img src="images/icons8-facebook-like-96.png" height="20px"width="auto"/><b id="no_likes12">89</b>

                            </div>
                        </div>

                        <div class="dislikes">
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes10">8</b>

                            </div>
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes11">11</b>

                            </div>
                            <div class="dislikes-level">

                                <img src="images/icons8-thumbs-down-96%20(1).png" height="20px"width="auto"/><b id="no_dislikes12">89</b>

                            </div>
                        </div>

                        <div class="run">
                            <div class="run-level">
                                <img src="images/easy.png" height="200%"width="auto"/>
                            </div>
                            <div class="run-level">

                                <img src="images/medium.png" height="200%"width="auto"/>

                            </div>
                            <div class="run-level">

                                <img src="images/hard.png" height="200%"width="auto"/>

                            </div>
                        </div>

                        <div class="flags">
                            <div class="flags-level">
                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next10">x0</b>
                            </div>
                            <div class="flags-level">

                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next11">x1</b>

                            </div>
                            <div class="flags-level">

                                <img src="images/icons8-flag-2-96.png" height="200%"width="auto"/><b id="flags_for_next12">x2</b>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <h2 style="padding: 10px">DedSec</h2>
        <p style="padding: 10px">Watch Dogs is an action-adventure game, played from a third-person view. The player controls hacker Aiden Pearce, who uses his smartphone to control trains and traffic lights, infiltrate security systems, jam cellphones, access pedestrians' private information, and empty their bank accounts ;
        </p>
    </div>

    <div class="right" style="margin-top: 110px;">
        <h2 style="    background: #ffc800; color: #111111; padding: 3px"><b>What is DedSec?</b></h2>
        <p><b style="color:  #ffc800;">DedSec</b> is a web based <b style="color:  #ffc800;">CTF Box</b> ;

            It contains various kind of technologies such as <b style="color:  #ffc800;">cryptanalysis, coding challenges, forensics, reverse engineering, SQL injection etc ;
            </b>
            It also contain some challenges of <b style="color:  #ffc800;">Critical thinking based on mathematical skills</b>;

            Some challenges hints can be derive from previous challenges ;
        </p>
        <h2 style="background:  #96dc00; color: #111111; padding: 3px">CT_OS</h2>
        <p><b style="color:  #96dc00;">DedSec</b> is a web based <b style="color:  #96dc00;">CTF Box</b> ;

            It contains various kind of technologies such as <b style="color:  #96dc00;">cryptanalysis, coding challenges, forensics, reverse engineering, SQL injection etc ;
            </b>
            It also contain some challenges of <b style="color:  #96dc00;">Critical thinking based on mathematical skills</b>;

            Some challenges hints can be derive from previous challenges ;
        </p><h2 style="background: #ff6000; color: #1c1c1b; padding: 3px">What is a CTF</h2>
        <p><b style="color:  #ff6000;">DedSec</b> is a web based <b style="color:  #ff6000;">CTF Box</b> ;

            It contains various kind of technologies such as <b style="color:  #ff6000;">cryptanalysis, coding challenges, forensics, reverse engineering, SQL injection etc ;
            </b>
            It also contain some challenges of <b style="color:  #ff6000;">Critical thinking based on mathematical skills</b>;

            Some challenges hints can be derive from previous challenges ;
        </p>
    </div>
</div>


<div style="background-color:#111111;color: whitesmoke;text-align:center;padding:10px;margin-top:0px;font-size:12px;">Tacreations.tc</div>
<div style="display: inline-block; height: auto; position: relative; text-align: center; background: black; width: max-content" ><canvas height="40" width="400" style="height: 100%; width: 100%;"></canvas></div>
</body>
</html>
