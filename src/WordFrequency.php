<?php

    class RepeatCounter
    {


        function CountRepeats($string_input, $search_for_word)
        {
            $search_for_word = strtoupper($search_for_word);
            $string_input = strtoupper($string_input);
            $find_occurences = substr_count($string_input, $search_for_word);
            return $find_occurences;

        }

    }






?>
