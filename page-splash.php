<?php Themewrangler::setup_page();get_header(/***Template Name: Splash */); ?>

<section id="content" role="main" class="splash">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="one-pager">
<section class="pane pane-1">
<div id="container" class="container">
<ul id="scene" class="scene" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15">
  
  
  <li class="layer" data-depth="0.10"><div class="background"></div></li>
  <li class="layer" data-depth="0.10"><div class="distortion"></div></li>
  <li class="layer" data-depth="0">
  <div class="table"><div class="meta">
    <img src="<?php bloginfo('template_directory'); ?>/images/creationlogo.png" />
    <div class="arrow"></div>
    <h1 class="title">JULY, DETROIT, MI<br/>Qualifier Window May 21- June 3, 2014</h1>
    <div class="buttons">
      <a href="#moreinfo" data-effect="mfp-zoom-out">More Info</a>
      <a href="#">2013 Entries</a>
    </div>
  </div></div>
  </li> 
  
</ul>
</div>
</section>
</div>

<div id="moreinfo" class="white-popup mfp-with-anim mfp-hide">
<div class="wrapper top">
  <h3><span>RED BULL CREATION 2014</span></h3>
  <p>
    Red Bull Creation is a 72 hour creative competition that annually invites the 
    countries best and brightest makers, hackers, and inventors to innovate around 
    a "secret topic".   In 2014, the Red Bull Creation final event will be making 
    the move to an exciting new host location- Detroit, MI.   
  </p> 
  <p>
    The year's qualifier will open on May 21st, and more information about the 
    challenge will be released at Midnight EST on this site.  In the meantime, 
    get your teams and dreams together.  We look forward to seeing you then.  
  </p>
</div>
<div class="wrapper bottom">
  <h3><span>2014 COMPETITION SCHEDULE</span></h3>
  <ol>
    <li><span class="date">May 21</span>   Registration begins and qualifier window opens</li>
    <li><span class="date">June 3</span>   Qualifier window closes</li>
    <li><span class="date">June 10</span>  Finalists announced </li>
    <li><span class="date">July 8-11</span>Red Bull Creation Final Event in Detroit, MI</li>
  </ol>
</div>
</div>

<?php endwhile; endif; ?>
</section><!-- Content -->

<?php get_footer(); ?>

