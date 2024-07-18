<?php get_header(  ); 

    while(have_posts()){
        the_post(); ?>
        <H2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></H2>

        <?php the_content(); ?>
        <hr>
        <?php
    }
    get_footer( );
?>
