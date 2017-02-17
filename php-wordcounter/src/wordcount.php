<?php

    class RepeatCounter
    {



        // Functions
        function wordEquality()
        {
            $sentence = explode(" ", $input_sentence);
            $word = $input_word;

            if ($word === $sentence[1])
            {
                return true;
            }
        }
    }

?>
