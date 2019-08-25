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
      <form action="include/message.php" method="POST">
        <div>
          <input class="name" type="text" name="name" placeholder="Name" onblur="addname(this)" required>
          <input class="email" type="text" name="email" placeholder="Email" onblur="validateEmail(this)" required>
          <div class="error" id="error"></div>
        </div>
        <input class="subject" type="text" name="subject" placeholder="Subject" onblur="addsubject(this)" required>
        <textarea class="message" type="text" name="message" placeholder="Message" onblur="addmessage(this)" required></textarea>
        <div class="sent" id="sent">Message Sent Successfully!!!</div>
        <input class="send" type="submit" name="send" onclick="send()" value="SEND">
      </form>
      <?php if(isset($_GET['email'])){ ?>
      <script>
        document.getElementById("sent").style.display="block";
      </script>
      <?php } ?>
	</div>
</div>