<?php

    class Anagram
    {
        private $user_input;

        function __construct($user_input)
        {
            $this->user_input = $user_input;
        }

        function getUserInput()
        {
            return $this->user_input;
        }

        function setUserInput($new_user_input)
        {
            $this->user_input = $new_user_input;
        }

        function save(){
            array_push($_SESSION['list_of_anagrams'], $this);
        }

        function checkAnagram ($user_input)
        {
            $tempString = str_split($user_input);
            sort($tempString);
            $tempString = implode("", $tempString);
            return $tempString;
        }
    }
