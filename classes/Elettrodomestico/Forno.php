<?php
  require_once __DIR__.'/../Elettrodomestico.php';
  class Forno extends Elettrodomestico
  {
    public $tempoPerTemperaturaRegime;
    public $temperaturaMassima;
    public $funzioneVapore;
    public $funzioneLievitazioneImpasto;
  }
