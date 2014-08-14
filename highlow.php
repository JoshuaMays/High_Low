<?php

if ($argc == 3 && ( (is_numeric($argv[1]) && is_numeric($argv[2]) ) ) ) {
	// If file is loaded with two arguments (one for low value, one for high value)
	// set these arguments as the bounds of the random number generator.
	$answer = mt_rand($argv[1], $argv[2]);
}
else {
	// If there are no low and high arguments passed, create a random number.
	$answer = mt_rand(1,100);
}

// Track the number of guesses.
$number_of_guesses = 0;

// Start do-while loop asking user to guess the $answer.
do {
	// fwrite to stdout asking the user to guess.
	fwrite(STDOUT, 'Guess? ');

	// save user's guess with fgets(stdin) as $guess
	$guess = trim(fgets(STDIN));
	// increment the number of guesses.
	$number_of_guesses++;

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

  // Check if $guess is not equal to $answer, if true
  // run the loop again. If not, end the game.	
} while ($guess != $answer); 
							  
// Output the number of guesses.
fwrite(STDOUT,"It took you $number_of_guesses guesses to figure it out.")

?>

