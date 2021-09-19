<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Budget Tool</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header"><a class="navbar-brand" href="#">BudgetToolz</a></div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="project_01.php">Home</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
</head>
<body>
	<h1>             -               </h1>
    <div class="page-header"><h1>Budget Calculator</h1></div>
	<p><strong>Made by Nghia Pham</strong></p>
    <p>This is a tool for calculating monthly budget.</p>
	<fieldset><h3><i>Please enter the following informations:</i></h3>
		<form method="post">
			<label for="income">Monthly Income:</label><br>
			<input type="text" id="income" name="income"><br>
			<label for="bill">Gas and Water bills:</label><br>
			<input type="text" id="bill" name="bill"><br>
			<label for="bill2">Internet and Telephone Bills:</label><br>
			<input type="text" id="bill2" name="bill2"><br>
			<label for="trans">Gas and Transportation:</label><br>
			<input type="text" id="trans" name="trans"><br>
			<label for="food">Food:</label><br>
			<input type="text" id="food" name="food">
			<input type="submit" value="Submit">
		</form>
	</fieldset>
	<?php
	$income = $_POST['income'];
	$bill = $_POST['bill'];
	$bill2 = $_POST['bill2'];
	$trans = $_POST['trans'];
	$food = $_POST['food'];
	
	$list = [
		'Monthly Income' => $income,
		'Gas and Electric Bill' => $bill,
		'Internet and Telephone Bill' => $bill2,
		'Gas and Transportation' => $trans,
		'Food and Miscellaneous' => $food
	];
	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			if (isset($_POST['income'], $_POST['bill'], $_POST['bill2'], $_POST['trans'], $_POST['food']) && is_numeric($_POST['income']) && is_numeric($_POST['bill']) && is_numeric($_POST['bill2']) && is_numeric($_POST['trans']) && is_numeric($_POST['food']) ) {
				
				echo '<table border="5" cellspacing="4" cellpadding="4" align="center">';
				echo '<thread>
				<tr>
                <th><h2>Name</h2></th>
                <th><h2>Cost</h2></th>
				</tr>
				</thread>
				<tbody>';
				foreach($list as $titles => $rating) {
				echo "<tr><td>$titles</td><td>$rating</td></tr>\n";
				}
				
				echo '</tbody></table>';
				
				$saving = $_POST['income'] - $_POST['bill'] - $_POST['bill2'] - $_POST['trans'] - $_POST['food'];
				
				echo '<div class="page-header"><h1>Total Estimated Cost</h1></div>
				<h2><p><strong>Based on the information you have entered, with an based income after taxes of ' . $_POST['income'] . ' dollars, you will have ' . number_format($saving, 2) . ' dollars left by the end of the month.</strong></p></h2>';
			
			} else {
				echo '<div class="page-header"><h1>Error!</h1></div>
				<p class="text-danger">Please enter a value for the prompt above.</p>';
			}
		}
		
	?>
</body>
</html>