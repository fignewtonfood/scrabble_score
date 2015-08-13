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
        // $rankings = array('Toddler', 'Student', 'Average Player', 'Apprentice', 'Smarty', 'Padawan', 'Jedi', 'Grand Master');
        //
        // if ($total <= 5) {
        //     array_push($output, 'Toddler');
        // } elseif ($total <= 10) {
        //     array_push($output, 'Student');
        // } elseif ($total <= 15) {
        //     array_push($output, 'Average Player');
        // } elseif ($total <= 20) {
        //     array_push($output, 'Apprentice');
        // } elseif ($total <= 30) {
        //     array_push($output, 'Smarty');
        // } elseif ($total <= 40) {
        //     array_push($output, 'Padawan');
        // } elseif ($total <= 50) {
        //     array_push($output, 'Jedi');
        // } else {
        //     array_push($output, 'Grand Master');
        // }
    }
}
?>
