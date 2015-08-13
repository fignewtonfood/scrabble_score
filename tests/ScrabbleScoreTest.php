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

        function test_single_letter_value_eight()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'j';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(8, $result);
        }

        function test_single_letter_value_ten()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'q';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(10, $result);
        }

        function test_two_letters()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'bv';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(7, $result);
        }

        function test_three_letters()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'alu';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(3, $result);
        }

        function test_four_letters()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'pkoz';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(19, $result);
        }

        function test_five_letters()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'lpwdg';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(12, $result);
        }

        function test_six_letters()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'charbt';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(13, $result);
        }

        function test_seven_letters()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'fjozlot';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(26, $result);
        }

    }
?>
