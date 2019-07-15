<?php
function triggeremail(){
  $msg = "First line of text\nSecond line of text";

  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);

  // send email
  mail("krishnan.ayyappan13@gmail.com","My subject",$msg);
}
?>