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

        $total = 0;
        $split_word = str_split($word);

        foreach ($split_word as $letter) {
            if (in_array($letter, $one_point_array)) {
                $total++;
            } elseif (in_array($letter, $two_point_array)) {
                $total = $total + 2;
            } elseif (in_array($letter, $three_point_array)) {
                $total = $total + 3;
            } elseif (in_array($letter, $four_point_array)) {
                $total = $total + 4;
            } elseif (in_array($letter, $five_point_array)) {
                $total = $total + 5;
            } elseif (in_array($letter, $eight_point_array)) {
                $total = $total + 8;
            } elseif (in_array($letter, $ten_point_array)) {
                $total = $total + 10;
            }
        }
        return $total;
    }
}
 ?>
