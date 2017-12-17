<!DOCTYPE html>

<html>
	<head>
		<title> Robot Evolution </title>
		<meta charset='ut8'>
		<script type="text/javascript" src="fonction.js"> </script>
	</head>
	
	<body>
		<h1 id="xp"> Experience restante : </h1>
		<h1 id="nbLvl"> Votre lvl actuel : </h1>
		<h1 id="grade"> Votre grade actuel : </h1>
		<script>
		
		
		
		document.getElementById('xp').innerHTML += calculLvl(50000)[0];
		document.getElementById('nbLvl').innerHTML += calculLvl(50000)[1];
		document.getElementById('grade').innerHTML += Grade(calculLvl(50000)[1]);
		</script>

	</body>
</html>