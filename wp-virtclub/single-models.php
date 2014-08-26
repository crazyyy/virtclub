<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		
			<!-- post thumbnail // chek if thumbail exits -->
			<?php if ( has_post_thumbnail()) :?>
				<a class="single-thumb" href="#" title="<?php the_title(); ?>"><?php the_post_thumbnail(); // Fullsize image for the single post ?></a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<h1 class="single-title inner-title"><?php $value = get_field( "skype" );  
			$status_ico = get_skype_status($value, true, true); echo "<img class='skype_img' src='".$status_ico."'/>"; ?> 

				<?php
					if( get_field('verified') )
					{
					    echo "<img class='status_ver' src='http://demo2.saitobaza.ru/wp-content/themes/wp-virtclub/img/bg/verif-small.png' alt=''>";
					}
					else { } ?> <?php the_title(); ?></h1>
			
			<!-- Dispaly dynamic content RU: Вывод контента записей -->
			<?php the_content(); ?>

			<?php 

				$image_ids = get_field('galery', false, false);

				$shortcode = '[gallery ids="' . implode(',', $image_ids) . '"]';

				echo do_shortcode( $shortcode );

			?>
			
			<p><?php _e( 'Categorised in: ', 'wpeasy' ); the_category(', '); // Separated by commas ?></p>
			
			<?php comments_template(); ?>

			
		
			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>