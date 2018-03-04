<?php
  //URL: /api/get/$ServeKey

  $GET
    = [
        'test-generate-address' => function($Sunrise, $api) {

            echo $api->address(1);

        }






    ];





  $Serve = $GET;
