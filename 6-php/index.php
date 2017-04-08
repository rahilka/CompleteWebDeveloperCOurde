<?php

  if (is_numeric($_GET) && $_GET > 0 && $_GET == round($_GET, 0)) {

    $i = 2;

    $isPrime = true;

    while ($i < $_GET['number']) {

      if ($_GET['number'] % $i == 0) {

        //number is not prime!

        $isPrime = false;

      }

      $i++;

    }

    if ($isPrime) {

      echo "<p>".$i." is a prime number</p>";

    } else {

      echo "<p>".$i." is not prime.</p>";

    }

  } else if($_GET) {

    //user has submitted sth which is not a positive whole number

    echo "<p>Please enter a positive whole number</p>";
  }

  //$_GET all the get variables'

 ?>


 <p>
   Please enter a whole number
 </p>

 <form>

   <input name="number" type="text" />

   <input type="submit" value="Go!" />

 </form>
