<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>OneVision</title>
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        

        body{
            margin: 0;
            padding: 0;
            overflow-x: hidden ;
            font-family: 'Roboto', sans-serif;
        }
        ::-webkit-scrollbar{
            display: none;
        }
     

        .header{
            margin-top: 300px;
            margin: auto;
            margin-left: 15%;
            width: 70%;
            height: 150px;
            z-index: 0;
        }

        #logo{
            margin-top: -148px;
            margin-left: calc(50% - 35px);
            display: flex;
            position: absolute;
            height: 75px;
            width: 70px;
            opacity: 0.9;
            z-index: 1;
            border-radius: 15px;

        }


        .containor{
            width: 100%;
            /* margin-top: 10px; */
            margin-top:-45px;
            position: absolute;
            justify-content: center;
            align-items: center;
            padding-top: 50px;
            background-image: linear-gradient(to bottom,rgba(255, 255, 255, 0) -0% , rgb(255, 255, 255) 110px );
        }

        #login{
            margin: auto;
            width: 100px;
            font-size: 25PX;
            padding: 15px;
            padding-bottom: 10px;
            color: black;
            background-color: gold;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0px -4px 5px  rgb(54, 54, 54);
        }


        .input{
            width: 80%;
            margin-left:7%;
            border-radius: 8px;
            margin-top: 15px;
            border: 1px solid rgb(69, 69, 69);
            outline: none;
            font-size: 19px;
            transition: all 0.1s;
        }

        .input:focus{
            border: 1px solid dodgerblue;
            color: dodgerblue;
        }

        .gndRadio{
            margin-left: 40%;
            display: inline;
            margin-top: 15px;
        }

        p{
            font-size: 19px;
            margin-left: 10%;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        #btn{
            width: 80%;
            text-align: center;
            border-radius: 10px;
            margin-left: 10%;
            margin-bottom: 20px;
            background-color: navy;
            border: 2px solid black;
            font-size: 20PX;
            padding-top: 10PX;
            padding-bottom: 10PX;
            color: white;
            transition: all 0.2s;
        }

        #btn:focus{
            background-color: darkblue;
            color: black;
        }


        @media screen and (max-width: 425px) {
            H1{
            margin-top: -148px;
            margin-left: 121px;
            font-weight: 900;
            display: flex;
            z-index: 1;
        }
        #slogan{
            font-size: 10px;
            margin-top: -10px;
            margin-left: 120px;
        }
            
        }

        #clg, #crs {
            width: 80%;
            margin-left:7%;
            border-radius: 8px;
            margin-top: 15px;
            border: 1px solid rgb(69, 69, 69);
            outline: none;
            font-size: 19px;
            transition: all 0.1s;
        }
        #clg:focus, #crs:focus{
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
            border-top: 1px solid dodgerblue;
            border-left: 1px solid dodgerblue;
            border-right: 1px solid dodgerblue;
            border-bottom: none;
        }

        #clg:focus + #clgList, #crs:focus + #crsList{
            display: block;
        }

        #clgList, #crsList {
            list-style-type: none;
            padding: 0;
            margin-left: 7%;
            margin-top: 0px;
            width: calc(80% + 4px);
            max-height: 180px; 
            overflow: scroll;
            border-bottom: 1px solid  dodgerblue;
            border-left: 1px solid  dodgerblue;
            border-right: 1px solid  dodgerblue;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: px;
            position: absolute;
            display: none;
            transition: all 0.1s;
        }

        #clgList li .clgName, #crsList li .crsName {
            border: none; 
            margin-top: -1px; 
            background-color: #f6f6f6;
            padding: 7px;  
            text-decoration: none; 
            font-size: 19px; 
            color: black; 
            text-align: left;
            display: block;  
            transition: all 0.2s;
            width: 100%;
        }

        #clgList li .clgName:hover:not(.header), #crsList li .crsName:hover:not(.header) {
            border: 0.5px solid black;
            font-size: 12px;
            background-color: dodgerblue;
            color: white; 
        }

        #PPlabe{
            margin-left: -10% ;
            margin-top: 10px;
            margin-bottom: 0x;
            width: 80%;
            margin-left: 11%;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .pre{
            text-align: center;
            font-size: 15px;
            margin-left: 0%;
            width: 100%;
            margin-bottom: 5px;
            margin-top: 10px;
        }
        #PPImage{
            margin-bottom: 5px;
            margin-top: 0;
            margin-left: 10%;
            padding-left: 10%;
            width: 80%;
            border-radius: 5px;
        }

        #PPImage::file-selector-button{
            background-color: dodgerblue;
            color: white;
            border: 3px solid white;
            border-radius: 50px;
            text-align: center;
            padding-bottom: 2px;
            font-size: 20px;
        }
    </style>
</head>
<body onload="window.scroll(0, 0)">
<img src="image/logi-removebg-preview.png" tabindex="0" id="first" class="header" alt="image there are some students and writers" >
<div class="containor">
    <p tabindex="4" id="login" >Register</p>
        <p class="pre">
            Hey, welcome to OneVision. <br>
            Can we get some bellow information? For your registration.
        </pr>
    <form action="/OneVision/register.php" method="POST">
        <input type="text" tabindex="5" class="input" name="FNAME" id="FName" maxlength="20" placeholder="Enter your first name">
        <input type="text" tabindex="6" class="input" name="LNAME" id="LName"  maxlength="20"  placeholder="Enter your last name"><br>
        <input type="radio" tabindex="7" class="gndRadio" name="GENDER" value="MALE" id="gndRadio1" class="input"  id="Gender-ml" aria-label="Male"> <label for="Male" tabindex="8"> Male</label>
        <input type="radio" tabindex="9" class="gndRadio" name="GENDER" value="FEMALE" class="input"  id="Gender-Fml" aria-label="Female"> <label for="Female" tabindex="10"> Female</label>
        <textarea name="ADDRESS" tabindex="13" name="ADDRESS" id="" class="input" cols="30" rows="3" placeholder="Enter your current address"></textarea>
        <input type="text" tabindex="14" name="CITY" class="input"  id="CrntCity" placeholder="Enter your city" value="AHMEDABAD" disabled>
        <input type="email" tabindex="15" class="input" name="EMAIL" id="Email" maxlength="30" placeholder="Enter your E-mail address ">
        <input type="text" tabindex="16" class="input" name="MOBILE" id="Mobile" maxlength="10" placeholder="Enter your mobile number">
        <input type="text" tabindex="17" id="clg" class="input" name="COLLEGE"  onkeyup="clgFIlter()" placeholder="Search your college ..">
            <ul id="clgList">
                <li class="clgBlock"><input type="button" tabindex="18" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="AHMEDABAD ARTS AND COMERCE COLLEGE"></li>
                <li class="clgBlock"><input type="button" tabindex="19" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="ALT TRAINING COLLEGE FOUNDATION" ></li>
                <li class="clgBlock"><input type="button" tabindex="20" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="AROMA COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="21" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="BHAVAN`S R. A. OF ARTS AND COMMERCE COLLEGE"></li>

                <li class="clgBlock"><input type="button" tabindex="22" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="C. U. SHAH ARTS COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="23" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="C. U. SHAH COMMERCE COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="24" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="GLS COLLEGE FOR GIRLS" ></li>
                <li class="clgBlock"><input type="button" tabindex="25" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="GUJARAT COMMERCE COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="26" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="GUJARAT UNIVERSITY CAMPUS" ></li>

                <li class="clgBlock"><input type="button" tabindex="27" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="H. K. ARTS COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="28" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="H. L. COMMERCE COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="29" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="H. R. MAHETA ARTS COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="30" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="L. D. ARTS COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="31" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="L. C. M. ARTS COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="32" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="P. D. PANDYA MAHILA COMMERCE COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="33" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="M. B. PATEL RASHTRABHASHA VINAYAN BHAVAN" ></li>

                <li class="clgBlock"><input type="button" tabindex="34" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="N. M. ZALA COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="35" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="NAVGUJARAT CAMPUS" ></li>

                <li class="clgBlock"><input type="button" tabindex="36" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="PRESIDENT SCINCE COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="37" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="R. C. COLLEGE OF COMMERCE"></li>
                <li class="clgBlock"><input type="button" tabindex="38" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="R. D. SHAH ARTS COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="39" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="R. H. PATEL COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="40" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="R. J. TIBERWAL COMMERCE COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="41" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="S. R. MEHTA ARTS COLLEGE"></li>
                <li class="clgBlock"><input type="button" tabindex="42" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="SETH C. N. COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="43" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="SHREE NARAYAN COLLEGE OF COMMERCE" ></li>
                <li class="clgBlock"><input type="button" tabindex="44" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="SILVER OAK COLLEGE OF COMPUTER APPLICATION"></li>
                <li class="clgBlock"><input type="button" tabindex="45" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="SOMLALIT COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="46" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="ST. XAVIERS COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="47" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="SWAMINARAYAN COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="48" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="UMIYA ARTS AND COMMERCE COLLEGE" ></li>
                <li class="clgBlock"><input type="button" tabindex="49" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="UMIYA EDUCATION COLLEGE" ></li>

                <li class="clgBlock"><input type="button" tabindex="50" class="clgName" onclick="getClg(college=this .value)" onmouseover="getClg(college=this .value)" value="VIVEKANAND COLLEGE OF COMMERCE" ></li>
            </ul>
            <input type="text" id="crs" tabindex="51" class="input" name="COURSE" onkeyup="crsFilter()" placeholder="Search your course ..">
            <ul id="crsList">
                <li class="crsBlock"><input type="button" tabindex="52" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="B. A"></li>
                <li class="crsBlock"><input type="button" tabindex="53" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="B. ED"></li>
                <li class="crsBlock"><input type="button" tabindex="54" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="BCA"></li>
                <li class="crsBlock"><input type="button" tabindex="55" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="B. COM"></li>
                <li class="crsBlock"><input type="button" tabindex="56" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="LLB"></li>
                <li class="crsBlock"><input type="button" tabindex="57" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="M. A."></li>
                <li class="crsBlock"><input type="button" tabindex="58" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="M. ED"></li>
                <li class="crsBlock"><input type="button" tabindex="59" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="M. COM"></li>
                <li class="crsBlock"><input type="button" tabindex="60" class="crsName" onclick="getCrs(course=this.value)" onmouseover="getCrs(course=this.value)" value="PHD"></li>   

            </ul>
        <p aria-label="click to upload your image"  tabindex="61" id="PPlabe" for="UploadImage">
            Great.! Now it`s last step. <br>
            Please upload your passport size photo :    </p>
        <input type="file" tabindex="62" name="PPImage" id="PPImage">
        <input type="submit" tabindex="63" id="btn"  value="SUBMIT" onclick="" href="#" >
     </form>
</div>

<?php

    error_reporting(E_ERROR | E_PARSE);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "OneVision";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
    }

    
    $temp1 = $_POST['FNAME'];
    $temp2 = $_POST['LNAME'];
    $temp3 = $_POST['GENDER'];
    $temp4 = $_POST['ADDRESS'];
    $temp5 = $_POST['CITY'];
    $temp6 = $_POST['EMAIL'];
    $temp7 = $_POST['MOBILE'];

    $fname = $temp1 . ' ' . $emp2;
    $name = strtoupper($fname);
    $gnd = strtoupper($temp3);
    $adrs = strtoupper($temp4);
    $city = strtoupper($temp5);
    $mail = strtoupper($temp6);
    $mobile = strtoupper($temp7);
    $clg = $_POST['COLLEGE'];
    $crs = $_POST['COURSE'];
    $imgname = $_FILES['PPImage'] ['name'];
    $imgtype = $_FILES['PPImage'] ['type'];
    $imgtempname = $_FILES['PPImage'] ['tmp_name'];
    $sql = "INSERT INTO `student temp` ( `NAME`, `GANDER`, `ADDRESS`, `CITY`, `EMAIL`, `MOBILE`, `COLLEGE`, `COURSE`,  `IMAGE NAME`, `IMAGE`,`TIME`) VALUES ( '$name', '$gnd', '$adrs', '$city', '$mail', '$mobile', '$clg', '$crs', '$imgname', '$imgtype', current_timestamp())";
    $resuilt = mysqli_query($conn, $sql) ;

    if($resuilt){
    } else {
    }


?>


<script>

document.addEventListener('DOMContentLoaded',  function() {
    const head = document.getElementById('first');
    head.focus();
});

function validate() {
    var input = document.getElementsByClassName('input');
    const phone = document.getElementById('Mobile').value;
    const numPhone = phone.replace(/\D/g, '');

            if (numPhone.length === 10) {
                console.log('number have 10 digit' + numPhone.length);
            } else {
                console.log('number doesn`t have 10 digit' + numPhone.length);
                phone.style.border = '2px solid red';
                phone = null;
                phone.placeholder = 'Entered phone number is unvalid, Please enter a 10 digit phone number';
                phone.focus();      
            }

    let i = 0;
    var a = 0;
    while (i <= input.length ) {

        if (input[i].value === null || input[i].value === '') {
            input[i].style.border = '1.2px solid red ';
            input[i].placeholder = 'Please Enter A ' + input[i].id;
            input[i].focus();
            a--;
            break;
        } else {
            input[i].style.border = '1px solid rgb(69, 69, 69)';
            a++;
            i++;
            if (i == input.length && a == i){
                window.location.href = 'register.html';
            }
        };
    }
};

function togglePassword() {
    let input = document.getElementById('Password');
    let checkbox = document.getElementById('showPassword');
    let txt = document.getElementById('cbText');

    if (checkbox.checked){
        input.type = 'text';
        checkbox.setAttribute('aria-label', 'Hide Password');
        txt.textContent = 'Uncheck the checkbox, To hide the password.';
        input.focus();
    } else {
        input.type = 'password';
        checkbox.setAttribute('aria-label', 'Show Password');
        txt.textContent = 'Check the checkbox, To show the password.';
        input.focus();
    }

};

function clgFIlter() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('clg');
  filter = input.value.toUpperCase();
  ul = document.getElementById("clgList");
  li = document.getElementsByClassName('clgBlock');

  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("input")[0];
    txtValue = a.value ;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
};

function crsFilter() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('crs');
  filter = input.value.toUpperCase();
  ul = document.getElementById("crsList");
  li = document.getElementsByClassName('crsBlock');

  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("input")[0];
    txtValue = a.value ;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
};

 var collage = null;
function getClg(college) {
    let input = document.getElementById('clg');
    input.value = college;
};

var course = null;
function getCrs(course) {
    let input = document.getElementById('crs');
    input.value = course;
};



</script>
</body>
</html>