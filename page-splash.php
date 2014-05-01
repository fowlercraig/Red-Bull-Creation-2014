<?php Themewrangler::setup_page();get_header(/***Template Name: Splash */); ?>

<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div id="one-pager">
<section class="pane pane-1"><?php the_post_thumbnail(); ?></section>
<section class="pane pane-2"></section>
</div>

</article><!-- <?php the_title(); ?> -->
<?php endwhile; endif; ?>
</section><!-- Content -->

<?php get_footer(); ?>
