<?php
  require_once __DIR__.'/../Elettrodomestico.php';
  class Aspirapolvere extends Elettrodomestico
  {
    public $capacitaBatteria;
    public $tempoRicarica;
    public $caricoMassimo;
    public $ampiezzaAspiratore;
  }
