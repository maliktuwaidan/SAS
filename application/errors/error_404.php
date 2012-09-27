<!DOCTYPE html>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
	</head>
	<body>
		<div class="result"></div>
		<script>
			$.post('http://localhost/sas/error404', function(data) {
			  $('.result').html(data);
			});
		</script>
	</body>
</html>