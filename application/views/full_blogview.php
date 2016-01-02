
	<div class="container">
	<div class="well" style="text-align:center;">
		<div class="page-header">
		<h3>Displaying specifics selected Blog</h3> 
	</div>
	<?php
		if(!$blogs)
		echo "No Blogs related to this category or No blog present";
		else
		?>
		<p>
		
		<b><?php echo '<h4>'.$blogs->title .'</h4>'; ?> </b>
		<br/>
		<?php echo '<h5><u>CATEGORY</u> : '.$blogs->category . '</h5>';?>
		<br/>
		<?php echo img(array('src'=>'./uploads/'.$blogs->image , 'width'=>'300','height'=>'300' , 'class'=>'img-circle')) ;?>
		<br/>
		<blockquote><?php echo $blogs->body; ?></blockquote>
		<br/>
		<?php echo "<span style='color:rgb(246, 181, 12);'>Posted on : </span>".$blogs->poston; ?>
		<br/></p>
		<hr/>
	<span style="text-align:right;color:red;"><?php echo anchor('Blog/change_blog/'.$blogs->id,'Edit'); ?></span>
	</div>	
	</div>	
	</body>
</html>