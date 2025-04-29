<?php
class GameCharacter {
    private $playerName;
    private $score;

    // Getter for playerName
    public function getPlayerName() {
        return $this->playerName;
    }

    // Setter for playerName
    public function setPlayerName($name) {
        $this->playerName = $name;
    }

    // Getter for score
    public function getScore() {
        return $this->score;
    }

    // Setter for score
    public function setScore($score) {
        $this->score = $score;
    }
}
?>