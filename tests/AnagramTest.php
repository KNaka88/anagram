<?php


    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {



        // //Test1: given user input, sort a-z and return the result
        // function test_checkAnagram()
        // {
        //     //Arrange
        //     $input = "bread";
        //     $test_checkAnagram = new Anagram($input);
        //
        //     //Act
        //     $result = $test_checkAnagram->checkAnagram($input);
        //
        //     //Assert
        //     $this->assertEquals("abder", $result);
        // }

        function test_checkAnagram_compare()
        {
            //Arrange
            $input1 = "bread";
            $input2 = "beard";
            $test_checkAnagram = new Anagram($input1, $input2);

            //Act
            $result = $test_checkAnagram->checkAnagram($input1, $input2);

            //Assert
            $this->assertEquals(true, $result);
        }
    }
