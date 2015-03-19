<?php get_header(); ?>

<?php if( have_posts() ) the_post(); ?>

<div class="container container-lg">

	<?php get_sidebar(); ?>

	<div class="col-md-10 column-single-content">
		<div class="row text-center wrapper-single-title">
			<h1><?php the_title(); ?></h1>
			<ul class="single-post-meta">
				<li>By <?php the_author_posts_link() ?></li>
				<li><a href="<?php get_day_link($year, $month, $day); ?>"><?php the_date(); ?></a></li>
                <li><div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div></li>
			</ul>
			<hr>
		</div>
		<div class="row single-post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="row single-post-content">
			<?php the_content(); ?>
		</div>
		
		<?php comments_template( $file, $separate_comments ); ?>
		
	</div>

</div>

<?php get_footer(); ?>

<script>

//Background stretches on blog posts if the background is set to Cover because they're so tall.
//Here I am fixing the background, and disabling the Stellar JS scrolling through Mike's API.

$(function(){
	$('body').css('background-attachment','fixed');
	$('body').attr('data-stellar-background-ratio', 0 );
});

$.stellar({
	parallaxBackgrounds: false
});

</script>
