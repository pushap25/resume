<div class="section-header">
	<h1>Contact Me</h1>
</div>
<div class="section-desc">
	<span>Hello Visitor! Thank You for visiting my site.</span>
	<span>Please feel free to leave me a message or contact me.</span>
</div>
<div class="section-content">
	<div class="section-left">
		<!-- <div class="social">
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
		</div> -->
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
      	<table class="w-100">
      		<tr>
      			<td class="inl-res">
					<input class="name" type="text" name="name" placeholder="Name">
					<span class="return-msg" id='error-name'> </span>
				</td>
				<td class="inl-res">
					<input class="email" type="text" name="email" placeholder="Email">
					<span class="return-msg" id='error-email'></span>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input class="subject" type="text" name="subject" placeholder="Subject">
					<span class="return-msg w-100" id='error-subject'></span>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea class="message" type="text" name="message" placeholder="Message"></textarea>
					<span class="return-msg w-100" id='error-message'></span>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<!-- <span class="return-msg m-t-30" id="return-msg"></span> -->
					<input class="send" type="submit" id="ajaxSubmit" name="send" value="SEND">
				</td>
			</tr>
		</table>
      </form>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('input[type="text"], textarea[type="text"]').focusout(function(){
			if($(this).val() != ''){
				$(this).css('border','0px');
				$('#error-'+$(this).attr('name')).html('');
				$('#error-name').css('height','auto');
			}
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
					$('#ajaxSubmit').removeAttr('disabled');
					$('html, body').css('cursor','default');
					if(result.result == 'error'){
						for(var i in result.errors) {
							$("input[name='subject'], textarea[name='message']").css('margin-bottom','0px');
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