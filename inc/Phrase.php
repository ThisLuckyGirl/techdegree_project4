<?php

//declare phrase class
class Phrase
{
  private $currentPhrase = '';
  private $selected = array();

  function __construct($currentPhrase = '', $selected = '') {
    /*if (!empty($currentPhrase)) {
        $this->phrase = $phrase;
    }
    else {
      $this->currentPhrase = 'Dream Big';*/

    /*if (!isset($currentPhrase)) {
        $this->currentPhrase = 'Dream Big';
    } elseif (isset($currentPhrase)) {
        $this->currentPhrase = $phrase;
    }*/

    function setPhrase($currentPhrase) {
      $this->currentPhrase = $phrase;
    }
    if (!isset($currentPhrase)) {
        $this->currentPhrase = 'Dream Big';
    }
  }

    function addPhraseToDisplay() {
      //Split string into lowercase characters
      $characters = str_split(strtolower($this->phrase));
      //loop through characters and display as <li>
      //reference: http://thisinterestsme.com/php-loop-characters-string/
      foreach ($characters as $character) {
          //if(isset($character)) {
            //echo $character . "<br>";
            echo "<li class='hide letter'>" . $character . "</li>";
          //}
      }
    }
}
