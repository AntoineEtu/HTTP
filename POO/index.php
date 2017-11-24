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
		echo('Premier Triangle : 1,1,sqrt(2)  ');
		$triangle1->findTrianlgeType();
		echo('<br>');
		$triangle2 = new Triangle(3,4,5);
		echo('Deuxieme Triangle : 3,4,5  ');
		$triangle2->findTrianlgeType();
		echo('<br>');
		$triangle3 = new Triangle(1,1,4);
		echo('Troisieme Triangle : 1,1,4  ');
		$triangle3->findTrianlgeType();
		echo('<br>');
		$triangle4 = new Triangle(1,1,1);
		echo('Quatrième Triangle : 1,1,1  ');
		$triangle4->findTrianlgeType();
		echo('<br>');
			?></div>
	</body>

</html>