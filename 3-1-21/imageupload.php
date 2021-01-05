<?php
//post  method.
if(isset($_POST['id'])){
$Id=$_POST['id'];

}
if(isset($_POST['image'])){
	$Image=$_POST['image'];
}




$conn= new mysqli("localhost","root","","test1");
if ($conn-> connect_error) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  
}
if(isset($_POST['submit'])){
	$stmt=$conn->prepare("insert into registration(id,image)values(?,?)");
	$stmt->bind_param("ib",$Id,$image);
	$stmt->execute();
	echo "registration successuffully.";
	$stmt->close();
	$conn->close();

}
	


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="?" method="post">
		Id:<input type="number" name="Id"><br>
		Image:<input type="file" name="image"><br>
		<input type="submit" name="submit">
	
	</form>

</body>
</html>