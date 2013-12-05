<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="manages our time-event confirmation page" />
<meta name="keywords" content="time management cs50 final project" />
<meta name="author" content="Monica Mishra" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Plan mah lyfe CS50</title>

</head>

	<body>

	<div id="wrapper">

		<?php include('includes/header.php'); ?>
		<?php include('includes/nav.php'); ?>

		<div id="form">

			<form action="index.php" method="post">

			<?php
			
				if ($_SERVER["REQUEST_METHOD"] == "POST")
  				{
  					$hours = $_POST["hours"];

  					print("<p>Your assignment is: <br>
					Estimated number of hours needed to complete assignment: ". $hours. "<br>
					Todays date: 
						<script>
						var date=new Date();
						document.write(date);
						</script><br>
					Due date: <br>
					Number of days until due date: <br>
					Number of hours to spend on assignment each day: <br>
					</p>");

        		}
	
    			else
    			{
    				print("<p>No Data entered</p>");
    			}
		
    		?>

			<div id="confirmation">

			<button type="submit">View Calendar</button>

			</div>
		
		<?php include('includes/sidebar.php'); ?>		
		<?php include('includes/footer.php'); ?>

	</div> 

	</body>

</html>