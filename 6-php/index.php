<?php

  $family = array("Rahilka", "Ljubica");

  for($i = 0; $i < sizeof($family); $i++) {

    if ($family[$i] ==  $_POST['name']) {

      echo "WE know you!";

    } else {

      echo "Sorry, we don't know you!";

    }

  }


 ?>


 <p>
   Please enter a username
 </p>

 <form method="post">

   <input name="name" type="text" />

   <input type="submit" value="Go!" />

 </form>
