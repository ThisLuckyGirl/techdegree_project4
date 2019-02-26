<?php
//include("phrase.php");

//declare game class
class Game
{
  private $phrase;
  private $lives = '5';

  function __construct($phrase) {
    $this->phrase = $phrase;
  }

}
