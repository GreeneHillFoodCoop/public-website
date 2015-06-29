<?php
/*
Template Name: Wide No Sidebar
*/
?>
<?php get_header(); ?>
<style>
/*
winwinwin style go here
*/
.winwinwin h2 {
	line-height: 35px !important;
}
.winwinwin p{
	margin: 10px 0px 20px 0px !important;
}

.winwinwinimg{
	/* no border, tilt, margin */
	padding: 0px !important;
	border:0px !important;
	background: none !important;
	-webkit-transform: none !important;
	margin: 0px !important;
}
.winwinwin table tr td a{
	display:block;
	margin-bottom: 10px;
}
.winwinwin table tr td:nth-child(2){
	/*padding-right: 150px;
	width: 658px;*/
}
.winwinwin .spacer{
	border: 0 !important;
	background: none !important;
	height: 120px  !important;
	width: 120px  !important;
}
</style>
<div id="section"><div class="content"><h1 class="entry-title"> <? the_title()?> </h1></div></div>

<div id="main" class="wide">
	<div class="content">
		<div id="primary">
	
			<?php the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
						
					</div>
				</div>
		
		</div>

		<div class="clear"></div>
		
		
	</div>
</div>
<?php get_footer(); ?>