<?php

  $emailTo = "rahilka.simonova@yahoo.com";

  $subject = "I hope this works";

  $body = "I think you're great";

  $headers = "From: rahilka.simonova@yahoo.com";

  if ( mail($emailTo, $subject, $body, $headers) ) {

    echo "The email was sent successfully";

  } else {

    echo "The email could not be send";

  }

 ?>
