<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Records</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="container">
<?php
// connect to the database
include('connect-db.php');

// get results from database
$result = mysqli_query($connection, "SELECT * FROM athankson_phonelist");
?>

<h1>Phonebook Application</h1>

<div style="float: right; margin-top: 30px;">
<?php if(isset($_SESSION['username'])) { ?>
  <a href="logout.php">Logout of your User Account</a>
<?php } else { ?>
  <a href="login.php">Login to your User Account</a>
<?php } ?>
</div>

<p>Check it out</p>
<table class="table table-striped" border>
  <tr class="bg-secondary">
    <th scope="col">ID</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Phone</th>
    <th scope="col">Email</th>
    <?php if(isset($_SESSION['username'])) { ?>
    <th colspan="2"><em>functions</em></th>
    <?php } ?>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <?php if(isset($_SESSION['username'])) { ?>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["id"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    <?php } ?>
  </tr>
<?php
// close the loop
}
?>
</table>

<div>
  <br>
	<?php if(isset($_SESSION['username'])) { ?>
  <a href="new.php">Add a new record</a>
  <?php } ?>
</div>

</body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>
