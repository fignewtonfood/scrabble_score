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

        $output = array();
        $total = 0;

        $word = strtolower($word);

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

    function scrabbleRanking($total)
    {
        $rankings = array('Toddler', 'Student', 'Average Player', 'Apprentice', 'Smarty', 'Padawan', 'Jedi', 'Grand Master');

        if ($total <= 5) {
            return $rankings[0];
        } elseif ($total <= 10) {
            return $rankings[1];
        } elseif ($total <= 15) {
            return $rankings[2];
        } elseif ($total <= 20) {
            return $rankings[3];
        } elseif ($total <= 30) {
            return $rankings[4];
        } elseif ($total <= 40) {
            return $rankings[5];
        } elseif ($total <= 50) {
            return $rankings[6];
        } else {
            return $rankings[7];
        }
    }
}
?>
