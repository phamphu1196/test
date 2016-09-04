<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-xs-4 col-xs-ofset-4">
			<div class="panel panel-default col-xs-ofset-4 colxs-4">
				<div class="panel-header">
					<h3>Login</h3>
				</div>
				<div class="panel-body">
					<form action="" method="POST" role="form">
						<div class="form-group">
							<label for="">Account: </label>
							<input type="text" class="form-control" name="masv" id="masv" placeholder="Ma sinh vien">
							<label for="">Password: </label>
							<input type="password" class="form-control" name="pass" id="pass" placeholder="mat khau">
						</div>
						
						<button type="submit" id="login" name="login" class="btn btn-primary">login</button>
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
<script>
$(document).ready(function() {
	$("#login").click(function(event) {
		event.preventDefault();
		var pattern = 'Sai t&#234;n truy cập hoặc mật khẩu!';
		var masv = $('#masv').val();
		var pass = $('#pass').val();
		$.post('curl_login.php',
		 	{
		 		masv: masv,
		 		pass: pass
		 	}, 
		 	function(data, textStatus, xhr) {
		 		console.log(data);
		 		var matc = data.match(pattern);
		 		alert(matc);
		 		if(matc == pattern){
		 			document.write("ban nhap sai ten dang nhap hoac mat khau");
		 			
		 		}
		 		else{
		 			// window.location.href="home.php";
		 		}
		});
		
	});
});
</script>
