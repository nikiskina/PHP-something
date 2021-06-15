<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="">
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

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Apklausa</h1>




		</div>
		<div class="row">


			<div class="col-md-8 col-md-offset-2">

				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Testas</h3>
					</div>
					<div class="panel-body">
						<form class="form2" action="testas.php" method="post">
							<div class="row">
								<div class="col-md-6 col-xs-6">
									<img
										src="https://upload.wikimedia.org/wikipedia/commons/5/55/Rocky_Mountain_Bull_Elk.jpg"
										class="img-responsive">
								</div>
								<div class="col-md-6 col-xs-6">

									<h4>Koks tai gyvūnas?</h4>
									<input type="radio" name="atsakimas1" value="1"> Elnias <br> <input
										type="radio" name="atsakimas1" value="2"> Šuo <br> <input
										type="radio" name="atsakimas1" value="3"> Katinas <br> <input
										type="radio" name="atsakimas1" value="4"> Begemotas <br> <br>
									<div>
									 
									
<?php
if (isset($_POST['atsakimas1'])) {
    $atsakimas1 = $_POST['atsakimas1'];

    if ($atsakimas1 == "1") {
        echo '<div class="alert alert-success" >Taip, teisingai tai yra elnias</div>';
    } else {
        echo '<div class="alert alert-danger" >Ne, tai yra elnias</div>';
    }
}
?>
									 </div>

								</div>
							</div>

							<div class="row" style="margin-top: 10px;">
								<div class="col-md-6 col-xs-6">
									<img
										src="https://upload.wikimedia.org/wikipedia/commons/4/47/American_Eskimo_Dog.jpg"
										class="img-responsive">
								</div>
								<div class="col-md-6 col-xs-6">

									<h4>Koks tai gyvūnas?</h4>
									<input type="radio" name="atsakimas2" checked value="5"> Elnias <br> <input
										type="radio" name="atsakimas2" cheked value="6"> Šuo <br> <input
										type="radio" name="atsakimas2" cheked value="7"> Katinas <br> <input
										type="radio" name="atsakimas2" checked value="8"> Begemotas <br> <br>
									 
									 
									 
<?php
if (isset($_POST['atsakimas2'])) {
    $atsakimas2 = $_POST['atsakimas2'];
    if ($atsakimas2 == "6") {
        echo '<div class="alert alert-success" >Taip, teisingai tai yra šuo </div>';
    } else {
        echo '<div class="alert alert-danger">Ne, tai yra šuo</div>';
    }
}
?>
								
									 
								
							</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col-md-6 col-xs-6">
									<img
										src="https://upload.wikimedia.org/wikipedia/commons/f/f6/Shaded_Tan_Maine_Coon_cat.jpg"
										class="img-responsive">
								</div>
								<div class="col-md-6 col-xs-6">

									<h4>Koks tai gyvūnas?</h4>
									<input type="radio" name="atsakimas3" value="9"> Elnias <br> <input
										type="radio" name="atsakimas3" value="10"> Šuo <br> <input
										type="radio" name="atsakimas3" value="11"> Katinas <br> <input
										type="radio" name="atsakimas3" value="12"> Begemotas <br> <br>
									<div>
									 
<?php
if (isset($_POST['atsakimas3'])) {
    $atsakimas3 = $_POST['atsakimas3'];
    if ($atsakimas3 == "11") {
        echo '<div class="alert alert-success" >Taip, teisingai tai yra katinas</div>';
    } else {
        echo '<div class="alert alert-danger" >Ne, tai yra katinas</div>';
    }
}
?>
									 </div>

								</div>
							</div>
							<div class="row" style="margin-top: 10px;">

								<div class="col-md-6 col-xs-6 col-md-offset-6 col-xs-offset-6">

									<input type="submit" class="btn btn-lg btn-primary btn-block"
										value="Spėti">

								</div>
							</div>
						</form>
						
						
<?php
if (isset($_POST['atsakimas1']) && ($_POST['atsakimas2']) && ($_POST['atsakimas3'])) {
    $atsakimas1 = $_POST['atsakimas1'];
    $atsakimas2 = $_POST['atsakimas2'];
    $atsakimas3 = $_POST['atsakimas3'];

    if ($atsakimas1 == "1" && $atsakimas2 == "6" && $atsakimas3 == "11") {
        echo '<h3 class="rezultatas"> Jūs atsakėte teisingai į 3 klausimus iš 3 ir surinkote 100%</h3>';
    } else if (($atsakimas1 == "1" && $atsakimas2 == "6") xor ($atsakimas2 == "6" && $atsakimas3 == "11") xor ($atsakimas1 == "1" && $atsakimas3 == "11")) {
        echo '<h3 class="rezultatas"> Jūs atsakėte teisingai į 2 klausimus iš 3 ir surinkote 66,6%</h3>';
    } else if ($atsakimas1 == "1" || $atsakimas2 == "6" || $atsakimas3 == "11") {
        echo '<h3 class="rezultatas"> Jūs atsakėte teisingai į 1 klausimą ir surinkote 33,3%</h3>';
    } else {
        echo '<h3 class="rezultatas"> Jūs atsakėte neteisingai į visus klausimus ir surinkote 0%</h3>';
    }
}
?>
						
					</div>
				</div>


			</div>


		</div>
	</div>
	<!-- /container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>