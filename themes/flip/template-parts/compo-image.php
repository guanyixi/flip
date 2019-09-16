<div id="<?php the_sub_field('component_id'); ?>" class="compo-image" style="padding-bottom:<?php the_sub_field('margin_bottom'); ?>px; padding-top:<?php the_sub_field('margin_top'); ?>px;">
    <div class="<?php the_sub_field('container_width'); ?>">
        <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
    </div>
</div>