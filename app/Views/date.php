<?= $this->include('include/top')?>
<?= $this->include('include/header')?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
	<title>Document</title>
</head>
<body>
<br>
	<div class="card-body">
		<table id="data1" class="table table-bordered">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Number</th>
					<th>Treatment</th>
					<th>Staus</th>
					<th>Date</th>
				</thead>
				<tbody>
					<?php foreach($users as $user):?>
					<tr>
						<td><?= $user->id;?></td>
						<td><?= $user->name;?></td>
						<td><?= $user->email;?></td>
						<td><?= $user->firstname;?></td>
						<td><?= $user->lastname;?></td>
						<td><?= $user->number;?></td>
						<td><?= $user->treatment;?></td>
						<td><?= $user->status;?></td>
						<td><?= $user->datetime;?></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
	</div>
	<br>
	<div>
	<?= $this->include('patient/profile-slider')?>
	</div>
	<script>
		$(document).ready( function () {
    	$('#data1').DataTable();
	});
	</script>
	
</body>
</html>