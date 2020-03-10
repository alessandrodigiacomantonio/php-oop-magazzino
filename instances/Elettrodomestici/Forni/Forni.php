<?php
  require_once __DIR__.'/../../../classes/Elettrodomestico/Forno.php';
  $codice_identificativo1 = new Forno();
  $codice_identificativo1 -> prezzo = 150;
  $codice_identificativo1 -> tempoPerTemperaturaRegime = 100;
  $codice_identificativo1 -> temperaturaMassima = 100;
  $codice_identificativo1 -> funzioneVapore = true;
  $codice_identificativo1 -> dimensione_xyz = '100 100 100';
  $codice_identificativo1 -> classeEnergetica = 'G';
  $codice_identificativo1 -> modello = brioblu;
  $codice_identificativo1 -> marca = bosh;

  $codice_identificativo2 = new Forno();
  $codice_identificativo2 -> prezzo = 250;
  $codice_identificativo2 -> tempoPerTemperaturaRegime = 200;
  $codice_identificativo2 -> temperaturaMassima = 200;
  $codice_identificativo2 -> funzioneVapore = true;
  $codice_identificativo2 -> dimensione_xyz = '200 200 200';
  $codice_identificativo2 -> classeEnergetica = 'F';
  $codice_identificativo2 -> modello = brioblu;
  $codice_identificativo2 -> marca = bosh;

  $codice_identificativo3 = new Forno();
  $codice_identificativo3 -> prezzo = 350;
  $codice_identificativo3 -> tempoPerTemperaturaRegime = 200;
  $codice_identificativo3 -> temperaturaMassima = 300;
  $codice_identificativo3 -> funzioneVapore = false;
  $codice_identificativo3 -> dimensione_xyz = '300 300 300';
  $codice_identificativo3 -> classeEnergetica = 'E';
  $codice_identificativo3 -> modello = brioblu;
  $codice_identificativo3 -> marca = bosh;

  $Forni = [
    $codice_identificativo1,
    $codice_identificativo2,
    $codice_identificativo3,
  ];
