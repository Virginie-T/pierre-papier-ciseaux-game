<?php

    class RockPaperScissors
    {
        function play($first_input, $second_input)
        {
            $paper = "paper";
            $rock = "rock";
            $scissor = "scissors";

            if ($first_input == $second_input) {
                return "Draw";
            } elseif ($first_input == $paper && $second_input == $rock || $first_input == $scissor && $second_input == $paper || $first_input == $rock && $second_input == $scissor) {
                return "Player 1 Wins!!!";
            } elseif ($first_input == $rock && $second_input == $paper || $first_input == $paper && $second_input == $scissor || $first_input == $scissor && $second_input == $rock) {
                return "Player 2 Wins!!!";
            // } elseif ($first_input == $scissor && $second_input == $paper) {
            //     return "Player 1 Wins!!!";
            // } elseif ($first_input == $paper && $second_input == $scissor) {
            //     return "Player 2 Wins!!!";
            // } elseif ($first_input == $rock && $second_input == $scissor) {
            //     return "Player 1 Wins!!!";
            // }  elseif ($first_input == $scissor && $second_input == $rock) {
            //     return "Player 2 Wins!!!";
            }
            else {
                return "false";
            }



        }

    }

?>
