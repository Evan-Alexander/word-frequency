<?php

    require_once "src/WordFrequency.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testOneOccurrence()
        {
            //Arrange
           $test_RepeatCounter = new RepeatCounter;
           $string_input = "Hello world";
           $search_for_word = "world";

           //Act
           $result = $test_RepeatCounter->CountRepeats($string_input, $search_for_word);

           //Assert
           $this->assertEquals(1 , $result);
        }

        function testUpperCasevsLowerCase()
        {
            //Arrange
           $test_RepeatCounter = new RepeatCounter;
           $string_input = "Hello Jason";
           $search_for_word = "jason";

           //Act
           $result = $test_RepeatCounter->CountRepeats($string_input, $search_for_word);

           //Assert
           $this->assertEquals(1 , $result);
        }

    }
?>
