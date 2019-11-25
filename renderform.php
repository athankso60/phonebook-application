<?php session_start(); ?>
<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $phone, $email, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body class="container">
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<h1>Add or Edit a Record</h1>
<p>Do your worst. Then submit</p>
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<strong>ID:</strong> <?php echo $id; ?>
	<div class="form-group">
	<div><label><strong>First Name: *</strong></label></div>
	<input class="form-control id = "firstname" type="text" name="firstname" value="<?php echo $firstname; ?>"/>
	</div>
	<div class="form-group">
	<div><label><strong>Last Name: *</strong></label></div>
	<input class="form-control" id = "lastname" type="text" name="lastname" value="<?php echo $lastname; ?>"/>
	</div>
	<div class="form-group">
	<div><label><strong>Phone number: *</strong></label></div>
	<input class="form-control" id="phone" type="text" name="phone" value="<?php echo $phone; ?>"/>
	</div>
	<div class="form-group">
	<div><label><strong>Email: *</strong></label></div>
	<input class="form-control" id="email" type="text" name="email" value="<?php echo $email; ?>"/>
	</div>
	<div>* required</div>
	<input class="btn btn-primary" id = "submit" type="submit" name="submit" value="Submit">
</form>

<div>
	<br>
	<a href=".">Cancel</a>
</div>

</body>
</html>
<?php
}
?>