
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chu</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="col-xs-10 col-xs-ofset-1">
					<form action="" method="POST" role="form">
						<div class="form-group">
							<label for="">Mã môn học:</label>
							<input type="text" class="form-control" name="ma-mh" id="ma-mh" placeholder="Mã môn học">
						</div>
					</form>
					<div class="show">
						<div style="height:200px; overflow-y: scroll;" id="postTable">
						<table class="table table-hover" id="table" >
							
						</table>
				</div>
					</div>
					<div class="btn-group">
							<button type="button" name="test" id="test" class="btn btn-default">Kiểm tra</button>
							<button type="button" name="save" id="save" class="btn btn-default">Ghi nhận</button>
						</div>
				</div>
			</div>
			<div class="col-xs-6">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>Mon hoc</th>
							<th>TC</th>
							<th>Lop MH</th>
							<th>Giao vien</th>
							<th>Lich hoc</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function() {
		$('#test').click(function(event) {
			/* Act on the event */
			event.preventDefault();

		});
	});
</script>