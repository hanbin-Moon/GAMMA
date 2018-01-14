<?php
$item=array("eyha","1234","intel quad Core","1TB HDD");
for($i=0; $i<count($item); $i++){
    SetCookie("Cart[$i]",$item[$i],time()-3600);
}
echo("쿠키를 제거했습니다.<br>");
 ?>
