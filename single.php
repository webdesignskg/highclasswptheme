<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title"><?php the_title(); ?></h1>
</div>
 
<div class="single-post container main-content">
    <div class="row">
	
<div class="col-sm-8 blog-main">
	<div class="container">
 <?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="blog-single">
	 <div class="blog-post-meta">
				<ul class="post-meta">
					<li class="post-meta-li">
						<div class="post-date">
							<i class="far fa-calendar-check"></i> <?php the_date(); ?> 
						</div>
					</li>
					<li class="post-meta-li">
						<div class="post-author">
							<i class="fas fa-user"></i> <?php the_author(); ?>
						</div>
					</li>
					<li class="post-meta-li">
						<div class="post-category">
							<i class="fas fa-book"></i> <?php the_category( ', ' ); ?>
						</div>	
					</li>
				</ul>
			</div>
 <?php the_content(); ?>
 <?php
 endwhile;
 } 
 ?>
	</div>
</div><!-- /.blog-main -->
</div>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { dynamic_sidebar( 'blog-sidebar' ); } ?>
</div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

    <?php if ( is_active_sidebar( 'below-content-full-width' ) ) : ?>
		<div id="below-content-full-width">
			<div class="full-width">
				<?php dynamic_sidebar( 'below-content-full-width' ); ?>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>