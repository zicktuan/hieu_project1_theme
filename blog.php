<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="post-wrap">
	<div class="post-media">
		<img src="assets/img/preview/blog/audio-post.jpg" alt="">
	</div>
	<div class="post-header">
		<h2 class="post-title"><a href="<?php echo  get_the_permalink($post->ID); ?>"><?php echo $post->post_title ?></a></h2>
		<div class="post-meta">By <a href="#">author name here</a> / 6th June 2014 / in <a href="#">Design</a>, <a href="#">Photography</a> / <a href="#">27 Comments</a> / 18 Likes / <a href="#">Share This Post</a></div>
	</div>
	<div class="post-body">
		<div class="post-excerpt">
			<p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. In posuere odio sed libero tincidunt commodo a vel ipsum. Mauris fringilla tellus aliquam, egestas sem in, malesuada nunc. Etiam condimentum felis odio, vel mollis est tempor non...</p>
		</div>
	</div>
	<div class="post-footer"> 
		<span class="post-read-more"><a href="#" class="btn btn-theme btn-theme-transparent btn-icon-left"><i class="fa fa-file-text-o"></i>Read more</a></span>
	</div>
</article>
<?php endwhile; endif ?>