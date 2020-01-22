<?php 
if(isset($_post['btn'])){
echo $_post['id'];
echo $_post['username'];
echo $_post['age'];
echo $_post['contact'];
echo $_post['email'];}
else{
	echo"welcome guest";
}
?>
<html>
	<head>
		<title>input Form</title>
	</head>
	
	<body>
	<form action="index.php" method="post" >
	Name :<br>
	<input type="text" name="Name" ><br>
	username :<br>
	<input type="text" name="userName"><br>
	age :<br>
	<input type="text" name="age" ><br>
	contact :<br>
	<input type="text" name="contact"><br>
	E-mail :<br>
	<input type="text" name="Email"><br>
	
	<input type="submit">
	</form>
	</body>

</html>