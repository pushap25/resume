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

    <link rel="stylesheet" href="{{asset('front/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/upload.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
</head>
<body>
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
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row img-container">
            <div class="front-bg">
                <div class="rotater">
                    <div class='options' id="options">
                        <div class="upload_btn">
                            <div class="btn_content" id = "upload">Upload</div>
                        </div>
                        <div class="upload_btn">
                            <div class="btn_content" id = 'download'>Download</div>
                        </div>
                    </div>
                    <div class="processing_content" id="processing_content">
                        <div class="upload_btn">
                            <div class='btn_content' id = 'back'>Back</div>
                        </div>
                        <div class="content" id="content">
                                <div class="content_error">
                                    <marquee width="80%" direction="left" height="20px">Oops, Something went wrong!!</marquee>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('layouts.footer')
<script type="text/javascript">
        $('.container-fluid .front-bg .rotater .processing_content .content').ready(function(){
            console.log('CHeck');
        });
    $(document).ready(function(){
        $('#upload').click(function(){
            $('.container-fluid .front-bg .rotater').css({'border-radius':'2%', 'width':'80%', 'height':'80%'});
            $('#options').hide();
            $('#processing_content').show();
            $('#content').html('Upload Content');
        });
        $('#download').click(function(){
            $('.container-fluid .front-bg .rotater').css({'border-radius':'2%', 'width':'80%', 'height':'80%'});
            $('#options').hide();
            $('#content').html('');
            $('#processing_content').show();
            $.ajax({
                url: "{{ url('/download_content') }}",
                method: 'get',
                success: function(result){
                    for(k=0;k<result.count;k++) {
                        $('#content').append(`<div class="gal"><div class="gal_content"><div class="gal_img"><img height = "100px" src="`+result.cover_image+`"></div><div class="gal_title">`+result.data[k].title+`</div><div class="gal_owner">By `+result.data[k].user.name+`</div></div></div>`);
                    }
                },
                error: function(xhr,status,error) {
                    $('.content_error').show();
                }
            });
        });
        $('#back').click(function(){
            $('.container-fluid .front-bg .rotater').css({'border-radius':'60%', 'width':'auto', 'height':'auto'});
            $('#options').show();
            $('#processing_content').hide();
            $('#processing_content').hide();
        });
    });
</script>
</body>
</html>