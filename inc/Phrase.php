<?php

//declare phrase class
class Phrase
{
  private $currentPhrase ;
  private $selected;

  function __construct($currentPhrase = '', $selected = '') {
    if (!empty($currentPhrase)) {
        $this->currentPhrase = 'Dream Big';
    }
  }
}
