<?php

    class RepeatCounter
    {
        private $word;
        private $sentence;
        private $counter;

        function __construct($word, $sentence, $count)
        {
            $this->word = $word;
            $this->sentence = $sentence;
            $this->counter = $counter;
        }

        // getters and setters

        function getWord()
        {
            return $this->word;
        }

        function setWord($input_word)
        {
            $this->word = (string) $input_word;
        }

        function getSentence()
        {
            return $this->sentence;
        }

        function setSentence($input_sentence)
        {
            $this->sentence = (string) $input_sentence;
        }

        function getCounter()
        {
            return $this->counter;
        }

        function setCounter($counter)
        {
            $this->counter = (int) $counter;

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
            echo "$counter";
            return $counter;
        }
    }
}
?>
