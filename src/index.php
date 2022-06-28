<html>
<head>
    <title>Placeholder Image Server - Example</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="w3.css">
    <style>
        body { background-color: #FFFFFF; }
        img { border: 1px solid #AAAACC; }
		input[type="number"] { width: 60px; border: 1px solid purple; }
		h2 { color: purple; }
		a { text-decoration: none; color: #f59b42; }
    </style>
</head>
<body class="w3-white">
	<div class="w3-container w3-blue">
		<h1>Placeholder Images</h1>
	</div>
	<div class="w3-padding">
		<p>Serves a blank image having size between 1x1 pixels and 1000x1000 pixels.</p>
		<p>Hosted on <a href="https://heroku.com/">Heroku</a> &raquo; <a href="https://transparent-images.herokuapp.com/">Transparent Images</a></p>
		<p>
			Source code on github: <a href="https://github.com/anytizer/pixel.php">@anytizer/pixel.php</a>,
			<a href="https://github.com/anytizer/pixel.php/blob/master/readme.md">FAQ</a>
		</p>

		<h2>Your own image size</h2>
		<form method="GET" action="image/" name="chooser">
			Width (w): <input type="number" name="w" value="20" min="1" max="1000" placeholder="1" required="required" /> x
			Height (h): <input type="number" name="h" value="20" min="1" max="1000" placeholder="1000" required="required" />
			<a href="">
				<img src="image/magnifier-glass.svg" height="20" style="border: none;" />
			</a>
			<input type="submit" value="View Image" class="w3-button w3-blue w3-hover-blue" /> |
			<a href="#" onclick="return _randomize();" class="w3-button w3-purple w3-hover-blue"><img src="image/infinity-loop.svg" height="20" style="border: none;" /> Randomize</a>
		</form>

		<h2>Examples</h2>
		<p>
			<img src="image/?w=40&amp;h=30" width="40" height="30" />
			<img src="image/?w=400&amp;h=30" width="400" height="30" />
		</p>
		<p>
			<img src="image/?w=130&amp;h=90" width="130" height="90" />
			<img src="image/?w=310&amp;h=90" width="310" height="90" />
		</p>
		<p>
			<img src="image/?w=80&amp;h=80" width="80" height="80" />
			<img src="image/?w=80&amp;h=80" width="80" height="80" />
			<img src="image/?w=80&amp;h=80" width="80" height="80" />
			
			<img src="image/?w=90&amp;h=80" width="90" height="80" />
			
			<img src="image/?w=20&amp;h=80" width="20" height="80" />
			<img src="image/?w=20&amp;h=80" width="20" height="80" />
			<img src="image/?w=20&amp;h=80" width="20" height="80" />
			<img src="image/?w=20&amp;h=80" width="20" height="80" />
		</p>
		<p>
			<img src="image/?w=40&amp;h=10" width="450" height="100" />
		</p>
		<p>
			<img src="image/?w=10&amp;h=10" width="10" height="10" />
			<img src="image/?w=20&amp;h=20" width="20" height="10" />
			<img src="image/?w=10&amp;h=10" width="10" height="10" />
			<img src="image/?w=10&amp;h=20" width="10" height="20" />
			<img src="image/?w=10&amp;h=20" width="10" height="20" />

			<img src="image/?w=40&amp;h=10" width="40" height="20" />
			<img src="image/?w=40&amp;h=10" width="40" height="20" />
			<img src="image/?w=40&amp;h=10" width="40" height="20" />
			<img src="image/?w=40&amp;h=10" width="40" height="20" />
			<img src="image/?w=40&amp;h=10" width="40" height="20" />
			<img src="image/?w=40&amp;h=10" width="40" height="20" />
			
			<img src="image/?w=40&amp;h=10" width="90" height="20" />
		</p>
		
		<p>
			<a href="https://uxwing.com/photos-icon/" style="border: none;"><img src="image/photos.svg" style="height: 30px; color: red; border: none;" /></a>
			Made by: <a href="https://github.com/anytizer">Bimal Poudel</a>
		</p>
	</div>
	
	<script>
		function _rand(min, max)
		{
			var rand = parseInt(Math.random() * (max - min) + min);
			return rand;
		}
		function _randomize()
		{
			var min = 1;
			var max = 1000;
			
			var width = _rand(min, max);
			var height = _rand(min, max);

			document.forms["chooser"].elements["w"].value = width;
			document.forms["chooser"].elements["h"].value = height;
			
			return false;
		}
	</script>
</body>
</html>