<?php

namespace AppBundle\Services;

class Game
{

    const MAX_ATTEMPS = 11;
    private $word;
    private $attempts;
    private $foundLetter;
    private $triedLetters;

    public function __construct($word, $attempts= 0, $foundLetter = [], $triedLetters = []) {
        $this->word = $word;
        $this->attempts = $attempts;
        $this->foundLetter = $foundLetter;
        $this->triedLetters = $triedLetters;

        for($i = 0; $i < strlen($this->word); $i++) {
            array_push($this->foundLetter, array('?'));
        }
    }

    public function getWord()
    {
        return $this->word;
    }

    public function setWord($word)
    {
        $this->word = $word;
    }

    public function getAttempts()
    {
        return $this->attempts;
    }

    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;
    }

    public function getFoundLetter()
    {
        return $this->foundLetter;
    }

    public function setFoundLetter($foundLetter)
    {
        $this->foundLetter = $foundLetter;
    }

    public function getTriedLetters()
    {
        return $this->triedLetters;
    }

    public function setTriedLetters($triedLetters)
    {
        $this->triedLetters = $triedLetters;
    }

    public function getWordLength(){
        return strlen($this->word);
    }

    public function getRemainingAttemps() {
        return self::MAX_ATTEMPS - $this->attempts;
    }

    public function getWordLetters(){
        return str_split($this->word);
    }

    public function isLetterFound($letter) {
        return in_array($letter, $this->foundLetter);
    }

    public function tryLetter($letter) {

        $pos = strpos($this->word, strtolower($letter));

        if($pos) {
            $this->foundLetter[$pos] = strtolower($letter);
            $this->triedLetters[] = strtolower($letter);
            return true;
        }

        $this->attempts++;
        return false;
    }

}