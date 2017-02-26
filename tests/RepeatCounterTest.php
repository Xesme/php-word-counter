<?php
    require_once __DIR__."/../src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
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
