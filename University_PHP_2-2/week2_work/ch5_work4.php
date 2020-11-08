<?php
echo "<table border=1>";
for ($i=0; $i <10 ; $i++) {
  echo "<tr align = center>";
  for ($j=2; $j <10 ; $j++) {
    if($i==0){
      echo "<th width = 100> ".$j."단 </th>";
    }else {
      echo "<th width = 100> $j X $i =".($j*$i)." </th>";
    }
  }
    echo "</tr>";
}
echo "</table>";
?>
