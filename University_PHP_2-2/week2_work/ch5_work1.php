<?php
  $score = array(87,76,98,87,87,93,79,85,88,63);
  $sum = 0;

  for ($i=0; $i < count($score) ; $i++) {
    $sum += $score[$i];
  }
  $avg = $sum/count($score);
  echo "입력된 정수 : ";
  for ($i=0; $i < count($score) ; $i++) {
    echo $score[$i]." ";
  }
  echo "<br>";
  echo "합계 : $sum, 평균 : $avg";
?>