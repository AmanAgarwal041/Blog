
	<div class="container">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<div class="page-header">
			<h2>Create Blog Area</h2>
			</div>
				<?php 
					echo validation_errors();
					echo form_open_multipart('Blog/qexecute' , array('class'=>'form-horizontal')); 
				?>
			<div class="form-group">
				<?php echo form_label('Title' , 'inputTitle' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php echo form_input(array('class'=>'form-control','name'=>'title', 'id'=>'inputTitle' ,'placeholder'=>'Enter the title of your blog'));?> 
				</div>
			</div>
			<div class="form-group">
				<?php echo form_label('Category' , 'inputCategory' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php
							$attributes = 'class="form-control" id = "inputCategory"';
							$options=array();
							foreach($categories as $cat){
							$options[$cat->category_id] = $cat->category;
							}
							echo form_dropdown('category_id',$options ,'1' , $attributes);
					?>
				</div>
			</div>
			<div class="form-group">
				<?php echo form_label('Body' , 'inputBody' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php echo form_textarea(array('class'=>'form-control','name'=>'body', 'id'=>'inputBody' ,'placeholder'=>'Enter your blog'));?> 
				</div>
			</div>
			<div class="form-group">
				<?php echo form_label('Image' , 'inputImage' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php echo form_upload(array('class'=>'form-control','name'=>'image', 'id'=>'inputImage'));?> 
				</div>
			</div>	
			<div class="form-group">
			<div class="control-label col-xs-2">&nbsp;</div>
				<div class="col-xs-10">
					<?php echo form_button(array('name'=>'submit' , 'class'=>'btn' ,'content'=>'Submit'));?>
				</div>
			</div>
		<?php echo form_close();?>
		</div>
	</div>
</body>
</html>