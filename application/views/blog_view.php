	<div class="container">
	<div class="page-header">
	<h2>Displaying all blogs Related to the specifics selected</h2>
	</div>
	<div class="row">
	
		<?php
		if(!$blogs)
		echo "No Blogs related to this category or No blog present";
		else
		foreach($blogs as $blogsdata):
		echo '<div class="col-sm-6 col-md-4"><div class="thumbnail" style="padding-top:2rem;">' . img(array('src'=>'./uploads/'.$blogsdata->image , 'width'=>'200','height'=>'200')) .
				 '<div class="caption"><h3>'. $blogsdata->title .'</h3>' .anchor('Blog/view_category/'.$blogsdata->category , $blogsdata->category) .
				'<p>' .character_limiter($blogsdata->body,10)  .'...'.
				anchor('Blog/view_full_blog/'.$blogsdata->id ,"More") .'</p>'.
					"<span style='color:rgb(246, 181, 12);'>Posted on : </span>".$blogsdata->poston . '</div>' .
						'</div></div>';
		endforeach;
		?>		
       </div>
       </div>
	</body>
</html>