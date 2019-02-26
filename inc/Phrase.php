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
}
