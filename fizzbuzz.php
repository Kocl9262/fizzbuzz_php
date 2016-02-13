<?php

	$number = $_POST["number"];
	
	if ($number <= 0)
	{
		echo "Prosim vpisite cifro, ki je vecja od 0" . "<br>";
		echo "<a href='http://localhost/smartninja/fizzbuzz.html'><button>Nazaj</button></a>";
	}
	else
	{
		for ($i = 1; $i <= $number; $i++)
		{
			if(($i % 3 == 0) && ($i % 5 == 0))
			{
				echo "FizzBuzz <br>";
			}
			else if ($i % 5 == 0)
			{
				echo "Buzz <br>";
			}
			else if ($i % 3 == 0)
				echo "Fizz <br>";
			else
			{
				echo $i . "<br>";
			}
		}
	}

?>
