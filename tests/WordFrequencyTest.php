<?php

    require_once "src/WordFrequency.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testNoOccurrence()
        {
            //Arrange
           $test_RepeatCounter = new RepeatCounter;
           $string_input = "Hello world";
           $search_for_word = "dog";

           //Act
           $result = $test_RepeatCounter->CountRepeats($string_input, $search_for_word);

           //Assert
           $this->assertEquals(0 , $result);
        }

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

        function testmultipleInstances()
        {
            //Arrange
           $test_RepeatCounter = new RepeatCounter;
           $string_input = "He said he would be happy.";
           $search_for_word = "he";

           //Act
           $result = $test_RepeatCounter->CountRepeats($string_input, $search_for_word);

           //Assert
           $this->assertEquals(2 , $result);
        }

        function testpartialword()
        {
            //Arrange
           $test_RepeatCounter = new RepeatCounter;
           $string_input = "A cat is in the cathedral.";
           $search_for_word = "cat";

           //Act
           $result = $test_RepeatCounter->CountRepeats($string_input, $search_for_word);

           //Assert
           $this->assertEquals(1 , $result);
        }
    }
?>
