<?php

  $link =  mysqli_connect("localhost", "db-user-name", "password", "db-name");

  if(mysqli_connect_error()) {

    die ( "It wasn't connected successfully"); //stops if there is no connection

  }

  $query = "SELECT * FROM users";

  if($result = mysqli_query($link, $query)) {

      $row = mysqli_fetch_array($result);

      // print_r($row);

      echo "Your email is ".$row['email']." and your password is: ".$row['password'];

  }

 ?>
