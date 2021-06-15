<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Namų darbai</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.container {
	margin-top: 20px;
}

h4 {
	margin-top: 0px;
	padding-top: 0px;
}
</style>
</head>
<body>
	<div class="container">

		<!-- Static navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="http://poligonas.lt/">Baltic talents</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="trikampiai.php">Trikampiai</a></li>
						<li><a href="degtukai.php">Degtukai</a></li>
						<li><a href="testas.php">Testas</a></li>
					</ul>

				</div>
				<!--/.nav-collapse -->
			</div>
			<!--/.container-fluid -->
		</nav>

		<div class="jumbotron">
			<h1>Parduodame degtukus!</h1>
			<b><p class="d">Perkantiems daugiau - NUOLAIDOS!!!</p></b>
			<form action="degtukai.php" method="post">
				Įveskite degtukų kiekį (vnt): <br> <input name="kiekis"
					type="number" required><br>
				<button class="trikampiai">Skaičiuoti kainą</button>
			</form>
			<hr>
			<h3>
				<b>
<?php
if (isset($_POST['kiekis'])) {
    $kiekis = $_POST['kiekis'];

    $kaina = 1;
    if ($kiekis <= 1000 && $kiekis >= 0) {
        $kaina = $kiekis * 0.28;
        echo "$kiekis degtukų kaina:  $kaina EUR";
    } else if ($kiekis >= 1001 && $kiekis <= 2000) {
        $kaina = $kiekis * 0.2716;
        echo "$kiekis degtukų kaina:  $kaina EUR";
        ;
    } else {
        $kaina = $kiekis * 0.2688;
        echo "$kiekis degtukų kaina: $kaina EUR";
    }
}
?>
		</b>
			</h3>

		</div>
	</div>
</body>
</html>