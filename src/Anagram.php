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
            if($this->checkAnagram()){
                array_push($_SESSION['list_of_anagrams'], $this);
            }
        }

        function checkAnagram ()
        {
            $user_input1 = str_split($this->user_input1);
            $user_input2 = str_split($this->user_input2);

            sort($user_input1);
            sort($user_input2);

            $user_input1 = implode("", $user_input1);
            $user_input2 = implode("", $user_input2);

            return $user_input1 == $user_input2;
        }

        static function getAll(){
            return $_SESSION['list_of_anagrams'];
        }

        static function deleteAll(){
            $_SESSION['list_of_anagrams'] = array();
        }

    }
