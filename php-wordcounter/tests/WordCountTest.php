<?php
    require_once __DIR__."/../src/wordcount.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        // function test_equalWords()
        // {
        //     // Arrange
        //     $test_RepeatCounter = new RepeatCounter;
        //     $input_one = "that";
        //     $input_two= "this";
        //
        //     // Act
        //     $result = $test_RepeatCounter->wordEquality($input_one, $input_two);
        //
        //     // Assert
        //     $this->assertEquals(true, $result);
        // }


        function test_countRepeats()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_word = "that";
            $input_sentence = "that is that";


            // Act
            $result = $test_RepeatCounter->countRepeats($input_word, $input_sentence);

            // Assert
            $this->assertEquals(2, $result);

        }
    }



?>
