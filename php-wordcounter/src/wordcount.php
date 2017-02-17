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
        // function wordEquality()
        // {
        //     if ($input_one === $input_two)
        //     {
        //         echo "These words are even";
        //         return true;
        //     } else {
        //         echo "These are not even";
        //         return false;
        //     }
        // }

        function countRepeatsOne($input_word, $input_sentence)
        {
            $input_sentence = explode(" ", $input_sentence);
            $counter = 0;

            for ($i = 0; $i <= $input_sentence[$i]; $i++)
            {
                if (in_array("$input_word", $input_sentence))
                {
                    $counter ++;
                }
            }
            return $counter;
        }
    }

?>
