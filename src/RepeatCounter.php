<?php

    class RepeatCounter
    {
        private $word;
        private $sentence;

        function __construct($word, $sentence)
        {
            $this->word = $word;
            $this->sentence = $sentence;
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

        // Functions
        function wordEquality()
        {
            if ($word === $word2)
            {
                return false;
            } else {
                return false;
            }
        }

        function countRepeats($word, $sentence)
        {
            $word = strtolower($word);
            $sentence = strtolower($sentence);
            $counter = 0;

            $sentence = str_replace(array(".", "!", ",", "'",), " ", $sentence);
            $array_sentence = explode(" ", $sentence);

            $word = str_replace(array(".", "!", ",", "'",), " ", $word);
            $array_word = explode(" ", $word);


            for ($i = 0; $i <= count($array_sentence); $i++)
            {
                if ($array_word[0] === $array_sentence[$i])
                    $counter ++;
                }
                return $counter;
            }
        }
?>
