<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Document</title>
</head>
<body class="bg-dark text-white">
	<?php include 'navbar.php';
		  include 'connection.php';
		  include 'theme.php';
	?>
	<div class="container" style="margin-top: 25px;">
		<h2>INTRODUCTION</h2>
		<div>
		The Catholic Education Week biblical quote is, “We, who are many, are one body in Christ, and individually we are members, one of another.” (Romans 12:5)

	Each year, the Catholic community of Ontario engages in a week-long celebration of the unique identity and distinctive contributions of Catholic education during Catholic Education Week. This year’s celebration is entitled, “Catholic Education: We are Many, We are One” and will be celebrated during the week of April 30-May 5. The theme for Catholic Education Week 2023 was inspired by the following considerations
		</div>
		<br><div>The theme for Catholic Education Week 2023 was inspired by the following considerations:</div></br>
		<?php
			foreach ($db as $data) {
				$pictureURL = $data['pictureURL'];
				$theme = $data['theme'];
				echo '<br><div>';
					echo "<br><img src='{$pictureURL}' width=400px /></br>";
					echo "<br><div> {$theme} </div></br>";
				echo '</div></br>';
			}
			$conn = null;
		?>
	</div>
	
</body>
</html>