<?php
  $count = 0;
  for($num=100; $num<=500;$num++){
    //짝수일때 출력
    if($num%2 ==0){
      echo"$num ";
      //출력시 count를 1증가시키고 2의배수만큼 출력됫을시 줄바꿈
      $count ++;
      if($count%2==0){
        echo "<br>";
      }
    }
  }
 ?>
