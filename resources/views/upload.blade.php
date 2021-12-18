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
                <div class="rotater" id="rotater">
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
                            <div class='btn_content' id = 'back' val = '1'>Back</div>
                        </div>
                        <div class="content" id="content">
                            <div class="content_error">
                                <marquee width="80%" direction="left" height="20px">Oops, Something went wrong !</marquee>
                            </div>
                        </div>
                        <div class="gal_content" id="gal_contents">
                            <div class="content_error2">
                                <marquee width="80%" direction="left" height="20px">Oops, Something went wrong !</marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('layouts.footer')
<script type="text/javascript">
        var check = 1;
        function open_pic(parent_id, pic_id) {
            $('#rotater').fadeTo('slow',1);
            $('#back').attr('val','3');
            $('#gal_contents .gal').hide();
            $('#pic_'+parent_id+'[pic_id="'+pic_id+'"]').show();
            $('#pic_'+parent_id+'[pic_id="'+pic_id+'"] .gal_img img').css('height','350px');
            $('#gal_contents .gal').addClass('open_pic');
            check = 2;
        }

        function open_gal(gal_id) {
            $('#back').attr('val','2');
            $('#content').hide();
            $('#gal_contents').show();
            $('#gal_contents').html('');
            $.ajax({
                url: "{{ url('/gal_content/') }}",
                method: 'get',
                data: {
                    gal_id: gal_id,
                },
                success: function(result){
                    console.log(result);
                    console.log(result.length);
                    for(k=0;k<result.length;k++) {
                        $('#gal_contents').append(`
                            <div class="gal pic_content" parent_id="`+result[k].parent_id+`" id="pic_`+result[k].parent_id+`" pic_id="`+result[k].id+`">
                                <div class="gal_img">
                                    <img height = "125px" src="{{asset('/`+result[k].images+`')}}">
                                </div>
<!--                            <div class="gal_title">`+result[k].id+`</div>
-->                         </div>`);
                    }
                    $('.pic_content').click(function(){
                        if(check==1){
                            open_pic($(this).attr('parent_id'), $(this).attr('pic_id'));
                        }
                    });
                },
                error: function(xhr,status,error) {
                    $('.content_error2').show();
                }
            });
        }
    $(document).ready(function(){
        $('#upload').click(function(){
            $('.container-fluid .front-bg .rotater').css({'border-radius':'2%', 'width':'80%', 'height':'80%'});
            $('#options').hide();
            $('#processing_content').show();
            $('#content').html('Upload Content Under Development !');
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
                        $('#content').append(`
                            <div class="gal">
                                <div class="gal_content" id="gal_content" gal_id="`+result.data[k].id+`">
                                    <div class="gal_img">
                                        <img height = "125px" src="{{asset('/`+result.data[k].cover_image+`')}}">
                                    </div>
                                    <div class="gal_title">
                                        `+result.data[k].title+`
                                    </div>
                                    <div class="gal_owner" id="user_id_`+result.data[k].id+`">`+
                                        `By `+result.data[k].user.name+`
                                    </div>
                                </div>
                            </div>`);
                    }
                    $('#gal_content').click(function(){
                        open_gal($(this).attr('gal_id'));
                    });
                },
                error: function(xhr,status,error) {
                    $('.content_error').show();
                }
            });
        });
        $('#back').click(function(){
            $('#gal_contents').hide();
            if ($('#'+this.id).attr('val') == '3') {
                $('#rotater').fadeTo('slow',.95);
                $('#back').attr('val','2');
                $('#gal_contents .gal').removeClass('open_pic');
                $('#gal_contents').show();
                $('#gal_contents .gal').show();
                $('#gal_contents .gal .gal_img img').css('height','125px');
                check = 1;
            }else if ($('#'+this.id).attr('val') == '2') {
                $('#content').show();
                $('#back').attr('val','1');
                $('.content_error2').hide();
            } else {
                $('.container-fluid .front-bg .rotater').css({'border-radius':'60%', 'width':'auto', 'height':'auto'});
                $('#options').show();
                $('#processing_content').hide();
                $('#processing_content').hide();
            }
        });
    });
</script>
</body>
</html>