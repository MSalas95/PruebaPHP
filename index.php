<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<title> Prueba PHP</title>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">					

			<div class="navbar-header">
			<a href="#" class="navbar-brand">Cook site</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navHeaderCollapse">

				<form class="navbar-form navbar-left" role="search">
		        	<div class="form-group">
		          		<input type="text" class="form-control" placeholder="Search">
		        	</div>
		        	<button type="submit" class="btn btn-default">Submit</button>
	      		</form>
				
				<ul class="nav navbar-nav navbar-right">
					<li class ="active"><a href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google+</a></li>						
						</ul>
					</li>					
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>

			</div>

		</div>

	</div>


	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>