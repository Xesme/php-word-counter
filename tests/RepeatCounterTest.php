<?php
    require_once __DIR__."/../src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_wordEquality()
        {
            // Arrange
            $word = "that";
            $word2 = "timber wolves are great";
            $test_RepeatCounter = new RepeatCounter($word, $word2);

            // Act
            $result = $test_RepeatCounter->wordEquality();

            // Assert
            $this->assertEquals(false, $result);
        }

        function test_ignorePunctuation()
        {
            // Arrange
            $word = "the ,";
            $sentence = "The red fox jumps high through the air, and returns to the ground.";
            $test_RepeatCounter = new RepeatCounter($word, $sentence);

            // Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);

            // Assert
            $this->assertEquals(3, $result);
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
    }
?>
