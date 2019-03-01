<?php

//declare phrase class
class Phrase
{
  private $currentPhrase;
  private $selected;

  function __construct($currentPhrase = null, $selected = null) {
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

  function addPhraseToDisplay() {
      //Split string into lowercase characters
      $characters = str_split(strtolower($this->currentPhrase));
      $displayPhrase = "<div id='phrase' class='section'><ul>";

      //loop through characters and display as <li>
      //reference: http://thisinterestsme.com/php-loop-characters-string/
      foreach($characters as $character) {
          if(isset($character)) {
            //echo $character . "<br>";
            $displayPhrase .= "<li class='hide letter'>" . $character . "</li></ul>";
          } else {
            $displayPhrase .= "<li class='hide space'>" . $character . "</li></ul>";
          }
      }
      echo $displayPhrase;
    }

}
