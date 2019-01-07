<?php
	require"connection_db.php";
	function getbrand()
	{
	global $con;
	$getbrandQuerry = "select *from brand";
	$result = mysqli_query($con,$getbrandQuerry);
	while($row = mysqli_fetch_assoc($result)){
	$title = $row['brand_title'];
	$id = $row['brand_id'];
	echo "<li> <a class='nav-link' href='#'>$title</a></li>";
	}
	}
?>