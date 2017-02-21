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
                if ($value == $search_for_word) {
                    // add 1 for every match
                    ++$counter;
                }
            }
            var_dump($counter);
            //return counter score
             return $counter;
        }

    }








?>
