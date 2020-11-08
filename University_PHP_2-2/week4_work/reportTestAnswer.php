<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
    .a {
      text-align: right
    }

    #title {
      color: blue;
      font-size: 20px;
      font-weight: bold;
    }

    td {
      padding: 3px;
    }
  </style>

</head>

<body>
  <form class="" name="club_form" action="m2.php" method="post">
    <table>
      <tr>
        <td class="a" id="title">입력한 내용입니다.</td>
        <td></td>
      </tr>
      <tr>
        <td class="a">아이디</td>
        <td><?= $_POST["mid"]  ?></td>
      </tr>
      <tr>
        <td class="a">비밀번호</td>
        <td><?= $_POST["mpass1"] ?></td>
      </tr>
      <tr>
        <td class="a">이름</td>
        <td><?= $_POST["mname"] ?></td>
      <tr>
        <td class="a">휴대폰</td>
        <td><?= $_POST["mphone"] ?></td>
      <tr>
        <td class="a">성별</td>
        <td><?= $_POST["mgender"] ?></td>
      </tr>
      <tr>
        <td class="a" class="a">학년</td>
        <td><?= $_POST["myear"] ?></td>
      </tr>
      <tr>
        <td class="a">희망 동호회</td>
        <td>
          <?php
            $cnt = count($_POST["mclub"]);
            for ($i=0; $i < $cnt ; $i++) {
              $temp = $_POST['mclub'][$i];
              //clup.php에 goclub의 값을 같이 보냄
              echo "<a href='club.php?goclub=$temp'>$temp</a>";
              if ($i<$cnt-1) {
                echo ",";
              }
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="a">가입동기</td>
        <td><?= str_replace("\n","<br/>",$_POST["mmotive"])  ?></td>
      </tr>
    </table>
  </form>
</body>

</html>
