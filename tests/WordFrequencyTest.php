<?php

    require_once "src/WordFrequency.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testOneOccurrence()
        {
            //Arrange
           $test_RepeatCounter = new RepeatCounter;
           $string_input = "Hello World";
           $search_word = "World";

           //Act
           $result = $test_RepeatCounter->CountRepeats($string_input, $search_word);

           //Assert
           $this->assertEquals(1 , $result);
        }

    }
?>
