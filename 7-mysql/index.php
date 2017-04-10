<?php

  $link =  mysqli_connect("localhost", "db-user-name", "password", "db-name");

  if(mysqli_connect_error()) {

    die ( "It wasn't connected successfully"); //stops if there is no connection

  }

  // $query = "INSERT INTO `users` (`email`, `password`) VALUES ('rahilka@yahoo.com', '1234')";

  // $query = "UPDATE `users` SET email = 'ljubica@yahoo.com' WHERE id=1 LIMIT 1";

  $query = "UPDATE `users` SET password='dsadsaf15fsda153f1ds53fs1df1sd31fs' where email='rahilka@yahoo.com' LIMIT 1";

  mysqli_query($link, $query);

  $query = "SELECT * FROM users";

  if($result = mysqli_query($link, $query)) {

      $row = mysqli_fetch_array($result);

      // print_r($row);

      echo "Your email is ".$row['email']." and your password is: ".$row['password'];

  }

 ?>
