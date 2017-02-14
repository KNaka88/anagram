<?php

    class Anagram
    {
        private $user_input1;
        private $user_input2;

        function __construct($user_input1, $user_input2)
        {
            $this->user_input1 = $user_input1;
            $this->user_input2 = $user_input2;
        }

        function getUserInput1()
        {
            return $this->user_input1;
        }

        function getUserInput2()
        {
            return $this->user_input2;
        }

        function setUserInput1($new_user_input1)
        {
            $this->user_input1 = $new_user_input1;
        }

        function setUserInput2($new_user_input2)
        {
            $this->user_input2 = $new_user_input2;
        }

        function save(){
            array_push($_SESSION['list_of_anagrams'], $this);
        }

        function checkAnagram ($user_input1, $user_input2)
        {
            $tempString1 = str_split($user_input1);
            $tempString2 = str_split($user_input2);

            sort($tempString1);
            sort($tempString2);

            $tempString1 = implode("", $tempString1);
            $tempString2 = implode("", $tempString2);

            return $tempString1 == $tempString2;
        }
    }
