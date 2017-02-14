<?php


    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {



        //Test1: given user input, sort a-z and return the result
        function test_checkAnagram()
        {
            //Arrange
            $input = "bread";
            $test_checkAnagram = new Anagram($input);

            //Act
            $result = $test_checkAnagram->checkAnagram($input);

            //Assert
            $this->assertEquals("abder", $result);
        }
    }
