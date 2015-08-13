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

        function test_fifteen_letters()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'vfrwbilrkgwlfrf';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(40, $result);
        }

        function test_rank_less_than_five()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 5;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('Toddler', $result);
        }

        function test_rank_less_than_ten()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 10;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('Student', $result);
        }

        function test_rank_less_than_fifteen()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 15;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('Average Player', $result);
        }

        function test_rank_less_than_twenty()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 20;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('Apprentice', $result);
        }

        function test_rank_less_than_thirty()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 30;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('Smarty', $result);
        }

        function test_rank_less_than_forty()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 40;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('Padawan', $result);
        }

        function test_rank_less_than_fifty()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 50;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('Jedi', $result);
        }

        function test_rank_more_than_fifty()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 51;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('Grand Master', $result);
        }

        function test_caps()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 'ASD';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals(4, $result);
        }

        function test_exclude_special_characters()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = '~_:';

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreCalculator($input);

            //Assert
            $this->assertEquals('Please enter only letters', $result);
        }

        function test_rank_more_zero()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = 0;

            //Act
            $result = $test_ScrabbleScore->scrabbleRanking($input);

            //Assert
            $this->assertEquals('.........', $result);
        }

        function test_double_word_score()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input1 = 12;
            $input2 = 1;

            //Act
            $result = $test_ScrabbleScore->scrabbleMultiplier($input1, $input2);

            //Assert
            $this->assertEquals(24, $result);
        }

        function test_triple_word_score()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input1 = 12;
            $input2 = 2;

            //Act
            $result = $test_ScrabbleScore->scrabbleMultiplier($input1, $input2);

            //Assert
            $this->assertEquals(36, $result);
        }
    }
?>
