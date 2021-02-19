<!-- Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged. -->

<?php
   $riel = 2103942; 
  $kyat = 19092; 
  $krones = 109; 
  $lek = 9094; 
  echo "----START----\nRiel: $riel \nKyat: $kyat \nKrones: $krones \nLek: $lek \n----*-*-*----\n\n";

  // exchange rates to USD
  $rate_riel = 0.00025;
  $rate_kyat = 0.00077;
  $rate_krones = 0.11;
  $rate_lek = 	0.0095;
  
  // after converting to USD
  $riel_to_USD = $rate_riel * $riel;
  $kyat_to_USD = $rate_kyat * $kyat;
  $krones_to_USD = $rate_krones * $krones;
  $lek_to_USD = $rate_lek * $lek;
  echo "----Exchanged to USD-----\nRiel: $riel_to_USD$ \nKyat: $kyat_to_USD$ \nKrones: $krones_to_USD$ \nLek: $lek_to_USD$\n----*-*-*----";