<!DOCTYPE html>
<html lan="en_US">
<head>
	<meta charset="utf-8"/>
	<title>Curency Converter</title>
	<style type="text/css">
		body{
			background-color: #e7e7e7;
		}
		.center{
			text-align: center;
		}
		select{
			font-size: 1.3em;
		}
	</style>
</head>
<body>
	<h1 class="center">Simple Currency Converter</h1>
	<form class="center" action="" method="post">

		<label for="from">From</label>
		<select name="from">
			<option value="usd">USD</option>
			<option value="euro">Euro</option>
		</select>

		<label for="to">To</label>
		<select name="to">
			<option value="pkr">PAKSITAN</option>
			<option value="ind">INDIA</option>
		</select>

		<label for="c_input">Enter Amount</label>
		<input type="number" name="camount" required=""/>

		<input type="submit" value="Convert" name="convert"/>
	</form>
	<br /><br /><br />
</body>
</html>

<?php 
	if (isset($_POST['convert'])) {
		$from=$_POST['from'];
		$to=$_POST['to'];
		$amount=$_POST['camount'];

		if($amount==''||is_int($amount))
		{
			echo "Please Enter Valid Amount";
			exit();
		}

		echo '<div class="center">';
		if($from=='usd'){
			if($to=='pkr'){
				$result=$amount*98.75;
				echo "USD==>   ".$result." pkr";
			}
			else if ($to=='ind') {
				$result=$amount*60.17;
				echo "USD==>   ".$result." ind";
			}
		}
		else if ($from=='euro') {
			if($to=='pkr'){
				$result=$amount*134.59;
				echo "Euro==>   ".$result." pkr";
			}
			else if ($to=='ind') {
				$result=$amount*81.87;
				echo "Euro==>   ".$result." ind";
			}
		}
		echo '</div>';
	}
 ?>