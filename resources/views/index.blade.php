<!DOCTYPE html>
<html>
<head>
	<title>Pushap Saini</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- jQuery Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- LinkedIn Profile Link -->
	<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
	<link rel="stylesheet" href="{{asset('front/css/index.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/contact.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">

</head>
<body>
	<div class="container-fluid">
		<div class='row'>
			<div class="navbar-header col-md-6">
				<a class="navbar-brand inline-grid p-t-10" href="{{asset('/')}}">
					<strong>Pushap Saini</strong>
					<span class="f-10">An Interactive Developer With Passion Of Creativity</span>
				</a>
			</div>
			<ul class="nav navbar-nav col-md-6">
				<li>
					<a href="{{asset('/')}}">Home</a>
				</li>
				<li>
					<a href='#work'>Work</a>
				</li>
				<li>
					<a href='#projects'>Projects</a>
				</li>
				<li>
					<a href='#academics'>Academics</a>
				</li>
				<li>
					<a href='#skills'>Skills</a>
				</li>
				<li>
					<a href='#contact'>Contact</a>
				</li>
				@if(\Auth::check())
					<li>
						<a href="{{asset('admin')}}">Admin</a>
					</li>
				@else
					<li>
						<a href="{{route('login')}}">Login</a>
					</li>
				@endif
			</ul>
		</div>
		<div class="row img-container">
			<div class="front-bg">
				<div class="rotater">
<!-- 					<div id="home" class="hid">@include('layouts.home')</div>
					<div id="work" class="hid">@include('layouts.work')</div>
					<div id="projects" class="hid">@include('layouts.projects')</div>
					<div id="academics" class="hid">@include('layouts.academics')</div>
					<div id="skills" class="hid">@include('layouts.skills')</div>
 -->					<div id="contact" class="contact hid">@include('layouts.contact')</div>
				</div>
			</div>
			<!-- <img class="front-bg" src="{{asset('images/edu44.jpg')}}"> -->
<!-- 			<div class="img-container-content">
				An Interactive Developer With Passion Of Creativity
			</div> -->
		</div>
		<!-- <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="pushap-saini-82598311b"></div> -->
		@include('layouts.footer')
	</div>
<script type="text/javascript">
	$(document).ready(function(){

		$('a[href^="#"]').click(function(){
			event.preventDefault();
			var bar_clicked=$(this).attr('href');
			// console.log(bar_clicked);
			// console.log('rotater: '+$('#work').offset().left);
			// console.log(bar_clicked+': '+ $(bar_clicked).offset().left);
			var pos=$(bar_clicked).offset().left-$('#home').offset().left;
			$('.rotater').animate({marginLeft:(-1)*pos});
			// console.log(pos);
		});
	});

</script>
</body>
</html>