<?php
    require_once "src/ScrabbleScore.php";

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_single_letter_value_one()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'a';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_single_letter_value_two()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'd';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_single_letter_value_three()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'b';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_single_letter_value_four()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'f';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(4, $result);
        }

        function test_single_letter_value_five()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'k';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(5, $result);
        }

    }
?>
