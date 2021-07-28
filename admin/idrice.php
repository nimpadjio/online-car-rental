<?php 
if(isset($_POST['submit'])){
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$descrip = $_POST['descrip'];
	$conn = mysqli_connect("localhost", "root", "", "online_car_rental");
	if($conn){
		
	$sql = "INSERT INTO idrice VALUES(null, $brand, $model, $descrip)";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo"successful";
	}else{
		echo"unsuccessful";
	}
	
}
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title>idrice</title>
 </head>
 <body>
 	<form action="idrice.php" method="post">
 		brand:
 		<input type="text" name="brand" id="brand"><br>
 		Model:
 		<input type="text" name="model" id="model"><br>
 		Description:
 		<input type="text" name="descrip" id="descrip"><br>
 		<button name="submit" value="submit">Submit</button>
 	</form>
 </body>
 </html>
 ?>