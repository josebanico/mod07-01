<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title></title>
</head>
<body>
	<?php $song=array("stars","shine","yellow");
	echo "Look at the $song[0], look how they $song[1], and everything you do.";


	echo "Yeah, they were $song[2]"; 
	?>
	<ul>
		<li><?php echo $song[0] ?></li>
		<li><?php echo $song[1] ?></li>
		<li><?php echo $song[2] ?></li>
	</ul>
	<?php $colors=array("Red","Green", "Yellow"); $animals=array("Panda","Turtle","Lion"); $members=array("Kevin","Michael","Paula","Edison","Nica","Drei");
	echo "$colors[0] $animals[0]<br>";
	echo "$members[0], $members[1]<br>";
	echo "$colors[1] $animals[1]<br>";
	echo "$members[2], $members[3]<br>";
	echo "$colors[2] $animals[2]<br>";
	echo "$members[4], $members[5]<br>";?>

</body>
</html> 