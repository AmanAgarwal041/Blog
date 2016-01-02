
		<div class="container">
			<div class="col-md-3">
			</div>
			<div class="col-md-6 page-header">
				<div class="col-xs-14">
					<div class="col-xs-2"></div>
					<button id="log-btn" name="log-btn" class="btn col-xs-5">Login</button>
					<button id="reg-btn" name ="reg-btn" class="btn col-xs-5">Register</button>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="col-md-3">
		</div>
		
		<div class="col-md-6">
		<div id="login">
		
			<?php 
				echo validation_errors();
				echo form_open_multipart('User/login' , array('class'=>'form-horizontal')); 
			?>
			<div class="form-group">
				<label for="inputEmail" class="control-label col-xs-2">Email</label>
				<div class="col-xs-10">
					<?php echo form_input(array('class'=>'form-control','name'=>'email', 'id'=>'inputEmail' ,'placeholder'=>'Enter your email'));?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="control-label col-xs-2">Password</label>
				<div class="col-xs-10">
					<?php echo form_password(array('class'=>'form-control','name'=>'passwd', 'id'=>'inputPassword' ,'placeholder'=>'Enter your password'));?> 
				</div>
			</div>
			<div class="form-group">
			<label class="control-label col-xs-2">&nbsp;</label>
				<div class="col-xs-10">
					<button type="Submit" class="btn">Submit</button>
				</div>
			</div>
			</div>
		</form>
		
		
		<div id="register">
		
				<?php 
			echo validation_errors();
			echo form_open_multipart('User/register' , array('class'=>'form-horizontal')); 
		?>
			<div class="form-group">
				<?php echo form_label('Email' , 'inputEmail' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php echo form_input(array('class'=>'form-control','name'=>'email', 'id'=>'inputEmail' ,'placeholder'=>'Enter your email'));?>
				</div>
			</div>
			<div class="form-group">
				<?php echo form_label('Password' , 'inputPassword' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php echo form_password(array('class'=>'form-control','name'=>'passwd', 'id'=>'inputPassword' ,'placeholder'=>'Enter your password'));?> 
				</div>
			</div>
			
			<div class="form-group">
			<div class="control-label col-xs-2">&nbsp;</div>
				<div class="col-xs-10">
					<?php echo form_button(array('name'=>'submit' , 'class'=>'btn' ,'content'=>'Update'));?>
				</div>
			</div>
		<?php echo form_close();?>
		
		</div>
		</div>
		</div>
		<script>
			$(document).ready(function (){
				$('#log-btn').addClass('btn-primary');
				$('#register').hide("slow");
				$('#login').show("slow");
				$('#log-btn').on("click",function(){
					$('#log-btn').addClass('btn-primary');
					$('#reg-btn').removeClass('btn-primary');
					$('#register').hide("slow");
					$('#login').show("slow");
				});
				$('#reg-btn').on("click",function(){
					$('#reg-btn').addClass('btn-primary');
					$('#log-btn').removeClass('btn-primary');
					$('#login').hide("slow");
					$('#register').show("slow");
				});
			});
		</script>
	</body>
</html>