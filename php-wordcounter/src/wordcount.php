<?php

    class RepeatCounter
    {
        // private $word;
        // private $sentence;
        // private $counter;
        //
        // function __construct($word, $sentence, $count)
        // {
        //     $this->word = $word;
        //     $this->sentence = $sentence;
        //     $this->counter = $counter;
        // }


        // Functions
        function wordEquality($input_word, $input_senetence)
        {
            $input_word = strtolower($input_word);
            $input_senetence = strtolower($input_senetence);

            if ($input_word === $input_senetence)
            {
                echo "These words are even";
                return true;
            } else {
                echo "These are not even";
                return false;
            }
        }

        function countRepeats($input_word, $input_sentence)
        {
            $input_sentence = explode(" ", $input_sentence);
            $counter = 0;

            for ($i = 0; $i <= count($input_sentence); $i++)
            {
                if ($input_word === $input_sentence[$i])
                {
                    $counter ++;
                }
            }
            return $counter;
        }
    }

?>
