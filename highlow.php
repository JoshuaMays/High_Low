<?php

// Set random number from 1 - 100 for user to guess. Use mt_rand(), not rand().
$answer = mt_rand(1,100);

// Start do-while loop asking user to guess the $answer.
do {
	// fwrite to stdout asking the user to guess.
	fwrite(STDOUT, 'Guess? ');
	// save user's guess with fgets(stdin) as $guess
	$guess = trim(fgets(STDIN));

	if ($guess == $answer) {
		// User's guess was correct, congratulate them.
		fwrite(STDOUT, "GOOD GUESS!\n");
	}
	elseif ($guess > $answer) {
		// If $guess is higher than $answer tell user to guess lower.
		fwrite(STDOUT, "LOWER\n");
	}
	else {
		// If $guess is lower than $answer tell user to guess higher.
		fwrite(STDOUT, "HIGHER\n");
	}
} while ($guess != $answer); // Check if $guess is not equal to $answer, if true
							 // run the loop again. If not, end the game. 
?>

