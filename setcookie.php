<?php
  $item=array("eyha","1234","intel quad Core","1TB HDD");
  for($i=0; $i<count($item); $i++){
      SetCookie("Cart[$i]",$item[$i],time()+3600);
  }
  echo("Cart 쿠키가 지정되었습니다<br>");
 ?>
