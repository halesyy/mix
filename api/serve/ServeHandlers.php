<?php
  //URL: /api/get/$ServeKey

  $GET
    = [
        'test-generate-address' => function($Sunrise) {
          $xpub = 'xpub661MyMwAqRbcEniBw8iBd6GmustuAvZ27pgTG5Yq34Mm3yamiHRohWAVt9arg7v3BUvDwUFehWYedemmq7adhukwTXYHT158kSrCCqnjmd3';
          $path = '0/0'; // 1st receiving address
          // $path = '0/2'; // 3rd receiving address
          // $path = '1/0'; // 1st change address
          // $path = '1/1'; // 2nd change address
          $hd = new HD;
          $hd->set_xpub($xpub);
          $address = $hd->address_from_xpub($path);
          echo $address;
        }






    ];





  $Serve = $GET;
