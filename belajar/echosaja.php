<?php 
$buah = array('pertama'=>'Pepaya',
			  'kedua'=>'Mangga',
			  'ketiga'=>'Pisang',
			  'keempat'=>'Jambu',
			  'kelima'=>'Jengkol');

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Belajar Echo</title>
</head>
<body>
<?php 
foreach ($buah as $ib=>$b){ ?>
	<h1>Resep <?php echo "$ib:"; ?> Cara Membuat Jus <?php echo "$b"; ?></h1>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
<?php }
 ?>

</body>
</html>