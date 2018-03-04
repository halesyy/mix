<?php
  class APIPERSONAL {

      private $xpub = 'xpub661MyMwAqRbcEniBw8iBd6GmustuAvZ27pgTG5Yq34Mm3yamiHRohWAVt9arg7v3BUvDwUFehWYedemmq7adhukwTXYHT158kSrCCqnjmd3';

      public function bitcoin_address($id) {
        $path = "0/{$id}";
        // 1/x = change addresses, 0/x = recieving addresses
        
        $hd = new HD;
        $hd->set_xpub($this->xpub);

        $address = $hd->address_from_xpub($path);
        return $address;
      }




  }
