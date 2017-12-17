<?php
	if(isset($error) || (isset($_SESSION['noadult']) && $_SESSION['noadult'] == TRUE))
	{
			echo '<div class="error"><p class="error">';

			echo '---> ';
			
			if(isset($error['places']))
			{
				echo 'Please choose between 1 and 9 places.';
			}
			
			if(isset($_SESSION['noadult']) && $_SESSION['noadult'] == TRUE)
			{
				echo 'There has to be at least one adult (+18 year) to continue.<br/>';
				echo 'If you click on "Next", it will cancel the reservation.';
			}
	
			if(isset($error['age']))
			{
				echo 'Please enter an age between 0 and 125.';
			}

			echo ' <---';

			echo '</p></div>';
	}		
