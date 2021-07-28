<?php
   $error = "";
   if(isset($_POST['submit'])){
    $vm = $_POST['vehiclemodel'];
    $bn = $_POST['brandname'];
    $vd = $_POST['vehicledescription'];
    $ppd = $_POST['priceperday'];
    $ft = $_POST['fueltype'];
    $sc = $_POST['seatingcapacity'];
	
	$air = $_POST['airconditioner'];
	$power = $_POST['powerdoorlocks'];
	$brake = $_POST['brakeassist'];
	

    $conn = mysqli_connect("127.0.0.1", "root", "", "online_car_rental");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($conn){
        $sql = "INSERT INTO tblvehicles VALUE(null, $vm, $bn, $vd, $ppd, $ft, $sc, $air, $power, $brake)";

        $result = mysqli_query($conn, $sql);

        if($result){
           print"<script>window.alert('the car has successfuly been added')</script>";

            header("location , post-avehical.php");
        } else{
            print"<script>window.alert('something went wrong. do some verifications')</script>";
        }
    }else{
        echo "erro";
    }
   }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal | Admin Post Vehicle</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
   <h3 style="text-align: center; background: grey;"> Post a Vehicle</h3>
   <hr>
   <form method = "POST" action = "testpost.php" class="form-horizontal" role="form">
   <label><h4>Vehicle Model:</h4></label>
   <input type="text" name = "vehiclemodel"><br>

   <label><h4>Select Brand:</h4></label>
    <select name="brandname" style = "color: white; background: black; margin-left:10px; width:230px; border-radius:10px;">
    <option>select</option>
    <option>Toyota</option>
    <option>Corolla</option>
    <option>Mercedes</option>
    </select><br><br>

    <label><h4>Vehicle Description:</h4></label>
   <textarea name = "vehicledescription"></textarea><br>

   <div class="form-group">
<label class="col-sm-2 control-label">Price Per Day(in FCFA)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="priceperday" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class = "select" name="fueltype" required>
<option value=""> Select </option>

<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
<option value="Gazoil">Gazoil</option>
<option value="Super">Super</option>
<option value="CNG">CNG</option>
</select>
</div>
</div>

    <label><h4>Seating Capacity:</h4></label>
   <input type="text" name = "seatingcapacity"><br>

   Select image to upload:
</div><br><br>
<hr>

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Accessories</div>
<div class="panel-body">


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
<label for="airconditioner"> Air Conditioner </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
<label for="powerdoorlocks"> Power Door Locks </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
<label for="antilockbrakingsys"> AntiLock Braking System </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="brakeassist" name="brakeassist" value="1">
<label for="brakeassist"> Brake Assist </label>
</div>
</div>



<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powersteering" name="powersteering" value="1">
<input type="checkbox" id="powersteering" name="powersteering" value="1">
<label for="inlineCheckbox5"> Power Steering </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="driverairbag" name="driverairbag" value="1">
<label for="driverairbag">Driver Airbag</label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
<label for="passengerairbag"> Passenger Airbag </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerwindow" name="powerwindow" value="1">
<label for="powerwindow"> Power Windows </label>
</div>
</div>

<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Add</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
   </form>
</body>
</html>