<?php
  //URL: /api/get/$ServeKey

  $GET
    = [
        'test-generate-address' => function($Sunrise, $api) {

            echo $api->bitcoin_address(1);

        }






    ];





  $Serve = $GET;
