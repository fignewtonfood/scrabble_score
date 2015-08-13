<?php
class ScrabbleScore
{
    function scrabbleScoreCalculator($word)
    {
        $one_point_array = array('a', 'e', 'i', 'o', 'u', 'l', 'n', 'r', 's', 't');
        $two_point_array = array('d', 'g');
        $three_point_array = array('b', 'c', 'm', 'p');
        $four_point_array = array('f', 'h', 'v', 'w', 'y');
        $five_point_array = array('k');
        $eight_point_array = array('j', 'k');
        $ten_point_array = array('q', 'z');

        if (in_array($word, $one_point_array)) {
            return 1;
        } elseif (in_array($word, $two_point_array)) {
            return 2;
        } elseif (in_array($word, $three_point_array)) {
            return 3;
        } elseif (in_array($word, $four_point_array)) {
            return 4;
        } elseif (in_array($word, $five_point_array)) {
            return 5;
        } elseif (in_array($word, $eight_point_array)) {
            return 8;
        } else {
            return 10;
        }
    }
}
 ?>
