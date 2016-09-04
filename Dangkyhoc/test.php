<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="test">
				<form action="" method="POST" role="form">
					<legend>Form title</legend>
				
					<div class="form-group">
						<label for="">label</label>
						<input type="text" class="form-control" name="abc" id="abc" placeholder="Input field">
					</div>
					<button type="submit" id="cde" name="cde" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function() {
		$("#cde").click(function(event) {
			/* Act on the event */
			event.preventDefault();
			var tex = $('#abc').val();
			var match = tex.match('y');
			alert(match);
		});
	});
</script>