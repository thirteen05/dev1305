<?php get_header(); ?>

<div class="container container-lg">
	<?php get_sidebar(); ?>
	<div class="col-md-10 column-post-content">
      
      <div class="row no-margin">
        <div class="col-md-12 text-center" id="home-hero">
            <h1>Tampa Web Design</h1>
        </div>
      </div>

		<?php $counter = 1 ?>
		<?php $loop = new WP_Query('posts_per_page=-1'); ?>
	    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	    <!--This is adding the Bootstrap Class to even posts needed for alternating positions on desktop version-->

	    <div class="row home-post-row"> 
		    <div class="col-md-6 col-sm-12 wrapper-post-image <?php if ($counter % 2 == 0){echo 'col-md-push-6';} ?>">
		        <?php the_post_thumbnail(); ?>
		    </div>

		    <div class="col-md-6 col-sm-12 wrapper-post-content <?php if ($counter % 2 == 0){echo 'col-md-pull-6 text-right';} ?>">
		   		<a href="<?php echo get_permalink(); ?>"><h2 class="home-post-title"><?php the_title(); ?></h2></a>
		        <?php the_excerpt(); ?>
		        <span class="home-post-date"><?php the_time('l, F jS, Y') ?> </span>
		        <h5>Comments: <?php comments_number('0 Comments', '1 Comment', '% Comments')?></h5>
		        <a href="<?php echo get_permalink(); ?>"><div class="btn btn-danger btn-dd">View Full Article</div></a>
		    </div>
		</div>

		<?php $counter++ ; 
		endwhile ?>
	</div>

<?php get_footer(); ?>




