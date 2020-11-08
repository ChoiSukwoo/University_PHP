
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>


    </script>
  </head>
  <?php
  function phoneChange($number){
  $number = str_replace('-','',$number);
  $renumber = substr($number,0,3);
  $renumber = $renumber."-";
  $renumber = $renumber.substr($number,3,4);
  $renumber = $renumber."-";
  $renumber = $renumber.substr($number,7,4);
  echo $renumber;
  }
   ?>
<style>
   body {
     font-family: "Malgun Gothic";

   }

   input::-ms-input-placeholder { color: #d6cccc; }

   input::-webkit-input-placeholder { color: #d6cccc; }

   input::-moz-placeholder { color: #d6cccc; }

   #title{
     margin-top : 50px;
     margin-bottom:35px;
   }

    #border{
      width: 440px;
      height: 424px;
      padding: 58px 69px 139px;
      border: 1px solid #e5e5e5;
    }


    #info{
      text-align:left;
      margin-bottom:54px;
      font-size: 24px;
      line-height: 34px;
      color: #252525;
      font-weight: normal;
    }

    .infoText{
      width: 100%;
      height: 18px;
      font-size:12px;
      text-align:left;
    }

    .inputText{
      width: 100%;
      outline: none;
      caret-color: #f7e317;
      height: 48px;
      border : 0px;
      border-bottom: 2px solid #ebebeb;
      padding: 11px 0 11px 0;
      text-align:left;
      box-sizing: border-box;
      font-size:16px;
      margin-bottom: 10px;
      font-weight: bold;

    }

    #phone_first{
      width: 85px;
      height: 24px;
      border : 0px;
      border-right: 1px solid #dbdbdb;
      float: left;
    }
    #phone_second{
      width:345px;
      height:24px;
      outline: none;
      float: right;
      caret-color: #f7e317;
      border : 0px;
      text-align:left;
      box-sizing: border-box;
      font-size:16px;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .year{
      font-weight: bold;
      height: 25px;
      border : 0px;
      float: left;

    }
   </style>
   <body>
     <form class="" name="join" action="joinEnter.php" method="post">
        <center>
          <h1 id = "title">kakao</h1>
          <div id="border">
            <div id="info">입력한 내용입니다.</div>
            <div class ="infoText">카카오계정 이메일</div>
            <div class="inputText" ><?= $_POST["email"]  ?></div>
            <div class ="infoText">비밀번호 </div>
            <div class="inputText" ><?= $_POST["pass1"] ?></div>
            <div class ="infoText" style="margin-top : 30px"> 닉네임 </div>
            <div class="inputText" ><?= $_POST["nick"] ?></div>
            <div class ="infoText" style="margin-top : 30px"> 전화번호 </div>
            <div class="inputText">
              <div  id="phone_first"><?= $_POST["phone_1"] ?></div>
              <div  id="phone_second"><?= phoneChange($_POST["phone_2"])?></div>
            </div>
            <div class="infoText">생일/성별</div>
            <div class="inputText">
              <div class = "year" style =" width:60px; margin-right:45px "><?= $_POST["year"] ?>년</div>
              <div class = "year" style =" width:40px; margin-right:35px "><?= $_POST["month"] ?>월</div>
              <div class = "year" style =" width:40px; margin-right:35px "><?= $_POST["day"] ?>일</div>
              <div class = "year" style =" width:40px; margin-right:35px "><?php if(empty($_POST["sun"])){echo "양력"; }else {echo "음력";};?></div>
              <div class = "year" style =" width:40px;"><?php if($_POST["gender"]==1){echo "여성"; }else if($_POST["gender"]==2){echo "남성";};?></div>
            </div>
        </center>
     </form>
   </body>
 </html>
