<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
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



<title>Namų darbai</title>
</head>
<body>
	<div class="container">
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
			<h1>Trikampių tikrinimas</h1>
			<p>Ar egzistuoja toks trikampis?</p>



			<form action="trikampiai.php" method="post">
				Krastinės a ilgis: <br> <input class="krastinesInput" name="a"
					type="number" required><br> Krastinės b ilgis: <br> <input
					class="krastinesInput" name="b" type="number" required><br>
				Krastinės c ilgis: <br> <input class="krastinesInput" name="c"
					type="number" required><br>

				<button class="trikampiai">Patikrinti</button>
			</form>

			<hr>
			<h3>
				<b>
<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if (($a < ($b + $c)) && ($b < ($a + $c)) && ($c < ($a + $b))) {
        echo "Toks trikampis egzistuoja.";
    } else {
        echo "Toks trikampis neegzistuoja.";
    }
}
?>
		</b>
			</h3>

		</div>
	</div>
</body>
</html>