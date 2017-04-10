<?php

  mysqli_connect("localhost", "db-user-name", "password")

  if(mysqli_connect_error()) {

    echo "It wasn't connected successfully";

  } else {

    echo "Successfully connected";

  }

 ?>
