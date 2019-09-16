<?php 

if(have_rows('components')):
    while(have_rows('components')):
    the_row();
    
    if( get_row_layout() == 'call_out_box' ){ 

        get_template_part( 'template-parts/compo', 'call-out-box' );

    }elseif( get_row_layout() == 'buttons' ){ 

        get_template_part( 'template-parts/compo', 'buttons' );

    }elseif( get_row_layout() == 'content_box' ){ 

        get_template_part( 'template-parts/compo', 'content-box' );

    }elseif( get_row_layout() == 'cards' ){ 

        get_template_part( 'template-parts/compo', 'cards' );

    }elseif( get_row_layout() == 'post_type_feed' ){ 

        get_template_part( 'template-parts/compo', 'post-type-feed' );

    }elseif( get_row_layout() == 'image' ){ 

        get_template_part( 'template-parts/compo', 'image' );

    }elseif( get_row_layout() == 'image_carousel' ){ 

        get_template_part( 'template-parts/compo', 'image-carousel' );

    }elseif( get_row_layout() == 'video' ){ 

        get_template_part( 'template-parts/compo', 'video' );

    }elseif( get_row_layout() == 'accordion' ){ 

        get_template_part( 'template-parts/compo', 'accordion' );

    }

    endwhile;
endif;
