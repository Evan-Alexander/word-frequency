<?php

    class RepeatCounter
    {
        private $string_input;
        private $search_for_word;

        function setStrings($string_input, $search_for_word)
        {
            $this->string_input = $string_input;
            $this->search_for_word = $search_for_word;
        }

        function getString(){
            return $this->string_input;
        }

        function getSearchWord(){
            return $this->search_for_word;
        }

        static function deleteAll()
        {
            $_SESSION['input'] = array();
        }

        // Tyler, I feel like this should work.  It clearly doesn't, or else you wouldn't be reading this.  I feel like I might be missing something in between the foreach statement and the if conditional statement, but am not sure why or what that would be?  I feel like my if statement will do what I want it to do while iterating through the array.

        //I've changed this around from my the code I submitted because, while the substr_count was awesome and returned a numerical value with ease, it was accounting for partial words and in my nervousness on Friday, I forgot to test for that.  I've been struggling with loops, both for and foreach.  When my partner does them, it makes total sense, but when I'm on my own it get a little lost if its something outside a course example.  I'm a little concerned going into databases as I feel that looping and arrays are going to be ESSENTIAL in data manipulation.  
        function CountRepeats($string_input, $search_for_word)
        {
            // counter set to zero
            $counter = 0;
            // convert word to match and string input to uppercase
            $search_for_word = strtoupper($search_for_word);
            $string_input = strtoupper($string_input);
            // Place string input into an array with individual whole words
            $string_input_array = explode(' ',$string_input);
            // For each seperated word within string input array,
            foreach ($string_input_array as $key=>$value) {
                // if the value matches search_for_word
                if ($value == $this->search_for_word) {
                    // add 1 for every match
                    $counter +=1;
                }
            }
            var_dump($counter);
            //return counter score
             return $counter;
        }

    }








?>
