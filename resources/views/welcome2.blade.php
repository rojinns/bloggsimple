<!DOCTYPE html>

<html>

<head>

<title>  </title>

</head>

<body>
<h1> Hello <?php echo $name ?> </h1>
<ul>
<?php 

$tasks = 
	[
	'Go to the store',
	'Finish this cast',
	'Clean the house'];

foreach($tasks as $task) :?>

<li> <?= $task; ?> </li>

<?php  endforeach; ?>

</ul>

</body>
</html>