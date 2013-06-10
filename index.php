<?php get_header(); ?>
<div class="container">
  		<div id="activities-descr">
  			<div id="descr-title"><h1>El Paso's Makerspace</h1></div>
  			<div id="descr-text"><h3>What interests you?</h3></div>
  			<div class="container" id="mailing-list-header">
  				<h3>Sign up to our mailing list!</h3>
  				<?php get_template_part( 'list-part' ); ?>
  			</div>
  			<div id="filters">
  				<!--<div id="filter-title">Filters</div>-->
  				<ul id="filter-elements" class="inline">
  					<li><a href="#" data-filter=".electronics"><i class="icon-tag"></i> Electronics</a></li>
  					<li><a href="#" data-filter=".outdoor"><i class="icon-tag"></i> Outdoors</a></li>
  					<li><a href="#" data-filter=".ham"><i class="icon-tag"></i> Radio</a></li>
  					<li><a href="#" data-filter=".chemistry"><i class="icon-tag"></i> Chemistry</a></li>
  					<li><a href="#" data-filter="*"><i class="icon-tag"></i> Show All</a></li>
  				</ul>
  			</div>
  		</div>
  		<?php if ( !dynamic_sidebar() ) : ?><?php endif; ?>
  		<div id="main-body-wrapper" class="cf">
  			<div id="tile-wrapper" class="cf">
  				<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'interests')); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
				<?php $video_thumb = get_post_meta($post->ID, "Video_section", true); ?>
				<div class="tile cf <?php echo $card_id; ?>" id="element-<?php get_the_ID(); ?>">
				<?php if ($video_thumb) { ?>
				<div><a href="<?php the_permalink(); ?>"><?php echo $video_thumb; ?></a></div>
				<?php } else { ?>
  					<div><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a></div>
						<?php } ?>
  					<div class="tile-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  					<div class="tile-description"><?php the_excerpt(); ?></div>
  					<?php edit_post_link('Edit'); ?>
  				</div>
  				<?php endwhile; else: ?>
				<?php endif; ?>
  			</div>
  		</div>
  		<div><div class="navigation"><p><?php posts_nav_link(); ?></p></div></div>
</div>
<?php get_footer(); ?>