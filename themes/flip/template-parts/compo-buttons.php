<div id="<?php the_sub_field('component_id'); ?>" class="<?php the_sub_field('number_of_buttons'); ?> <?php the_sub_field('button_align'); ?>" style="padding-bottom:<?php the_sub_field('margin_bottom'); ?>px; padding-top:<?php the_sub_field('margin_top'); ?>px;">
    <div class="container">
        <?php if(get_sub_field('button_text_1')):?>
            <a class="<?php the_sub_field('button_style_1'); ?>" target="<?php the_sub_field('open_new_tab_1'); ?>" class="button-primary" href="<?php the_sub_field('button_url_1'); ?>"><?php the_sub_field('button_text_1'); ?></a>
        <?php endif; ?>
        <?php if(get_sub_field('button_text_2')):?>
            <a class="<?php the_sub_field('button_style_2'); ?>" target="<?php the_sub_field('open_new_tab_2'); ?>" class="button-primary" href="<?php the_sub_field('button_url_2'); ?>"><?php the_sub_field('button_text_2'); ?></a>
        <?php endif; ?>
    </div>
</div>