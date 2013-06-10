<?php get_header(); ?>
<div class="container">
  	<div id="activities-descr">
  		<div id="descr-title"><h1><?php the_title(); ?></h1></div>
  	</div>
  	<div id="page-main-body-wrapper" class="clearfix">
  		<div class="row-fluid">
  		<?php if (have_posts()) : ?>
        	<?php while (have_posts()) : the_post(); ?>   
  			<div class="span8"><?php the_content(); ?></div>
  		<?php endwhile; ?>
    		<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>