<?php

  echo "readcookie 실행<br>";
  for($i=0; $i<count($_COOKIE['Cart']; $i++){
      echo "쿠키 값 $i=" . $_COOKIE['Cart'][$i] . "<br>\n";
  }
 ?>
