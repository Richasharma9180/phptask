<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2>Login Form</h2>
      <div class="jumbotron mt-3">
         <small class="form-text text-muted">*Enter credentials</small>
<form action="login.php" method="POST">

<div class="form-group col-md-6">
<label>Registration number</label>
<input type="text" name="registration_number"  class="form-control" id="registration_number">
</div>
<div class="form-group col-md-6">
<label>Password</label>
<input type="passsword" name="password"  class="form-control" id="password">
</div>
<button type="submit" class="btn btn-primary" name="save">Save</button>
<button type="submit" class=" btn btn-success">Sign Up<a href="register.php"></a> </button>
</form>
</body>
</html>