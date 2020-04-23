$('#login').click(function () {
    var email=$('#email').val();
    var password=$('#password').val();
    var id="contact";
    if (email==""){
        swal("Opps !", "Please Enter Username !", "error");
        $("#result").html("Please Enter Username !");
    }else if(password==""){
        swal("Opps !", "Please Enter Password !", "error");
        $("#result").html("Please Enter Password !");
    }else{
        $("#result").html("");
        $.ajax({
            url:'data.php',
            data:{id:id,email:email,password:password},
            success:function (data) {
                $("#result").html("");
                if (data=="true"){
                    swal({
                        title: "This is not a level :) Click Go Go Go to first level !",
                        text: "Hurry Up :)",
                        icon: "info",
                        button: "Go Go Go",
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete){
                                window.location.href="level_1.php";
                            }else {
                                swal("Opps !", "Do you want to stay here ?", "error");
                            }
                        });
                }else if(data=="false"){
                    $("#result").html("Username or Password Incorrect !");
                    swal("LOL !", "Try Hard Man ! Please think like a hacker :) ", "error");
                }
            }
        });
    }
});



$('#main_login').click(function () {
    var email=$('#email').val();
    var password=$('#password').val();
    if (email==""){
        swal("Opps !", "Please Enter Username !", "error");
        $("#result").html("Please Enter Username !");
    }else if(password==""){
        swal("Opps !", "Please Enter Password !", "error");
        $("#result").html("Please Enter Password !");
    }else{
        $("#result").html("Checking....");
        $.ajax({
            url:'login.php',
            data:{email:email,password:password},
            success:function (data) {
                $("#result").html("");
                if (data=="true"){
                    window.location.href="../Dboard.php";
                }else if(data=="false"){
                    swal("Opps !", "Username or Password incorrect !", "error");
                }
            }
        });
    }
});


$('#level_1').click(function () {

    var token=$('#token').val();
    var token_id=$('#token_id').val();
    var id="token";
    if(token==""){
        swal("Opps !", "Please Enter Token !", "error");
    }else{
        $.ajax({
            url:'token.php',
            data:{id:id,token:token,token_id:token_id},
            success:function (data) {
                $("#result").html("");
                if (data=="1"){
                    $("#result").html("Level is done !");
                    swal({
                        title: "Level is done ! Do you want to Continue ?",
                        text: "Hurry Up :)",
                        icon: "info",
                        button: "Go Go Go",
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete){
                                window.location.href="dedboard/levelsdedsec/level1(43d3810c065f4bf3550fac648d605fcb)/dedsecL2.php";
                            }else {
                                swal("Opps !", "Do you want to stay here ?", "error");
                            }
                        });
                }else if(data=="2"){
                    $("#result").html("Level is done !");
                    swal({
                        title: "Level is done ! Do you want to Continue ?",
                        text: "Hurry Up :)",
                        icon: "info",
                        button: "Go Go Go",
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete){
                                window.location.href="level_3.php";
                            }else {
                                swal("Opps !", "Do you want to stay here ?", "error");
                            }
                        });
                }else if(data=="3"){
                    $("#result").html("Level is done !");
                    swal({
                        title: "Level is done ! Do you want to Continue ?",
                        text: "Hurry Up :)",
                        icon: "info",
                        button: "Go Go Go",
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete){
                                window.location.href="dedboard/levelsdedsec/level4(636F6E6E656374696F6E)/dedsecL4.html";
                            }else {
                                swal("Opps !", "Do you want to stay here ?", "error");
                            }
                        });
                }else if(data=="false"){
                    swal("Opps !", "Wrong Token ! Try Hard :) ", "error");
                }
            }
        });
    }
});



