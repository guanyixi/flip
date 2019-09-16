<?php if(get_field('has_page_header')): ?>

<div class="page-header bg-cover" style="background-image:url(<?php the_field('background_image'); ?>); background-color:<?php the_field('background_color'); ?>;">
    <div class="container">
        <h1>
            <?php 
            if(get_field('header_title')){
                echo get_field('header_title');
            }else{
                the_title();
            } ?>
        </h1>
        
        <?php 
        if(get_field('header_subtitle')){
            echo '<p>' . get_field('header_subtitle') . '</p>';
        }
        ?>
    </div>
</div>

<?php endif; ?>

<?php if(get_field('has_breadcrumb')): ?>

<div class="breadcrumb">
    <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<?php endif; ?>