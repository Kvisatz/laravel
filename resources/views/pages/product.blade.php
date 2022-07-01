<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="/public/obr" method="POST">
		@csrf
		<input type="checkbox" name="first" value="1">1
		<input type="checkbox" name="second" value="2">2
		<input type="checkbox" name="third" value="3">3
		<input type="submit" value="Send">
	</form>
</body>
</html>