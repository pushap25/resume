<html>
<head>
	<style type="text/css">
		div {
			margin: 60px 20px;
		}
		.header {
			margin-top: 0px;
		}
	</style>
</head>
<body>
	<div class='header'>
		Hi <strong>{{ $uname }}</strong>,
	</div>
	<div class='message'>
		{{ $umessage }}
	</div>
	<div class='content'>
		<p>Name: {{ $name }}</p>
		<p>Email: {{ $email }}</p>
		<p>Subject: {{ $subject }}</p>
		<p>Message: {{ $message }}</p>
	</div>
	<div class=''>
		<p>Regards,</p>
		<p>{{ env('EMAIL_USERNAME') }}</p>
		<p><a href="{{ env('EMAIL_SITE') }}">{{ env('EMAIL_SITE') }}</a></p>
	</div>
</body>
</html>