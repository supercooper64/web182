<?php
include 'inc-game-character-object.php';

// Create first game character
$character1 = new GameCharacter();
$character1->setPlayerName("Mario");
$character1->setScore(150);

// Create second game character
$character2 = new GameCharacter();
$character2->setPlayerName("Luigi");
$character2->setScore(200);

// Display the characters and their scores
echo "Character 1: " . $character1->getPlayerName() . " with score: " . $character1->getScore() . "<br>";
echo "Character 2: " . $character2->getPlayerName() . " with score: " . $character2->getScore() . "<br>";

// Compare scores and display the winner
if ($character1->getScore() > $character2->getScore()) {
    echo "The winner is: " . $character1->getPlayerName();
} elseif ($character1->getScore() < $character2->getScore()) {
    echo "The winner is: " . $character2->getPlayerName();
} else {
    echo "It's a tie!";
}
?>