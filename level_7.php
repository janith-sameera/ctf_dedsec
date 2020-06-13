<?php
session_start();
if (isset($_SESSION['User'])){
    if ((time()-$_SESSION['start'])>600){
        session_destroy();
        header("location:dedboard/Welcome/login.html");
    }
}else{
    header("location:dedboard/Welcome/login.html");
}
?>
<link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
<link rel="shortcut icon" type="image/x-icon" href="dedboard/images/x.gif">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<html>
<head>
    <script>
        document.onkeydown = function(e) {
            if(event.keyCode == 123) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
    <title>Welcome to the 7th level</title>

<body style="background-color: black; background-image: url(https://i.imgur.com/Gj3MtZq.gif)">
<div>
    <script>
        swal("Welcome !", "This is Level 7 If you are a genius, You will find a way ! ", "info");
    </script>
    <form>
        <li class="folders">
            <a href="images/level5.txt" target="_blank" title="files/Archives" class="folders" >
                <span class="icon folder full"></span>
                <span class="name" hidden>Click me</span>
            </a>
        </li>
    </form>
    <div style="background-color: white; opacity: 90%;text-align: center">
        <span id="id_text" style="color: black; "><br><br><br><br><br><br> Find & seek is the best game to take real sequence  <br><br><br><br><br><br></span>
        <span hidden>mt 6Y Mi N0 Jl YK Js TY Ug j3 41 HN bJ wx EN 9s ow lP GY r9 br FW ls rD YX fJ cM Xo sS Em wc UH 9x ip Ng PS qO ZZ eZ my AI qs jq Ec 1H gE wO oY h1 1n wB KG u3 cY Ka ju vG Sh 2I Qj == fW Rb lD gM Vs Sa Dp cm 9u dV nL F9 w8 W6 d2 TR 19 qj 1P y2 M2 7W S3 Vz wi yR Wu DO lD qU tc b5 9K Dy fA JQ Ia cq xV jM jr w4 cY XP qK bU Jl 45 Ty 2b xk c2 eT nP bi Ct gC Ph tc re 21 cZ Wt Zw g3 tr 7M hi FJ fw Zq nn RI Wm 7P TK zB bP fJ hX Qm GF ZG cm EV 5f fU eW vW LJ EU == Yk 5c Nr DM ks 3q Qh Us DC I6 gk LU B5 st x9 NS PO 9m 4B Ed tK 6Y LZ Ly mU Vj G7 bv RF RV NV jA qT Yp Lp Gd Ks Xk UV 6H TR ER Xc XC yK Sy Hl gn nE gi Is td NO Xs Pk KB ka gg u9 fY iH XW Ue N2 j7 bz 7p IH RA OR DW hT UN NR hT Sg ow gj Lv ns ye fK D5 Mr UN fA Mq 3G zN q3 Mw ha Qi iY QC wX n7 nX ON Yo 88 sU NC Si Ks KL Sp ra d7 3U DN wy xW X6 8M QF hB ZE vI dV vJ 31 8h MQ fK kG u5 zd Ap Mi Hn 73 KD OT t7 2l lQ 7n yM lo SW PK S2 9X pm sz bk Or 8n mI Cy Gh 9v HP Zd 8q 6H Iv Q2 8n kA Fc Lj VE wR JQ SO nf aW Wm 1g 5Q SQ C4 p6 42 Nt c7 C1 ah j5 Qz in tu 6w BF Xt hK 7N 5b BH n5 7T RT EQ wd v1 iw BV Rn ki 46 Ga Ns gQ 8s 6b NP P7 s8 ZK wq KP TV oH RJ jt z1 SB Jc Gf YV ge sC 5N RB Ze Eo j5 ia Wl G1 by ib GM 6b wZ v1 W4 tV s1 xe WW sL yn 6F aT PO Ql 5f 8y T7 xU jA So dv Ti c6 Ox c2 da 2Q K1 gp xU bU FO Zl 3P UH vo WQ 2g mR PR I6 wI tQ HQ N9 SI u5 oE 8v Rd 8Q AN lD Uz Fy TS hf Zx 3P U8 8A U2 D2 1B 5O Gu cR M7 mq vu I4 uc dC Uq uA nK r8 4y LE tF Ek m9 Zv PB M9 XQ XC gM kM Cf aD GD c3 3K 4S hq tT xl VH fh NP vu J6 GL gm JV hg py II xC a5 Bo</span>
    </div>
    <center>
        <div style="background-color: black">
            <textarea cols="100" rows="10" id="text-area"></textarea>
            <br>
            <label id="result" style="color: red" hidden>Wait...</label>
            <label id="result1" style="color: green" hidden>Done...</label>
            <center>
                <br>
                <input type="submit" id="key_val" value="Find The Key" style="color: red">
            </center>
        </div>
    </center>
    <br>

</div>
<script>
    $(document).bind("contextmenu",function (e) {
        e.preventDefault();
    });
</script>
</body>
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="myscript.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</html>
