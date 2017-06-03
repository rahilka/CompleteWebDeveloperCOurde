<?php

  require "twitteroauth-master/autoload.php";

  use Abraham\TwitterOAuth\TwitterOAuth;

  $consumerkey = "6NGpI3eRk1LvX0xl4flIuLkE8";
  $consumersecret = "TLTscTrMyTJc3981lksRZRlXRnh1m6TDhtT5qH5aP3Oie6ShHi";
  $accesstoken = "123588153-qc3CwKGJUz3T9UfjkZEtKkRghPZCxocPHAioVMvQ";
  $accesstokensecret = "B86dPkP0gNA7Z0sRSo4oxnSoCQv8T17eUb2IblVHrxZrg";

  $connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
  $content = $connection->get("account/verify_credentials");

  $statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

  foreach($statuses as $tweet) {


    if($tweet->favorite_count >= 1) {

      $status = $connection->get("statuses/oembed", ["id" => $tweet->id]);

      echo $status->html;


    }


  }

 ?>
