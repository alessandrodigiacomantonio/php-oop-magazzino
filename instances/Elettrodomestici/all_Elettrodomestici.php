<?php
  include_once __DIR__."/Aspirapolveri/Aspirapolveri.php";
  include_once __DIR__."/Forni/Forni.php";
  include_once __DIR__."/Lavatrici/Lavatrici.php";

  $all_Elettrodomestici = [];
  $all_Elettrodomestici[] = $Aspirapolveri;
  $all_Elettrodomestici[] = $Forni;
  $all_Elettrodomestici[] = $Lavatrici;
  var_dump($all_Elettrodomestici);
