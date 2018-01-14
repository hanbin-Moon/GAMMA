<?php
  function average($score)
  {
    $sum=0;
    $size=sizeof($score);
    for($i=0; $i<$size; $i++)
      $sum+=$score[$i];
    return ($sum/$size);
  }
  ?>
