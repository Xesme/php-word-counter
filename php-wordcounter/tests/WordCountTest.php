<?php
    require_once __DIR__."/../src/wordcount.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_equalWords()
        {
            // Arrange
            $test_ReapeatCounter = new RepeatCounter;
            $input_sentence = "the the";
            $input_word = "the";

            // Act
            $result = $test_ReapeatCounter->wordEquality($input_sentence, $input_word);

            // Assert
            $this->assertEquals(false, $result);
        }


        function test_countRepeats()
        {
            // Arrange

            // Act

            // Assert

        }
    }



?>
