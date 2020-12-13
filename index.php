<?php  include('php.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM university WHERE id=$id");
	
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$surname = $n['surname'];
			$ac_id = $n['ac_id'];
			$reg_date = $n['reg_date'];
			$email = $n['email'];
		}
	}
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>University List | Department of Informatics | UoWM</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="js.js"></script>
	</head>
	<body id="top" data-spy="scroll" data-target=".navbar">
		<?php $results = mysqli_query($db, "SELECT * FROM university"); ?>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>              
					</button>
					<a class="navbar-brand" href="index.php">University List</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#add_student">Add</a></li>
						<li><a href="#student_list">List</a></li>
						<li><a href="https://www.github.com/diminaso-uowm/university-list" target="_blank">GitHub Repo</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="jumbotron text-center">
			<h1>University List</h1>
			<h3>Dept. of Informatics | UoWM</h3>
		</div>
		<div id="add_student" class="container-fluid text-center">
			<h2>Add Student</h2>
			<h4>Enter student's credentials</h4>
			<br>
			<form method="post" action="php.php" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div>
					<label>Name</label>
					<br>
					<input type="text" required maxlength="50" name="name" value="<?php echo $name; ?>">
				</div>
				<div>
					<label>Surname</label>
					<br>
					<input type="text" required maxlength="50" name="surname" value="<?php echo $surname; ?>">
				</div>
				<div>
					<label>Academic ID</label>
					<br>
					<input type="text" required maxlength="10" name="ac_id" value="<?php echo $ac_id; ?>">
				</div>
				<div>
					<label>Registation Date</label>
					<br>
					<input type="date" required maxlength="50" name="reg_date" value="<?php echo $reg_date; ?>">
				</div>
				<div>
					<label>Email</label>
					<br>
					<input type="email" required maxlength="100" name="email" value="<?php echo $email; ?>">
				</div>
				<div>
					<br>
					<?php if ($update == true): ?>
					<button class="button btn" type="submit" name="update" title="Update"><i class="fas fa-edit"></i></button>
					<?php else: ?>
					<button class="button btn" type="submit" name="save" title="Save"><i class="fas fa-save"></i></button>
					<?php endif ?>
				</div>
			</form>
		</div>
		<div id="student_list" class="container-fluid text-center bg-grey">
			<h2>Student List</h2>
			<h4>The table below indicates student's personal info</h4>
			<br>
			<div style="overflow-x:auto;">
				<table id="table" align="center">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Surname</th>
							<th>Academic ID</th>
							<th>Registation Date</th>
							<th>Email</th>
							<th colspan="2">Actions</th>
						</tr>
					</thead>
					<?php while ($row = mysqli_fetch_array($results)) { ?>
					<tr>
						<td class="counter"></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['surname']; ?></td>
						<td><?php echo $row['ac_id']; ?></td>
						<td><?php echo $row['reg_date']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td>
							<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" title="Edit"><i class="fas fa-user-edit"></i></a>
						</td>
						<td>
							<a href="php.php?del=<?php echo $row['id']; ?>" class="del_btn" title="Delete"><i class="fas fa-user-times"></i></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<footer class="container-fluid text-center">
			<a href="#top" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
			<p>&copy; 2020, <a href="https://university-list.herokuapp.com">University List.</a><br>Bootstrap theme made by <a href="https://www.w3schools.com/" target="_blank">w3schools</a>.</p>
		</footer>
	</body>
</html>