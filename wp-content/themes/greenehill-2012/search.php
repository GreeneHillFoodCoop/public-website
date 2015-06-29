<?php get_header(); ?>

<div id="section"><h1>Search Results for <?php the_search_query(); ?></h1></div>
<div id="main">	<div class="content"><div id="primary">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post() ?>
<div id="post-<?php the_ID(); ?>" class="post">
<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

<div class="entry-summary">
<?php the_excerpt( __( 'continue reading <span class="meta-nav">&raquo;</span>', 'blankslate' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
</div>

</div>
<?php endwhile; ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<div id="nav-below" class="navigation">
<p class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> older articles', 'blankslate' )) ?></p>
<p class="nav-next"><?php previous_posts_link(__( 'newer articles <span class="meta-nav">&raquo;</span>', 'blankslate' )) ?></p>
</div>

<?php } ?>
<?php else : ?>
<div id="post-0" class="post no-results not-found">
<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ) ?></h2>
<div class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</div>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<div class="clear"></div></div>
</div>

<?php get_footer(); ?>