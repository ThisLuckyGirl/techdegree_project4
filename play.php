<!DOCTYPE html>
<?php
require_once("inc/Game.php");
require_once("inc/Phrase.php");

//instantiate classes
$phrase = new Phrase();
$game = new Game($phrase);


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
      echo $phrase->addPhraseToDisplay();
      echo $game->displayKeyboard();
      echo $game->displayScore();
      var_dump($_POST);
      ?>
		</div>
	</body>
</html>
