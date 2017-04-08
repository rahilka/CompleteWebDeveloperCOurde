<?php

$family = array("Rahilka", "Ljubica", "Ana", "Risto");

foreach ($family as $key => $value) {

  $family[$key] = $value." Simonov";

  echo "Array item ".$key."is ".$value."<br />";

}


for ($i = 0; $i < sizeof($family); $i++) {

  echo $family[$i]."<br>";

}

 ?>
