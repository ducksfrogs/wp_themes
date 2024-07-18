<?php get_header(  );
    while(have_posts()){
        the_post(); ?>
        <H2><?php the_title(); ?></H2>

        <?php the_content(); ?>
        <?php
    }
    get_footer(  );
?>

