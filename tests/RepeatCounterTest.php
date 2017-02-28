<?php
    require_once __DIR__."/../src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_construct()
        {
            // Arrange
            $word = "that";
            $sentence = "that is that";
            $test_repeater = new RepeatCounter($word, $sentence);

            // Act
            $result1 = $test_repeater->getWord();
            $result2 = $test_repeater->getSentence();

            // Assert
            $this->assertEquals($word, $result1);
            $this->assertEquals($sentence, $result2);

        }

        function test_countRepeats()
        {
            // Arrange
            $word = "that";
            $sentence = "that is that";
            $test_RepeatCounter = new RepeatCounter($word, $sentence);

            // Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);

            // Assert
            $this->assertEquals(2, $result);
        }

        function test_wordEquality()
        {
            // Arrange
            $word = "that";
            $word2 = "that";
            $test_RepeatCounter = new RepeatCounter($word, $word2);

            // Act
            $result = $test_RepeatCounter->wordEquality($word, $word2);

            // Assert
            $this->assertEquals(true, $result);
        }

        function test_falseEquality()
        {
            $word = "that";
            $word2 = "this";
            $test_RepeatCounter = new RepeatCounter($word, $word2);

            // Act
            $result = $test_RepeatCounter->wordEquality($word, $word2);


            // Assert
            $this->assertEquals(false, $result);
        }

        function test_capitals()
        {
            // Arrange
            $word = "The";
            $sentence = "The red fox jumps high through the air, and returns to the ground.";
            $test_RepeatCounter = new RepeatCounter($word, $sentence);

            // Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);

            // Assert
            $this->assertEquals(3, $result);
        }

        function test_ignorePunctuation()
        {
            // Arrange
            $word = "the,";
            $sentence = "The red fox jumps high through the air, and returns to the ground.";
            $test_RepeatCounter = new RepeatCounter($word, $sentence);

            // Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);

            // Assert
            $this->assertEquals(3, $result);
        }
    }
?>
