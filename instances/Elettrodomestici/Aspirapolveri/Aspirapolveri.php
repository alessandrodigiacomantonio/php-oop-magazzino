<?php
  require_once __DIR__.'/../../../classes/Elettrodomestico/Aspirapolvere.php';
  $codice_identificativo1 = new Aspirapolvere();
  $codice_identificativo1 -> prezzo = 150;
  $codice_identificativo1 -> capacitaBatteria = 1000;
  $codice_identificativo1 -> tempoRicarica = 100;
  $codice_identificativo1 -> caricoMassimo = 10;
  $codice_identificativo1 -> dimensione_xyz = '100 100 100';
  $codice_identificativo1 -> classeEnergetica = 'G';
  $codice_identificativo1 -> modello = brioblu;
  $codice_identificativo1 -> marca = bosh;

  $codice_identificativo2 = new Aspirapolvere();
  $codice_identificativo2 -> prezzo = 250;
  $codice_identificativo2 -> capacitaBatteria = 2000;
  $codice_identificativo2 -> tempoRicarica = 200;
  $codice_identificativo2 -> caricoMassimo = 20;
  $codice_identificativo2 -> dimensione_xyz = '200 200 200';
  $codice_identificativo2 -> classeEnergetica = 'F';
  $codice_identificativo2 -> modello = brioblu;
  $codice_identificativo2 -> marca = bosh;

  $codice_identificativo3 = new Aspirapolvere();
  $codice_identificativo3 -> prezzo = 350;
  $codice_identificativo3 -> capacitaBatteria = 3000;
  $codice_identificativo3 -> tempoRicarica = 300;
  $codice_identificativo3 -> caricoMassimo = 30;
  $codice_identificativo3 -> dimensione_xyz = '300 300 300';
  $codice_identificativo3 -> classeEnergetica = 'E';
  $codice_identificativo3 -> modello = brioblu;
  $codice_identificativo3 -> marca = bosh;

  $Aspirapolveri = [
    $codice_identificativo1,
    $codice_identificativo2,
    $codice_identificativo3,
  ];
