
var i1 = 0;
var i2 = 0;
var speed = 50;
var txt1 = 'Lorem ipsum dummy text blabla.';
var txt2 = 'Lorem ipsum dummy text blabla.';

function onscroll_function() {
    var fadeTarget = document.getElementById("main-div");
    var fadeEffect = setInterval(function () {
        if (fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (!fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
        }
    }, 200);
}

function typeWriterLevel1() {

        if (i1 < txt1.length) {
            document.getElementById("level_content").innerHTML += txt1.charAt(i1);
            i1++;
            setTimeout(typeWriterLevel1, speed);
        } else{
        document.getElementById("level_content").innerHTML = "Something here about Level 01";
        }
}

function typeWriterLevel2() {

    if (i2 < txt2.length) {
        document.getElementById("level_content").innerHTML += txt2.charAt(i2);
        i2++;
        setTimeout(typeWriterLevel2, speed);
    }else{
        document.getElementById("level_content").innerHTML = "Something here about Level 02";
    }
}



function phase_and_level(btn_id){

//fade top header code...(fade out)
    var elmnt1 = document.getElementById("main-div");
    elmnt1.scrollIntoView();
    var fadeTarget = document.getElementById("main-div");
    var fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
        }
    }, 100);

    if(btn_id===1){


        document.getElementById("phase").innerHTML = "phase 01";
        document.getElementById("phase_description").innerHTML = "Something here about phase 01ggghghghcghcghcghcghcghcgcghghcgccffffffffffffffffffffffffffffffffffff";
        document.getElementById("level").innerHTML = "Level 01";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no1").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes1").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes1").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next1").innerHTML;
        document.getElementById("level_content").innerHTML = "";
        typeWriterLevel1();
        document.getElementById("story_line").src = "images/storyline1.gif";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }
    if(btn_id===2){
        document.getElementById("phase").innerHTML = "phase 01";
        document.getElementById("phase_description").innerHTML = "Something here about phase 01";
        document.getElementById("level").innerHTML = "Level 02";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no2").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes2").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes2").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next2").innerHTML;
        document.getElementById("story_line").src = "images/1.png";
        var elmnt = document.getElementById("m5");
        document.getElementById("level_content").innerHTML = "";
        typeWriterLevel2();
        elmnt.scrollIntoView();
    }
    if(btn_id===3){
        document.getElementById("phase").innerHTML = "phase 01";
        document.getElementById("phase_description").innerHTML = "Something here about phase 01";
        document.getElementById("level").innerHTML = "Level 03";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no3").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes3").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes3").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next3").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 03";
        document.getElementById("story_line").src = "images/storyline1.gif";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }
    if(btn_id===4){
        document.getElementById("phase").innerHTML = "phase 02";
        document.getElementById("phase_description").innerHTML = "Something here about phase 02";
        document.getElementById("level").innerHTML = "Level 04";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no4").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes4").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes4").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next4").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 04";
        document.getElementById("story_line").src = "images/sl2.gif";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }

    if(btn_id===5){
        document.getElementById("phase").innerHTML = "phase 02";
        document.getElementById("phase_description").innerHTML = "Something here about phase 02";
        document.getElementById("level").innerHTML = "Level 05";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no5").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes5").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes5").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next5").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 05";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }

    if(btn_id===6){
        document.getElementById("phase").innerHTML = "phase 02";
        document.getElementById("phase_description").innerHTML = "Something here about phase 02";
        document.getElementById("level").innerHTML = "Level 06";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no6").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes6").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes6").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next6").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 06";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }

    if(btn_id===7){
        document.getElementById("phase").innerHTML = "phase 03";
        document.getElementById("phase_description").innerHTML = "Something here about phase 03";
        document.getElementById("level").innerHTML = "Level 07";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no7").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes7").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes7").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next7").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 07";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }

    if(btn_id===8){
        document.getElementById("phase").innerHTML = "phase 03";
        document.getElementById("phase_description").innerHTML = "Something here about phase 03";
        document.getElementById("level").innerHTML = "Level 08";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no8").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes8").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes8").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next8").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 08";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }

    if(btn_id===9){
        document.getElementById("phase").innerHTML = "phase 03";
        document.getElementById("phase_description").innerHTML = "Something here about phase 03";
        document.getElementById("level").innerHTML = "Level 09";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no9").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes9").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes9").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next9").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 09";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }

    if(btn_id===11){
        document.getElementById("phase").innerHTML = "phase 04";
        document.getElementById("phase_description").innerHTML = "Something here about phase 04";
        document.getElementById("level").innerHTML = "Level 11";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no11").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes1").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes11").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next11").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 11";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }

    if(btn_id===10){
        document.getElementById("phase").innerHTML = "phase 04";
        document.getElementById("phase_description").innerHTML = "Something here about phase 04";
        document.getElementById("level").innerHTML = "Level 10";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no10").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes10").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes10").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next10").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 10";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }

    if(btn_id===12){
        document.getElementById("phase").innerHTML = "phase 04";
        document.getElementById("phase_description").innerHTML = "Something here about phase 04";
        document.getElementById("level").innerHTML = "Level 12";
        document.getElementById("solvers").innerHTML = document.getElementById("solvers_no12").innerHTML;
        document.getElementById("like").innerHTML = document.getElementById("no_likes12").innerHTML;
        document.getElementById("dislike").innerHTML = document.getElementById("no_dislikes12").innerHTML;
        document.getElementById("flags").innerHTML = document.getElementById("flags_for_next12").innerHTML;
        document.getElementById("level_content").innerHTML = "Something here about Level 12";
        var elmnt = document.getElementById("m5");
        elmnt.scrollIntoView();

    }
}