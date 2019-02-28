<?php

//declare phrase class
class Phrase
{
  private $currentPhrase;
  private $selected;

  function __construct($currentPhrase = null, $selected = null) {
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


  if (isset($currentPhrase)) {
    $this->currentPhrase = $currentPhrase;
  } else {
    $this->currentPhrase = 'Dream Big';
  }

  if (isset($selected)) {
    $this->selected = $selected;

  }
}


/*
  function setPhrase($currentPhrase) {
    if (!isset($currentPhrase)) {
        $this->currentPhrase = 'Dream Big';
    }  else {
        $this->currentPhrase = $phrase;
    }
  }*/

  function getPhrase() {
      return $this->currentPhrase;
  }


    }

}
