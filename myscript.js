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
                        title: "This is not a level :) Click Go to find 1st level !",
                        text: "Hurry Up :)",
                        icon: "info",
                        button: "Go",
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
                if(data=="false"){
                    swal("Opps !", "Wrong Token ! Try Hard :) ", "error");
                }else{
                    $("#result").html("Level is done !");
                    swal({
                        title: "Level "+data+" is done !",
                        text: "Hurry Up :)",
                        icon: "info",
                        button: "Go Go Go",
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete){
                                window.location.reload();
                            }else {
                                swal("Opps !", "Do you want to stay here ?", "error");
                            }
                        });
                }
            }
        });
    }
});


$('#key_val').click(function () {
    var text_area=$('#text-area').val();
    var id_text = document.getElementById('id_text').textContent;
    if (text_area==""){
        swal("Opps !", "Please Enter Pattern !", "error");
        document.getElementById("result").hidden=false;
        $("#result").html("Please Enter Pattern !");
    }else{
        $("#result").html("Wait....");
        document.getElementById("result").hidden=true;
        document.getElementById("result1").hidden=false;
        var text=text_area.split("-");
        var new_id=id_text.split(" ");

        var i;
        var j;
        var code = "";
        for (j = 0; j < text.length; j++) {
            for (i = 0; i < new_id.length; i++) {
                if (i==text[j]){
                    code=code+new_id[i];
                    break;
                }
            }
        }
        $("#result1").html(code);
    }
});


$('#level_3_submit').click(function () {
    var pass=$('#pass').val();
    if (pass==""){
        swal("Opps !", "Please Enter Password !", "error");
    }else{
        $.ajax({
            url:'check.php',
            data:{pass:pass},
            success:function (data) {
                if (data=="false"){
                    swal("Opps !", "Wrong Password !", "error");
                }else{
                    swal("This is Password !", data, "success");
                }
            }
        });
    }
});
