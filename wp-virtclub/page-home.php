<?php /* Template Name: Home Page Template */ get_header(); ?>
	
<section role="main" class="clearfix">
    <article class="slider">
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        	<?php the_content(); ?>
		<?php endwhile; else: // If 404 page error ?>
		<?php endif; ?>
        <div class="slider-container">
            <?php echo get_new_royalslider(1); ?>
        </div>
    </article>

    <h1 class="home-title">Топ модели:</h1>

	<?php query_posts("showposts=20&cat=1"); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="model-looper">
		<a href="<?php the_permalink(); ?>">
		    <h4><?php the_title(); ?></h4>
			<?php if ( has_post_thumbnail()) : the_post_thumbnail('medium'); else: ?>
				<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
			<?php endif; ?>
		    <span>Смотреть анкету</span>
		</a>
	</article><!-- model-looper -->
	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
    
</section>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>