<html>
<body>
 
<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		$name=$_REQUEST['fname'];
		if(!empty($name))
		{
			echo $name;
		}
?>
</body>
</html>

