<?php
//post  method.
if(isset($_POST['Id'])){
$id=$_POST['Id'];

}
if(isset($_POST['name'])){
	$Name=$_POST['name'];
}
if(isset($_POST['email'])){
	$Email=$_POST['email'];
}



$conn= new mysqli("localhost","root","","project");
if ($conn-> connect_error) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  
}
if(isset($_POST['submit'])){
	$stmt=$conn->prepare("insert into registration(Id,name,email)values(?,?,?)");
	$stmt->bind_param("iss",$id,$Name,$Email);
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
		Name : <input type="text" name="name"><br>
		E-mail :<input type="email" name="email"><br>
		<input type="submit" name="submit">
	
	</form>

</body>
</html>