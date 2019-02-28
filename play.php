<!DOCTYPE html>
<?php
require_once("inc/Game.php");
require_once("inc/Phrase.php");

//instantiate classes
$phrase = new Phrase();
$game = new Game($phrase);


echo $phrase->addPhraseToDisplay();

//var_dump for testing classes
var_dump($phrase->getPhrase());
var_dump($game);

?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Phrase Hunter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>

	<body>
		<div class="main-container">
			<h2 class="header">Phrase Hunter</h2>
      <?php
      function addPhraseToDisplay() {
          //Split string into lowercase characters
          $characters = str_split(strtolower($this->currentPhrase));
          //loop through characters and display as <li>
          //reference: http://thisinterestsme.com/php-loop-characters-string/
          foreach ($characters as $character) {
              if(empty($character)) {
                //echo $character . "<br>";
                echo "<li class='hide space'>" . $character . "</li>";
              } else {
                echo "<li class='hide letter'>" . $character . "</li>";
              }
          }
          ?>
		</div>
	</body>
</html>
