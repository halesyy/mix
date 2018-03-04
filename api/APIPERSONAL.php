<?php
  class APIPERSONAL {

      private $xpub = 'xpub661MyMwAqRbcEniBw8iBd6GmustuAvZ27pgTG5Yq34Mm3yamiHRohWAVt9arg7v3BUvDwUFehWYedemmq7adhukwTXYHT158kSrCCqnjmd3';

      public function address($id, $type = 0) {
        // 1/x = change addresses, 0/x = recieving addresses
        $path = "{$type}/{$id}";
        $hd = new HD;
        $hd->set_xpub($this->xpub);
        $address = $hd->address_from_xpub($path);
        return $address;
      }
      public function change_address($id) {
        return $this->address($id, 1);
      }




  }
