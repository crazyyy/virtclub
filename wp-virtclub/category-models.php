<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="cat-models clearfix">
		<h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix looper'); ?>>
			
				<!-- post thumbnail -->
				<a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail()) :
						the_post_thumbnail('medium');	
					else: ?>
					<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
				<?php endif; ?></a>
				<!-- /post thumbnail -->
				
				<!-- post title -->
				<h2 class="looper-title inner-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->
				
				<?php wpeExcerpt('wpeExcerpt20'); ?>
				
			</article>
			<!-- /article -->
			
			<?php endwhile; else: ?>

			<!-- article -->
			<article>
				<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>
		<div class="clear"></div>
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>