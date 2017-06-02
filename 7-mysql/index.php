<? php

    $salt = "ifij43j5nbj234nb4k2";

    // echo md5("password"); //turns the password into long alphanumeric string

    // echo md5($salt."password");

    $row['id'] = 73;

    echo md5(md5($row['id'])."password");
    
 ?>
