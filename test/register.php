<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2>Create Registration Form</h2>
      <div class="jumbotron mt-3">
         <small class="form-text text-muted">*Enter details</small>
<form action="login.php" method="POST">

<div class="form-group col-md-6">
<label>Registration Number</label>
<input type="text" name="registration_number"  class="form-control" id="registration_number" >
</div>

<div class="form-group col-md-6">
<label>Password</label>
<input type="password"  class="form-control" id="password">
</div>
    <div class="form-group col-md-6">
<label>Vehicle id</label>
     <input type="text" name="vehicle_id"  class="form-control" id="vehicle_id">
</div>

<div class="form-group col-md-6">
<div class="form-check">
<label>Vehicle Type</label>
  <input type="radio" class="form-check-input" id="vehicle_type" name="vehicle_type">
    <label class="form-check-label" for="materialGroupExample1">2 wheeler</label>
  <input type="radio" class="form-check-input" id="vehicle_type" name="vehicle_type">
  <label class="form-check-label" for="materialGroupExample1">4 wheeler</label>
</div>
</div>

<div class="form-group col-md-6">
     <label>Vehicle Brand</label>
   <input type="text" name="vehicle_brand" class="form-control" id="vehicle_brand">
</div>

   <button type="submit" class=" btn btn-success">Sign in<a href="login.php" ></a> </button>
 
</form>
</body>
</html>