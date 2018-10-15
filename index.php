<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title></title>
</head>
<body>
	<?php echo "Hello World"; ?>
	<br>
	<?php echo "Today is ". date("l"). "."; ?>
	Here's the latest news
	<?php $name = "Jobert"; 
		$age=19; $countries=array("Japan","Korea", "Philippines"); echo "$name <br>"; echo "$age <br>"; echo "$countries[2] <br>"; ?>
	<?php $username="John";
		  $email_from="Pedro Peterson";
		  $email_subject = "Hey, $username! You have a new message!";
		  $email_body="You have received a new message from your website contact form. \n\n". 
		  "The message came from $email_from";
		  echo "$username <br>";
		  echo "$email_from <br>";
		  echo "$email_subject <br>";
		  echo "$email_body <br>";
		  ?>
	<?php $username = "Jane Smith";
	echo $username;
	echo "<br>";
	$current_user = $username;
	echo $current_user; ?>

	<?php $team = array("Kato","Shem","Angeli","Ali","Carmela");
	$color = array("red","green","blue");
	$fruits = array("mango","apple","orange");

	echo $team[2];
	echo $color[0];
	echo $fruits[1];
	echo $fruits[2]; 
	 ?>

</body>
</html>