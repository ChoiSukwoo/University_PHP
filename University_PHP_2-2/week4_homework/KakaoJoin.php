  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <script>

      function calc(val){
        var origin = parseInt(val.length);

        if(val == ""){
            document.getElementById('nickname_ch').value = "";
        }else{
            document.getElementById('nickname_ch').value = origin + "/20";
        }
      }


      function selftest() {
        if (document.join.email.value == "") {
          alert("이메일 주소를 입력하세여")
          document.join.email.focus();
          exit;
        }
        if (document.join.pass1.value == "") {
          alert("비밀번호를 입력하세여")
          document.join.pass1.focus();
          exit;
        }
        if (document.join.pass2.value == "") {
          alert("비밀번호 재확인을 입력하세여")
          document.join.pass2.focus();
          exit;
        }
        if (document.join.pass1.value != document.join.pass2.value) {
          alert("비밀번호가 서로 일치하지 않습니다.")
          document.join.pass2.focus();
          exit;
        }
        if (document.join.nick.value == "") {
          alert("닉네임을 입력하세여.")
          document.join.nick.focus();
          exit;
        }
        if (document.join.phone_2.value == "") {
          alert("전화번호를 입력하세요")
          document.join.phone_2.focus();
          exit;
        }
        var phone = document.join.phone_2.value

        phone = phone.split('-').join('');



        if (phone.length != 11) {
          alert("전화번호는 숫자 11자리로 입력해 주세요")
          document.join.phone_2.focus();
          exit;
        }


        if (/^((01[1|6|7|8|9])[1-9]+[0-9]{6,7})|(010[1-9][0-9]{7})$/.test(phone) ) {

        }else{
          alert("전화번호는 숫자 11자리로 입력해 주세요");
          document.join.phone_2.focus();
          exit;
        }

        if (document.join.year.value == "" | document.join.month.value == "" | document.join.day.value == "") {
          alert("생년월일을 선택하시오")
          exit;
        }

        if (document.join.gender.value == "" ) {
          alert("성별을 선택하시오")
          document.join.gender.focus();
          exit;
        }

        document.join.submit();
      }


      </script>
    </head>
  <style>
     body {
       font-family: "Malgun Gothic";

     }

     input::-ms-input-placeholder { color: #d6cccc; }

     input::-webkit-input-placeholder { color: #d6cccc; }

     input::-moz-placeholder { color: #d6cccc; }


     div.checkbox-wrap {
       display: inline-flex;
       align-items: center;
     }

     input[type='checkbox'],   input[type='checkbox']:checked {
       appearance: none;
       width: 20px;
       height: 20px;
       border-radius: 100%;
     }

     input[type='checkbox'] {
       background-image:url(check.png);
       background-repeat : no-repeat;
       background-size : cover;
       margin:0px;
     }
     input[type='checkbox']:checked {
       background-image:url(check_ch.png);
       background-repeat : no-repeat;
       background-size : cover;
      }




     div.radio-wrap {
       display: inline-flex;
       align-items: center;
     }

     input[type='radio'],   input[type='radio']:checked {
       appearance: none;
       width: 20px;
       height: 20px;
       border-radius: 100%;
     }

     input[type='radio'] {
       background-image:url(radio_none.png);
       background-repeat : no-repeat;
       background-size : cover;
     }
     input[type='radio']:checked {
       background-image:url(radio_check.png);
       background-repeat : no-repeat;
       background-size : cover;
      }



     #title{
       margin-top : 50px;
       margin-bottom:35px;
     }

      #border{
        width: 440px;
        height: 824px;
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

      #inputEmail{
        height: 47;
        border-bottom: 1px solid #ebebeb;
        padding: 11px 70px 11px 0;
        text-align:left;
        box-sizing: border-box;
        font-size:16px;
      }

      #emilinfo {
        width: 100%;
        text-align:left;
        height:40px;
        margin-top: 2px;
        font-size: 9px;
        padding-left: 15px ;
        margin-bottom:40px;
        color: #959595;
        font-family: NotoSans-Regular,AppleSDGothicNeo-Regular,"맑은 고딕",Malgun Gothic,"돋움",dotum,sans-serif;
      }

        #emailDeft{
          width: 100%;
          height: 69px;
          border : 0px;
          text-align:left;
          box-sizing: border-box;
          font-size:16px;
          font-weight: bold;
        }

      #email_right{
        height: 23px;
        width: 20%;
        right: 0;
        min-width: 55px;
        text-align: right;
        color: #7c7c7c;
        weight:bold;
        border-bottom: 2px solid #ebebeb;
        padding: 11px 0 11px 0;
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
      #phoneMessage{
        margin-top: 20px;
        font-size: 16px;
        line-height: 1.5;
        display: inline-block;
        height: 42px;
        padding: 0 25px;
        color: #252525;
        border: 1px solid #dbdbdb;
        border-radius: 30px;
        box-sizing: border-box;
        background-color: white;
        float : right;
      }
      #radioBox{
        height: 52px;
        text-align:left;
        font-size: 18px;
        vertical-align: center
      }
      #NextButton{
        margin-top: 20px;
        display: block;
        width: 100%;
        height: 50px;
        padding: 0;
        border: 0;
        border-radius: 4px;
        font-size: 15px;
        color: #333;
        background-color: #f6f6f6;
      }

      #phone_first{
        width: 85px;
        height: 24px;
        border : 0px;
        border-right: 1px solid #dbdbdb;
      }
      #phone_second{
        width:345px;
        height:24px;
        outline: none;
        caret-color: #f7e317;
        border : 0px;
        text-align:left;
        box-sizing: border-box;
        font-size:16px;
        margin-bottom: 10px;
        font-weight: bold;
      }
      #nickName{
        float: left;
        width: 350px;
        outline: none;
        caret-color: #f7e317;
        height: 24px;
        border: 0px;
        text-align: left;
        box-sizing: border-box;
        font-size: 16px;
        margin-bottom: 10px;
        font-weight: bold;
      }
      #nickname_ch{
        background-color: white;
        float: right;
        width: 90px;
        outline: none;
        height: 24px;
        border: 0px;
        text-align: right;
        box-sizing: border-box;
        font-size: 16px;
        margin-bottom: 10px;
        font-weight: bold;
      }
      .year{
        font-weight: bold;
        height: 25px;
        border : 0px;

      }
     </style>
     <body>
       <form class="" name="join" action="joinEnter.php" method="post">
          <center>
            <h1 id = "title">kakao</h1>

            <div id="border">
              <div id="info">
                카카오계정 정보를 입력해주세요
              </div>
              <div class ="infoText">카카오계정 이메일</div>
              <div id="emailDeft">
                <input type="text" class="inputText" style="float:left; width:80%"; placeholder="이메일 주소 입력" name ="email">
                <div id="email_right" style="float:right;"> @daum.net </div>
              </div>
              <ul id="emilinfo">
                <li><span class="ico_account ico_dot"></span>카카오계정으로 사용할 Daum 이메일을 만들어주세요.</li>
                <li><span class="ico_account ico_dot"></span>만약 사용중인 Daum메일이 있다면, Daum아이디로 로그인하여 계정을 가입해주세요.</li>
              </ul>
              <div class ="infoText">비밀번호 </div>
              <input type="text" class="inputText"; placeholder="비밀번호 (8~32자리)" name ="pass1">
              <input type="text" class="inputText"; placeholder="비밀번호 재입력" name ="pass2">
              <div class ="infoText" style="margin-top : 30px"> 닉네임 </div>
              <div class ="inputText">
                <input type="text" id="nickName" placeholder="닉네임을 입력해주세요."  maxlength=20 onkeyup="calc(this.value)"  name ="nick">
                <input type="text" id="nickname_ch" disabled>
              </div>
              <div class ="infoText" style="margin-top : 30px"> 전화번호 </div>
              <div class="inputText">
               <select name="phone_1" id="phone_first">
                  <option value="+82">+82 </option>
                  <option value="+1">+1 Canada</option>
                  <option value="+1">+1 United States</option>
                  <option value="+81">+81 日本 (Japan)</option>
                  <option value="+63">+63 Philippines</option>
                  <option value="+62">+62 Indonesia</option>
                  <option value="+84">+84 Vietnam</option>
                  <option value="+55">+55 Brazil</option>
                  <option value="+966">+966 Saudi Arabia</option>
                  <option value="+86">+86 中国 (China)</option>
                  <option value="+852">+852 Hong Kong</option>
                  <option value="+44">+44 United Kingdom</option>
                  <option value="+61">+61 Australia</option>
                  <option value="+49">+49 Germany</option>
                  <option value="+93">+93 Afghanistan</option>
                  <option value="+355">+355 Albania</option>
                  <option value="+213">+213 Algeria</option>
                  <option value="+1 684">+1 684 American Samoa</option>
                  <option value="+376">+376 Andorra</option>
                  <option value="+244">+244 Angola</option>
                  <option value="+1 264">+1 264 Anguilla</option>
                  <option value="+672">+672 Antarctica</option>
                  <option value="+1 268">+1 268 Antigua and Barbuda</option>
                  <option value="+54">+54 Argentina</option>
                  <option value="+374">+374 Armenia</option>
                  <option value="+297">+297 Aruba</option>
                  <option value="+61">+61 Australia</option>
                  <option value="+43">+43 Austria</option>
                  <option value="+994">+994 Azerbaijan</option>
                  <option value="+1 242">+1 242 Bahamas</option>
                  <option value="+973">+973 Bahrain</option>
                  <option value="+880">+880 Bangladesh</option>
                  <option value="+1 246">+1 246 Barbados</option>
                  <option value="+375">+375 Belarus</option>
                  <option value="+32">+32 Belgium</option>
                  <option value="+501">+501 Belize</option>
                  <option value="+229">+229 Benin</option>
                  <option value="+1 441">+1 441 Bermuda</option>
                  <option value="+975">+975 Bhutan</option>
                  <option value="+591">+591 Bolivia</option>
                  <option value="+387">+387 Bosnia and Herzegovina</option>
                  <option value="+267">+267 Botswana</option>
                  <option value="+55">+55 Brazil</option>
                  <option value="+246">+246 British Indian Ocean Territory</option>
                  <option value="+1 284">+1 284 British Virgin Islands</option>
                  <option value="+673">+673 Brunei</option>
                  <option value="+359">+359 Bulgaria</option>
                  <option value="+226">+226 Burkina Faso</option>
                  <option value="+257">+257 Burundi</option>
                  <option value="+237">+237 Cameroon</option>
                  <option value="+855">+855 Cambodia</option>
                  <option value="+1">+1 Canada</option>
                  <option value="+238">+238 Cape Verde</option>
                  <option value="+1 345">+1 345 Cayman Islands</option>
                  <option value="+36">+36 Central African Republic</option>
                  <option  value="+235">+235 Chad</option>
                  <option  value="+56">+56 Chile</option>
                  <option  value="+86">+86 China</option>
                  <option  value="+61">+61 Christmas Island</option>
                  <option  value="+61">+61 Cocos (Keeling) Islands</option>
                  <option  value="+57">+57 Colombia</option>
                  <option  value="+242">+242 Congo - Brazzaville</option>
                  <option  value="+243">+243 Congo - Kinshasa</option>
                  <option  value="+682">+682 Cook Islands</option>
                  <option  value="+506">+506 Costa Rica</option>
                  <option  value="+385">+385 Croatia</option>
                  <option  value="+53">+53 Cuba</option>
                  <option  value="+599">+599 Curacao</option>
                  <option  value="+357">+357 Cyprus</option>
                  <option  value="+420">+420 Czech Republic</option>
                  <option  value="+45">+45 Denmark</option>
                  <option  value="+253">+253 Djibouti</option>
                  <option  value="+1 767">+1 767 Dominica</option>
                  <option  value="+1 809">+1 809 Dominican Republic</option>
                  <option  value="+1 829">+1 829 Dominican Republic 2</option>
                  <option value="+1 849">+1 849 Dominican Republic 3</option>
                  <option  value="+670">+670 East Timor</option>
                  <option  value="+593">+593 Ecuador</option>
                  <option  value="+20">+20 Egypt</option>
                  <option  value="+503">+503 El Salvador</option>
                  <option value="+240">+240 Equatorial Guinea</option>
                  <option  value="+291">+291 Eritrea</option>
                  <option  value="+372">+372 Estonia</option>
                  <option  value="+251">+251 Ethiopia</option>
                  <option value="+500">+500 Falkland Islands</option>
                  <option value="+298">+298 Faroe Islands</option>
                  <option  value="+679">+679 Fiji</option>
                  <option  value="+358">+358 Finland</option>
                  <option  value="+33">+33 France</option>
                  <option  value="+594">+594 French Guiana</option>
                  <option  value="+689">+689 French Polynesia</option>
                  <option  value="+241">+241 Gabon</option>
                  <option  value="+220">+220 Gambia</option>
                  <option  value="+995">+995 Georgia</option>
                  <option value="+49">+49 Germany</option>
                  <option  value="+233">+233 Ghana</option>
                  <option value="+350">+350 Gibraltar</option>
                  <option  value="+30">+30 Greece</option>
                  <option  value="+299">+299 Greenland</option>
                  <option  value="+1 473">+1 473 Grenada</option>
                  <option  value="+590">+590 Guadeloupe</option>
                  <option  value="+1 671">+1 671 Guam</option>
                  <option  value="+502">+502 Guatemala</option>
                  <option  value="+44">+44 Guernsey</option>
                  <option  value="+224">+224 Guinea</option>
                  <option  value="+245">+245 Guinea-Bissau</option>
                  <option  value="+592">+592 Guyana</option>
                  <option  value="+509">+509 Haiti</option>
                  <option  value="+504">+504 Honduras</option>
                  <option  value="+852">+852 Hong Kong</option>
                  <option  value="+39">+39 Holy See (Vatican City)</option>
                  <option value="+36">+36 Hungary</option>
                  <option  value="+354">+354 Iceland</option>
                  <option value="+91">+91 India</option>
                  <option  value="+62">+62 Indonesia</option>
                  <option value="+98">+98 Iran</option>
                  <option  value="+964">+964 Iraq</option>
                  <option  value="+353">+353 Ireland</option>
                  <option value="+44">+44 Isle of Man</option>
                  <option  value="+972">+972 Israel</option>
                  <option  value="+39">+39 Italy</option>
                  <option value="+225">+225 Ivory Coast</option>
                  <option  value="+1 876">+1 876 Jamaica</option>
                  <option  value="+81">+81 Japan</option>
                  <option  value="+44">+44 Jersey</option>
                  <option  value="+962">+962 Jordan</option>
                  <option value="+7">+7 Kazakhstan</option>
                  <option  value="+254">+254 Kenya</option>
                  <option  value="+686">+686 Kiribati</option>
                  <option  value="+965">+965 Kuwait</option>
                  <option  value="+996">+996 Kyrgyzstan</option>
                  <option  value="+856">+856 Laos</option>
                  <option  value="+371">+371 Latvia</option>
                  <option  value="+961">+961 Lebanon</option>
                  <option value="+266">+266 Lesotho</option>
                  <option  value="+231">+231 Liberia</option>
                  <option  value="+218">+218 Libya</option>
                  <option  value="+423">+423 Liechtenstein</option>
                  <option  value="+370">+370 Lithuania</option>
                  <option value="+352">+352 Luxembourg</option>
                  <option  value="+853">+853 Macau SAR China</option>
                  <option value="+389">+389 Macedonia</option>
                  <option  value="+261">+261 Madagascar</option>
                  <option  value="+265">+265 Malawi</option>
                  <option  value="+60">+60 Malaysia</option>
                  <option  value="+960">+960 Maldives</option>
                  <option  value="+223">+223 Mali</option>
                  <option  value="+356">+356 Malta</option>
                  <option  value="+692">+692 Marshall Islands</option>
                  <option  value="+596">+596 Martinique</option>
                  <option  value="+222">+222 Mauritania</option>
                  <option  value="+230">+230 Mauritius</option>
                  <option  value="+269">+269 Mayotte</option>
                  <option  value="+52">+52 Mexico</option>
                  <option  value="+691">+691 Micronesia</option>
                  <option value="+373">+373 Moldova</option>
                  <option  value="+377">+377 Monaco</option>
                  <option  value="+976">+976 Mongolia</option>
                  <option  value="+382">+382 Montenegro</option>
                  <option  value="+1 664">+1 664 Montserrat</option>
                  <option  value="+212">+212 Morocco</option>
                  <option  value="+258">+258 Mozambique</option>
                  <option  value="+95">+95 Burma (Myanmar)</option>
                  <option value="+264">+264 Namibia</option>
                  <option  value="+674">+674 Nauru</option>
                  <option  value="+977">+977 Nepal</option>
                  <option value="+31">+31 Netherlands</option>
                  <option  value="+687">+687 New Caledonia</option>
                  <option  value="+64">+64 New Zealand</option>
                  <option  value="+505">+505 Nicaragua</option>
                  <option value="+227">+227 Niger</option>
                  <option  value="+234">+234 Nigeria</option>
                  <option  value="+683">+683 Niue</option>
                  <option  value="+672">+672 Norfolk Island</option>
                  <option  value="+1 670">+1 670 Northern Mariana Islands</option>
                  <option  value="+47">+47 Norway</option>
                  <option  value="+968">+968 Oman</option>
                  <option  value="+92">+92 Pakistan</option>
                  <option  value="+680">+680 Palau</option>
                  <option  value="+507">+507 Panama</option>
                  <option  value="+675">+675 Papua New Guinea</option>
                  <option  value="+595">+595 Paraguay</option>
                  <option  value="+51">+51 Peru</option>
                  <option  value="+63">+63 Philippines</option>
                  <option  value="+870">+870 Pitcairn Islands</option>
                  <option  value="+48">+48 Poland</option>
                  <option  value="+351">+351 Portugal</option>
                  <option  value="+1">+1 Puerto Rico</option>
                  <option  value="+974">+974 Qatar</option>
                  <option  value="+262">+262 Reunion</option>
                  <option  value="+82">+82 Republic of Korea</option>
                  <option value="+40">+40 Romania</option>
                  <option  value="+7">+7 Russia</option>
                  <option value="+250">+250 Rwanda</option>
                  <option  value="+590">+590 Saint Barthelemy</option>
                  <option  value="+290">+290 Saint Helena</option>
                  <option  value="+1 869">+1 869 Saint Kitts and Nevis</option>
                  <option  value="+1 758">+1 758 Saint Lucia</option>
                  <option  value="+1 721">+1 721 Saint Martin</option>
                  <option  value="+1 599">+1 599 Saint Martin [Old]</option>
                  <option  value="+508">+508 Saint Pierre and Miquelon</option>
                  <option  value="+1 784">+1 784 Saint Vincent and the Grenadines</option>
                  <option  value="+685">+685 Samoa</option>
                  <option  value="+378">+378 San Marino</option>
                  <option  value="+239">+239 Sao Tome and Principe</option>
                  <option  value="+966">+966 Saudi Arabia</option>
                  <option  value="+221">+221 Senegal</option>
                  <option  value="+381">+381 Serbia</option>
                  <option  value="+248">+248 Seychelles</option>
                  <option  value="+232">+232 Sierra Leone</option>
                  <option  value="+65">+65 Singapore</option>
                  <option  value="+599">+599 Sint Maarten</option>
                  <option  value="+421">+421 Slovakia</option>
                  <option  value="+386">+386 Slovenia</option>
                  <option  value="+677">+677 Solomon Islands</option>
                  <option  value="+252">+252 Somalia</option>
                  <option  value="+27">+27 South Africa</option>
                  <option  value="+82">+82 South Korea</option>
                  <option value="+211">+211 South Sudan</option>
                  <option  value="+34">+34 Spain</option>
                  <option  value="+94">+94 Sri Lanka</option>
                  <option  value="+249">+249 Sudan</option>
                  <option  value="+597">+597 Suriname</option>
                  <option  value="+47">+47 Svalbard and Jan Mayen</option>
                  <option  value="+268">+268 Swaziland</option>
                  <option  value="+46">+46 Sweden</option>
                  <option  value="+41">+41 Switzerland</option>
                  <option  value="+963">+963 Syria</option>
                  <option value="+886">+886 Taiwan</option>
                  <option  value="+992">+992 Tajikistan</option>
                  <option  value="+255">+255 Tanzania</option>
                  <option value="+66">+66 Thailand</option>
                  <option  value="+228">+228 Togo</option>
                  <option  value="+690">+690 Tokelau</option>
                  <option  value="+676">+676 Tonga</option>
                  <option  value="+1 868">+1 868 Trinidad and Tobago</option>
                  <option  value="+216">+216 Tunisia</option>
                  <option value="+90">+90 Turkey</option>
                  <option  value="+993">+993 Turkmenistan</option>
                  <option  value="+1 649">+1 649 Turks and Caicos Islands</option>
                  <option  value="+688">+688 Tuvalu</option>
                  <option  value="+1 340">+1 340 US Virgin Islands</option>
                  <option  value="+256">+256 Uganda</option>
                  <option  value="+380">+380 Ukraine</option>
                  <option value="+971">+971 United Arab Emirates</option>
                  <option  value="+44">+44 United Kingdom</option>
                  <option  value="+1">+1 United States</option>
                  <option value="+699">+699 United States Minor Outlying Islands</option>
                  <option value="+598">+598 Uruguay</option>
                  <option value="+998">+998 Uzbekistan</option>
                  <option value="+678">+678 Vanuatu</option>
                  <option value="+58">+58 Venezuela</option>
                  <option value="+84">+84 Vietnam</option>
                  <option value="+681">+681 Wallis and Futuna</option>
                  <option value="+212">+212 Western Sahara</option>
                  <option value="+967">+967 Yemen</option>
                  <option value="+260">+260 Zambia</option>
                  <option value="+263">+263 Zimbabwe</option>
                  
                </select>
                <input type="text" id="phone_second"  placeholder="전화번호"  name="phone_2">
              </div>
              <div style="height : 100px">
                <input type="button" id = "phoneMessage" value = "인증번호 전송">
              </div>
              <div class="infoText">생일/성별</div>
              <div class="inputText">
                <select name="year" class = "year" style =" width:57px; margin-right:65px ">
                  <option value="">년도</option>
                  <option value="1900">1900</option>
                  <option value="1901">1901</option>
                  <option value="1902">1902</option>
                  <option value="1903">1903</option>
                  <option value="1904">1904</option>
                  <option value="1905">1905</option>
                  <option value="1906">1906</option>
                  <option value="1907">1907</option>
                  <option value="1908">1908</option>
                  <option value="1909">1909</option>
                  <option value="1910">1910</option>
                  <option value="1911">1911</option>
                  <option value="1912">1912</option>
                  <option value="1913">1913</option>
                  <option value="1914">1914</option>
                  <option value="1915">1915</option>
                  <option value="1916">1916</option>
                  <option value="1917">1917</option>
                  <option value="1918">1918</option>
                  <option value="1919">1919</option>
                  <option value="1920">1920</option>
                  <option value="1921">1921</option>
                  <option value="1922">1922</option>
                  <option value="1923">1923</option>
                  <option value="1924">1924</option>
                  <option value="1925">1925</option>
                  <option value="1926">1926</option>
                  <option value="1927">1927</option>
                  <option value="1928">1928</option>
                  <option value="1929">1929</option>
                  <option value="1930">1930</option>
                  <option value="1931">1931</option>
                  <option value="1932">1932</option>
                  <option value="1933">1933</option>
                  <option value="1934">1934</option>
                  <option value="1935">1935</option>
                  <option value="1936">1936</option>
                  <option value="1937">1937</option>
                  <option value="1938">1938</option>
                  <option value="1939">1939</option>
                  <option value="1940">1940</option>
                  <option value="1941">1941</option>
                  <option value="1942">1942</option>
                  <option value="1943">1943</option>
                  <option value="1944">1944</option>
                  <option value="1945">1945</option>
                  <option value="1946">1946</option>
                  <option value="1947">1947</option>
                  <option value="1948">1948</option>
                  <option value="1949">1949</option>
                  <option value="1950">1950</option>
                  <option value="1951">1951</option>
                  <option value="1952">1952</option>
                  <option value="1953">1953</option>
                  <option value="1954">1954</option>
                  <option value="1955">1955</option>
                  <option value="1956">1956</option>
                  <option value="1957">1957</option>
                  <option value="1958">1958</option>
                  <option value="1959">1959</option>
                  <option value="1960">1960</option>
                  <option value="1961">1961</option>
                  <option value="1962">1962</option>
                  <option value="1963">1963</option>
                  <option value="1964">1964</option>
                  <option value="1965">1965</option>
                  <option value="1966">1966</option>
                  <option value="1967">1967</option>
                  <option value="1968">1968</option>
                  <option value="1969">1969</option>
                  <option value="1970">1970</option>
                  <option value="1971">1971</option>
                  <option value="1972">1972</option>
                  <option value="1973">1973</option>
                  <option value="1974">1974</option>
                  <option value="1975">1975</option>
                  <option value="1976">1976</option>
                  <option value="1977">1977</option>
                  <option value="1978">1978</option>
                  <option value="1979">1979</option>
                  <option value="1980">1980</option>
                  <option value="1981">1981</option>
                  <option value="1982">1982</option>
                  <option value="1983">1983</option>
                  <option value="1984">1984</option>
                  <option value="1985">1985</option>
                  <option value="1986">1986</option>
                  <option value="1987">1987</option>
                  <option value="1988">1988</option>
                  <option value="1989">1989</option>
                  <option value="1990">1990</option>
                  <option value="1991">1991</option>
                  <option value="1992">1992</option>
                  <option value="1993">1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
                  <option value="2003">2003</option>
                  <option value="2004">2004</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                </select>

                <select name="month" class = "year" style =" width:44px; margin-right:59px ">
                  <option value="">월</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>

                <select name="day" class = "year" style =" width:44px;">
                  <option value="">일</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="3">4</option>
                  <option value="3">5</option>
                  <option value="3">6</option>
                  <option value="3">7</option>
                  <option value="3">8</option>
                  <option value="3">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>

                </select>

                <input type="checkbox" name="sun"  style ="margin-left:80px" value ="1">
                <text style="font-size:16px"> 음력</text>

              </div>


              <div id="radioBox">
                <input type="radio" name="gender" value="" checked style="padding-top:5px ">  <text ver>선택안함</text> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="1" >여성&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="2" >남성
              </div>
              <input type="button" name="" value="다음"    id="NextButton"   onclick="selftest()">
          </center>
       </form>
     </body>
   </html>
