<?php
/**

*Template Name: Home Page

 */

get_header(); ?>

<div id="primary" class="content-area">

<main id="main" class="site-main">
    
    <div class="components">
        <?php get_template_part( 'template-parts/content', 'components' ); ?> 
    </div>
  </main><!-- #main -->

</div><!-- #primary -->


<?php
get_footer();