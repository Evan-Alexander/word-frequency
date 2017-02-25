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
            $counter = 0;
            $search_for_word = strtoupper($search_for_word);
            $string_input = strtoupper($string_input);
            $string_input_array = explode(' ',$string_input);
            foreach ($string_input_array as $key=>$value) {
                if ($value == $search_for_word) {
                    ++$counter;
                }
            }
            var_dump($counter);
             return $counter;
        }
    }

?>
