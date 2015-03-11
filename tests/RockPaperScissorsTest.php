<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        //DRAW
        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }

        // Paper vs Rock
        function test_paper_rock() {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 Wins!!!", $result);
        }

        // Paper vs Rock Reverse
        function test_rock_paper() {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2 Wins!!!", $result);

        }

        // Scissor vs Paper
        function test_scissor_paper() {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissor";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 Wins!!!", $result);

        }

        // Scissor vs Paper

        function test_paper_scissor() {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "scissor";

            //Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2 Wins!!!", $result);

        }

        function test_rock_scissor() {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissor";

            //Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1 Wins!!!", $result);

        }

        function test_scissor_rock() {

            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissor";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->play($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2 Wins!!!", $result);

        }



    }
?>
