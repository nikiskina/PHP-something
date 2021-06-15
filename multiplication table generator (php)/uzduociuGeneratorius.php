<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
	href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap"
	rel="stylesheet">
<title>Užduočių generatorius</title>
</head>
<body>
	<div class="wrapper">


		<h1>Daugybos lentelės darbalapiai</h1>

<?php
if (! empty($_GET['dydis']) && ! empty($_GET['lygis'])) {
    $dydis = $_GET['dydis'];
    $lygis = $_GET['lygis'];
} else {
    $dydis = 0;
    $lygis = 0;
}
?>

 <form method="get">
			<div class="input">

				<div class="left">
					<h4>Pasirinkite lentelės dydį:</h4>
					<input type="radio" name="dydis" required value="5"
						<?php if (isset($_GET['dydis']) && $_GET['dydis']=="5") echo 'checked="checked"';?>>Nuo
					1 iki 5 <br> <input type="radio" name="dydis" value="10"
						<?php if (isset($_GET['dydis']) && $_GET['dydis']=="10") echo 'checked="checked"';?>>
					Nuo 1 iki 10 <br> <input type="radio" name="dydis" value="12"
						<?php if (isset($_GET['dydis']) && $_GET['dydis']=="12") echo 'checked="checked"';?>>
					Nuo 1 iki 12 <br> <input type="radio" name="dydis" value="15"
						<?php if (isset($_GET['dydis']) && $_GET['dydis']=="15") echo 'checked="checked"';?>>
					Nuo 1 iki 15
				</div>

				<div class="right">
					<h4>Pasirinkite sudėtingumo lygį:</h4>
					<input type="radio" name="lygis" required value="0.9"
						<?php if (isset($_GET['lygis']) && $_GET['lygis']=="0.9") echo 'checked="checked"';?>>
					Paslėpta 10%<br> <input type="radio" name="lygis" value="0.7"
						<?php if (isset($_GET['lygis']) && $_GET['lygis']=="0.7") echo 'checked="checked"';?>>
					Paslėpta 30%<br> <input type="radio" name="lygis" value="0.5"
						<?php if (isset($_GET['lygis']) && $_GET['lygis']=="0.5") echo 'checked="checked"';?>>
					Paslėpta 50%<br>
				</div>

			</div>
			<div>
				<button type="submit">Generuoti</button>
			</div>

		</form>

		<table border="1">
			<tbody>
 <?php
for ($i = 1; $i <= $dydis; $i ++) {
    ?>
 <tr>
 <?php for($j=1; $j<=$dydis; $j++){?>
 <td <?=($i==1||$j==1)?'class="first"':'' ?>> <?php

if ($i == 1) {
            echo $j;
        } else if ($j == 1) {
            echo $i;
        } else {
            if (rand(4, (($dydis) * ($dydis))) <= (($dydis) * ($dydis)) * $lygis) {
        echo $i*$j;
     }}
 ?>
 </td>
  <?php } ?>
  </tr>
 <?php } ?>
 </tbody>
		</table>

	</div>
</body>
</html>