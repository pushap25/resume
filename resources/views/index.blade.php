<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!-- LinkedIn Profile Link -->
	<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

	<link rel="stylesheet" href="{{asset('front/css/index.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/skills.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/academics.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/projects.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/work.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/contact.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">

	<script type="text/javascript">
		function resizeWindow(){
			$('.rotater').animate({marginLeft:0});
			$('.skills .skill_list').animate({'scrollTop':0});
		}
	</script>

</head>
<body onresize="resizeWindow()">
	<nav class='navbar navbar-inverse'>
		<div class="container-fluid">
			<div class="navbar-header col-md-5">
				<a class="navbar-brand inline-grid p-t-10 header" href="{{asset('/')}}">
					<strong>Pushap Saini</strong>
					<span class="f-10">An Interactive Developer With Passion Of Creativity</span>
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav nav-list">
					<li>
						<a class='header' href="#home">Home</a>
					</li>
					<li>
						<a class='header' href='#work'>Work</a>
					</li>
					<li>
						<a class='header' href='#projects'>Projects</a>
					</li>
					<li>
						<a class='header' href='#academics'>Academics</a>
					</li>
					<li>
						<a class='header' href='#skills'>Skills</a>
					</li>
					<li>
						<a class='header' href='#contact'>Contact</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right nav-list">
					@if(\Auth::check())
						<li>
							<a class="header" href="{{asset('admin')}}">Admin</a>
						</li>
					@else
						<li>
							<a class="header" href="{{route('login')}}">Login</a>
						</li>
					@endif
					<!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
<!-- 		<div class='row'>
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
 -->		<div class="row img-container">
			<div class="front-bg">
				<div class="rotater">
 					<div id="home" class="hid">@include('layouts.home')</div>
					<div id="work" class="works hid">@include('layouts.work')</div>
					<div id="projects" class="projs hid">@include('layouts.projects')</div>
					<div id="academics" class="acads hid">@include('layouts.academics')</div>
					<div id="skills" class="skills hid">@include('layouts.skills')</div>
 					<div id="contact" class="contact hid">@include('layouts.contact')</div>
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
<script type="text/javascript" src="{{asset('front/js/index.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){

		window.onload = rotater;

		$('[data-toggle="tooltip"]').tooltip();

		$.ajax({
			url: "{{ url('/skills') }}",
			method: 'get',
			// data: {
			// 	name: jQuery('#name').val(),
			// 	type: jQuery('#type').val(),
			// 	price: jQuery('#price').val()
			// },
			success: function(result){
				for(k=0;k<result.length;k++) {
					$('#skill_list').append(`<div class="skills">
												<div class="skill" data-toggle="tooltip" title="`+result[k].description+`">
													<div class="topic">
												        <div class="skill_center">
												          	<div class="skill2">
												            	<div class="topic2">
													            	<div class="content">`
													            		+result[k].name+
													            	`</div>
													            </div>
													        </div>
													    </div>
													</div>
												</div>
										    </div>`);
				}
			},
			error: function(xhr,status,error) {
				$('.skill_error').show();
			}
		});

		$.ajax({
			url: "{{ url('/acads') }}",
			method: 'get',
			// data: {
			// 	name: jQuery('#name').val(),
			// 	type: jQuery('#type').val(),
			// 	price: jQuery('#price').val()
			// },
			success: function(rs){
				result = rs.data;
				$('#acad_list').attr('count',rs.count);
				$('#acad_list').css('width',rs.count+'00%');
				for(k=0;k<result.length;k++) {
					$('#acad_list').append(`<div class="first" id="acad_slider_`+(k+1)+`">
												<div class="acad-title">`
													+result[k].title+
												`</div>
												<img class="acad-img" src="`+result[k].images+`" alt="`+result[k].title+`">
												<div class="def">
													<span>`
														+result[k].description+
													`</span>
												</div>
											</div>`);
				}
			},
			error: function(xhr,status,error) {
				$('.acad_error').show();
			}
		});

		$.ajax({
			url: "{{ url('/projects') }}",
			method: 'get',
			// data: {
			// 	name: jQuery('#name').val(),
			// 	type: jQuery('#type').val(),
			// 	price: jQuery('#price').val()
			// },
			success: function(rs){
				result = rs.data;
				$('#proj_list').attr('count',rs.count);
				$('#proj_list').css('width',rs.count+'00%');
				for(k=0;k<result.length;k++) {
					$('#proj_list').append(`<div class="first" id="proj_slider_`+(k+1)+`">
												<div class="proj-title">`
													+result[k].title+
												`</div>
												<div class="def">
													<span>`
														+result[k].description+
													`</span>
												</div>
											</div>`);
				}
			},
			error: function(xhr,status,error) {
				alert('ij');
				$('.proj_error').show();
			}
		});

		$.ajax({
			url: "{{ url('/work') }}",
			method: 'get',
			// data: {
			// 	name: jQuery('#name').val(),
			// 	type: jQuery('#type').val(),
			// 	price: jQuery('#price').val()
			// },
			success: function(rs){
				result = rs;
				$('#work_list').attr('count',rs.length);
				for(k=0;k<result.length;k++) {
					$('#work_list').append(`<div class="first" id="work_slider_`+(k+1)+`">
						<img class="work-img" src="`+result[k].image+`" alt="`+result[k].title+`">
						</div>`);
					// $('#work_list').append(`<div class="first" id="work_slider_`+(k+1)+`">
					// 							<div class="work-title">`
					// 								+result[k].title+
					// 							`</div>
					// 							<div class="def">
					// 								<span>`
					// 									+result[k].description+
					// 								`</span>
					// 							</div>
					// 						</div>`);
				}
			},
			error: function(xhr,status,error) {
				$('.work_error').show();
			}
		});

		$('a[href^="#"]').click(function(){
			event.preventDefault();
			var bar_clicked=$(this).attr('href');
			// console.log(bar_clicked);
			// console.log('rotater: '+$('#work').offset().left);
			// console.log(bar_clicked+': '+ $(bar_clicked).offset().left);
			var pos=$(bar_clicked).offset().left-$('#home').offset().left;
			$('.rotater').animate({'scrollTop':0,marginLeft:(-1)*pos});
			// console.log(pos);
		});
	});


</script>
</body>
</html>