<?php

    class RepeatCounter
    {
        private $word;
        private $sentence;
        private $counter;

        function __construct($word, $sentence)
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

        function setWord($word)
        {
            $this->word = (string) $word;
        }

        function getSentence()
        {
            return $this->sentence;
        }

        function setSentence($sentence)
        {
            $this->sentence = (string) $sentence;
        }

        function getCounter()
        {
            return $this->counter;
        }

        function setCounter($counter)
        {
            $this->counter = (int) $counter;
        }

        // Functions

        function wordEquality($input_word, $input_senetence)
        {
            $input_word = strtolower($input_word);
            $input_senetence = strtolower($input_senetence);

            if ($input_word === $input_senetence)
            {
                return true;
            } else {
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
