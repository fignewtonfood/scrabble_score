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

        if (!ctype_alnum($word)) {
            $special_character_flag = 1;
        } else {
            $special_character_flag = 0;
            $word = strtolower($word);
            $split_word = str_split($word);
        }

        if ($special_character_flag = 1 && in_array('*', $split_word)) {

            $index = array_search('*', $split_word);
            if ($index != FALSE) {
                unset($split_word[$index]);
                $index++;
                if (in_array($split_word[$index], $one_point_array)) {
                    $total = $total + 2;
                } elseif (in_array($split_word[$index], $two_point_array)) {
                    $total = $total + 4;
                } elseif (in_array($split_word[$index], $three_point_array)) {
                    $total = $total + 6;
                } elseif (in_array($split_word[$index], $four_point_array)) {
                    $total = $total + 8;
                } elseif (in_array($split_word[$index], $five_point_array)) {
                    $total = $total + 10;
                } elseif (in_array($split_word[$index], $eight_point_array)) {
                    $total = $total + 16;
                } elseif (in_array($split_word[$index], $ten_point_array)) {
                    $total = $total + 20;
                }
                unset($split_word[$index]);
                //multiply letter
            }
        } elseif ($special_character_flag = 0) {
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
        } else {
            // return 'Please enter only letters';
        }
        return $total;
    }

    function scrabbleRanking($total)
    {
        $rankings = array('Toddler', 'Student', 'Average Player', 'Apprentice', 'Smarty', 'Padawan', 'Jedi', 'Grand Master', '.........');

        if ($total == 0) {
            return $rankings[8];
        } elseif ($total <= 5) {
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

    function scrabbleMultiplier($total, $mult)
    {
        if ($mult == 1) {
            $grand_total = $total * 2;
        } elseif ($mult == 2) {
            $grand_total = $total * 3;
        } else {
            $grand_total = $total;
        }

        return $grand_total;
    }
}
?>
