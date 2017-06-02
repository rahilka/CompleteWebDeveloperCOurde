<? php

  setcookie("costomerId", "1234", time() + 60 * 60 * 24); //the cookie will expire in a day
  // setcookie("costomerId", "1234", time() + 60 * 60 * 24 * 365); //the cookie will expire in a year

  $_COOKIT("customerId") = "test"; //change the value of the cookie

  setcookie("customerId", "", time() - 60 * 60);  to remove a cookie, use some time in the past, here is one hour

  echo $_COOKIE["customerId"];

 ?>
