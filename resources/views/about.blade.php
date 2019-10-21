<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<h1>About View</h1><hr>
<h3 style="color: green">This field is used for POST request </h3>

<form action="{{ route('submit')}}" method="POST">
	{{csrf_field()}}
	<input type="text" name="name">
	<input type="submit" name="submit" value="send">
</form>

<h3 style="color:dodgerblue">This field is used for GET request </h3>

<form action="{{ url('/profile/about/data')}}" method="GET">
	<input type="text" name="name">
	<input type="submit" name="submit" value="send">
</form>
</body>
</html>