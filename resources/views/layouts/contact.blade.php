<div class="section-header">
	<h1>Contact Me</h1>
</div>
<div class="section-desc">
	<span>Hello Visitor! Thank You for visiting my site.</span>
	<span>Please feel free to leave me a message or contact me.</span>
</div>
<div class="section-content">
	<div class="section-left">
		<div class="social">
		    <a href="https://www.facebook.com/Pushapsaini" target="_blank">
		      <div class="fb">
		        <div class="two">
		          <div class="twoo">
		            <img src="images/fb_icon.png" width="60px">
		          </div>
		        <div class="one">
		          <div class="onee">
		            <img src="images/fb_icon.png" width="60px">
		          </div>
		        </div>
		        </div>
		      </div>
		    </a>
		</div>
		<div class="social">
		    <a href="https://www.linkedin.com/in/pushap-saini-82598311b" target="_blank">
		      <div class="ln">
		        <div class="two">
		          <div class="twoo">
		            <img src="images/linkedin-in-icon.svg" width="40px">
		          </div>
		        <div class="one">
		          <div class="onee">
		            <img src="images/linkedin-in-icon.svg" width="40px">
		          </div>
		        </div>
		        </div>
		      </div>
		    </a>
		</div>
	</div>
	<div class="section-right">
      <form method="POST" id='msg-form'>
        <div>
          <input class="name" type="text" name="name" placeholder="Name">
          <input class="email" type="text" name="email" placeholder="Email">
        </div>
        <div>
          <span class="return-msg" id='error-name'></span>
          <span class="return-msg" id='error-email'></span>
        </div>
        <input class="subject" type="text" name="subject" placeholder="Subject">
        <span class="return-msg" id='error-subject'></span>
        <textarea class="message" type="text" name="message" placeholder="Message"></textarea>
        <span class="return-msg" id='error-message'></span>
        <span class="return-msg" id="return-msg"></span>
        <input class="send" type="submit" id="ajaxSubmit" name="send" value="SEND">
      </form>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('input[type="text"], textarea[type="text"]').focusout(function(){
			console.log($(this).val());
			if($(this).val() != '')
				$(this).css('border','0px');
		});
		$('#ajaxSubmit').click(function(e){
			e.preventDefault();
			$('input[type="text"], textarea[type="text"]').css('border','0px');
			$('#return-msg').html('');
			$('#ajaxSubmit').attr('disabled','true');
			$('html, body').css('cursor','wait');
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: "{{ url('/message') }}",
				method: 'post',
				data: $('#msg-form').serialize(),
				success: function(result){
					console.log(result);
					$('#ajaxSubmit').removeAttr('disabled');
					$('html, body').css('cursor','default');
					if(result.result == 'error'){
						console.log(result.errors);
						for(var i in result.errors) {
							if (i == 'message')
								$('textarea[name="'+i+'"]').css('border','2px solid red');
							else
								$('input[name="'+i+'"]').css('border','2px solid red');
							$('#error-'+i).html(result.errors[i]);
						}
						$('#return-msg').css('color','red');
						$('#return-msg').html(result.message);
					}else{
						$('input[type="text"], textarea[type="text"]').val('');
						$('#return-msg').css('color','green');
						$('#return-msg').html(result.message);
					}
				}
			});
		});
	});
</script>