<?php
  function MaxTwo($i,$j){
    return ($i>$j ? $i:$j);
  }

  function MaxThree($x,$y,$z){
    return MaxTwo(MaxTwo($x,$y),MaxTwo($y,$z));
  }

  $a = 10;
  $b = 5;
  $c = 7;

  $max_num = MaxThree($a,$b,$c);

  echo "$a, $b, $c 중 가장큰수 : $max_num";
?>
