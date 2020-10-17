<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="category-title">
	<?php printf( get_the_archive_title( '', false ) ); ?>
 </h1>
</div>

<div class="container single-category main-content">
<div class="col-sm-8 blog-main">
 
 <?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
  <div class="blog-post">
	<div class="blog-post-intro-content">
		<div class="intro-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="intro-content">
			<h2 class="blog-post-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
				</a>
			</h2>
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
			<div class="intro-text"><?php the_excerpt(); ?></div>
		</div><!-- /.intro-content -->
	</div><!-- /.blog-post-intro-content -->
 </div><!-- /.blog-post -->
 <?php
 endwhile;
 } 
 ?>
 
 
 <nav>
 <ul class="pager">
 <li><?php next_posts_link('Previous'); ?></li>
 <li><?php previous_posts_link('Next'); ?></li>
 </ul>
 </nav>
 
</div><!-- /.blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { dynamic_sidebar( 'blog-sidebar' ); } ?>
</div><!-- /.blog-sidebar -->

</div> <!-- /.container -->


    <?php if ( is_active_sidebar( 'below-content-full-width' ) ) : ?>
		<div id="below-content-full-width">
			<div class="full-width">
				<?php dynamic_sidebar( 'below-content-full-width' ); ?>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>