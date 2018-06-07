<!DOCTYPE html>
<html>
<head>
	<title>Welcome Email</title>
</head>
<body>
<h2>Welcome to the site {{$user['name']}}</h2>
<br>
Your Registered email-id is {{$user['email']}}, please click on the below link to
<br>
<a href="{{url('user/verify',$user->verifyUser->token)}}">Verify Email</a>
</body>
</html>