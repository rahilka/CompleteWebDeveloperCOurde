<?php

  if(array_key_exists('email', $_POST) OR (array_key_exists('password', $_POST)) {

    // print_r($_POST);

    if($_POST['email'] = '') {
      echo "The email address is required";
    } else if ($_POST['password'] = '') {
      echo "The password is required";
    } else {

        $query = "SELECT id FROM users WHERE email = '"mysqli_real_escape_string($link, $_POST['email'])."'";

        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {

          echo "<p>That email address has already been taken</p>";

        } else {

          $query = "INSERT INTO users ('email', 'password') VALUES ('"mysqli_real_escape_string($link, $_POST['email'])."', '"mysqli_real_escape_string($link, $_POST['password'])."')";

          if (mysqli_query($link, $query)) {

            echo "You have signed up!!!";

          } else {

            echo "There was problem logging in, please try again later";

          }

        }


    }

  }

  $link =  mysqli_connect("localhost", "db-user-name", "password", "db-name");

  if(mysqli_connect_error()) {

    die ( "It wasn't connected successfully"); //stops if there is no connection

  }



  // $name = "Rahilka Simonova";
  //
  // $query = "SELECT * FROM users WHERE email LIKE '%p%'";
  //
  // $query = "SELECT 'email' FROM users WHERE id >= 2";
  //
  // $query = "SELECT 'email' FROM users WHERE id >= 2 AND email LIKE '%t%'";
  //
  // $query = "SELECT * from users WHERE name = '.mysqli_real_escape_string($link, $name).'";
  //
  // if($result = mysqli_query($link, $query)) {
  //
  //     while($row = mysqli_fetch_array($result)) {
  //
  //       print_r($row);
  //
  //     };
  //
  // }

 ?>

 <html>

 <form method="post">

   <input type="text" name="email" placeholder="Your email Address"  />
   <br />
   <input type="password" name="password" placeholder="Your password"/>
   <br />

   <input type="sumbit" value="Sign Up!"/>

 </form>

 </html>
