<?php include 'includes/document_head.php'?>
		<div id="login_box" class="round_all clearfix">
			<label class="fields"><strong>Username</strong><input type="text" id="username" class="indent round_all"></label>

			<label class="fields"><strong>Password</strong><input type="password" id="password" class="indent round_all"></label>
			<button class="button_colour round_all" onClick="location.href='dashboard.php'"><img width="24" height="24" alt="Locked 2" src="images/icons/small/white/Locked%202.png"><span>Login</span></button>
			<div id="bar" class="round_bottom">
				<label><input type="checkbox">Auto-login in future.</label>
				<a href="#">Forgot your password?</a>
			</div>		
			<a href="#" id="login_logo"><span>Adminica Pro II</span></a>
		</div>
		<?php include 'includes/template_options.php'?>
		<script type="text/javascript"> 
            var username = new LiveValidation('username');
			username.add( Validate.Presence );
			
            var password = new LiveValidation('password');
			password.add( Validate.Presence );
		</script>  
<?php include 'includes/closing_items.php'?>