<div id="<?php the_sub_field('component_id'); ?>" class="accordion-tabs" style="margin-bottom:<?php the_sub_field('margin_bottom'); ?>px; margin-top:<?php the_sub_field('margin_top'); ?>px;">
    <div class="<?php the_sub_field('container_width'); ?>">
    
        <div class="component-<?php the_sub_field('accordion_or_tabs'); ?>">
        <?php if(have_rows('units')): ?>
            <?php while(have_rows('units')): the_row(); ?>
                <div class="title">
                   <?php the_sub_field('title'); ?>
                </div>
                <div class="content">
                   <?php the_sub_field('content'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    
    </div>
</div>