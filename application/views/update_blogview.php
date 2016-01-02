
	<div class="container">
	<div class="col-md-3">
		</div>
		<div class="col-md-6">
	<div class="page-header">
			<h2>Update blog</h2>
		</div>
	<?php 
			echo validation_errors();
			echo form_open_multipart('Blog/change' , array('class'=>'form-horizontal')); 
		?>
			<input type="text" name="id" value="<?php echo $blog['blog']->id; ?>" hidden/>
			<div class="form-group">
			<?php echo form_label('Image' , 'inputImage' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php echo img(array('src'=>'./uploads/'.$blog['blog']->image , 'width'=>'100','height'=>'100','class'=>'img-thumbnail')) ;?>
				</div>
			</div>
			<div class="form-group">
			<?php echo form_label('Title' , 'inputTitle' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php echo form_input(array('class'=>'form-control','name'=>'title', 'id'=>'inputTitle' ,'placeholder'=>'Enter the title of your blog','value'=>$blog['blog']->title));?> 
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
							echo form_dropdown('category_id',$options ,$blog['blog']->category_id , $attributes);
					?>
					
				</div>
			</div>
			<div class="form-group">
				<?php echo form_label('Body' , 'inputBody' ,array('class'=>'control-label col-xs-2'));?>
				<div class="col-xs-10">
					<?php echo form_textarea(array('class'=>'form-control','name'=>'body', 'id'=>'inputBody' ,'placeholder'=>'Enter your blog','value'=>$blog['blog']->body));?> 
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
					<?php echo form_button(array('name'=>'submit' , 'class'=>'btn' ,'content'=>'Update'));?>
				</div>
			</div>
		<?php echo form_close();?>
	
		</div>
		</div>
	</body>
</html>