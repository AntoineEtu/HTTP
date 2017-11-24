<!DOCTYPE html>
<html>
	<head> 
      <title>La POO c'est cool</title>
	</head> 
	<body>
		<h1>Le titre</h1>
		<p>Le contenu</p>
		<div><?php
		require('triangle.php');
		$triangle1 = new Triangle(1,1,sqrt(2));
		$triangle1->findTrianlgeType();
			?></div>
	</body>

</html>