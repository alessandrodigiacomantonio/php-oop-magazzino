<?php
  require_once __DIR__.'/../../../classes/Elettrodomestico/Lavatrice.php';
  $codice_identificativo1 = new Lavatrice();
  $codice_identificativo1 -> prezzo = 150;
  $codice_identificativo1 -> centrifuga = false;
  $codice_identificativo1 -> temperaturaMassima = 100;
  $codice_identificativo1 -> caricoMassimo = 10;
  $codice_identificativo1 -> dimensione_xyz = '100 100 100';
  $codice_identificativo1 -> classeEnergetica = 'G';
  $codice_identificativo1 -> modello = brioblu;
  $codice_identificativo1 -> marca = bosh;

  $codice_identificativo2 = new Lavatrice();
  $codice_identificativo2 -> prezzo = 250;
  $codice_identificativo2 -> centrifuga = true;
  $codice_identificativo2 -> temperaturaMassima = 200;
  $codice_identificativo2 -> caricoMassimo = 20;
  $codice_identificativo2 -> dimensione_xyz = '200 200 200';
  $codice_identificativo2 -> classeEnergetica = 'F';
  $codice_identificativo2 -> modello = brioblu;
  $codice_identificativo2 -> marca = bosh;

  $codice_identificativo3 = new Lavatrice();
  $codice_identificativo3 -> prezzo = 350;
  $codice_identificativo3 -> centrifuga = true;
  $codice_identificativo3 -> temperaturaMassima = 300;
  $codice_identificativo3 -> caricoMassimo = 30;
  $codice_identificativo3 -> dimensione_xyz = '300 300 300';
  $codice_identificativo3 -> classeEnergetica = 'E';
  $codice_identificativo3 -> modello = brioblu;
  $codice_identificativo3 -> marca = bosh;

  // $rc = new ReflectionClass(Lavatrice);
  // var_dump($ro->getMethods());
  // echo '<pre>'.$rc->getExtension();
  // echo '<pre>'.print_r(get_class_methods($rc), true);

   // inserire tutte le istanze di Lavatrice nell'array
  $Lavatrici = [
    $codice_identificativo1,
    $codice_identificativo2,
    $codice_identificativo3,
  ];
