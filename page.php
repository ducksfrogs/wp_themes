<?php
    get_header(  );

    while(have_posts()){
        the_post(); ?>
        <h1>This is a page not post</h1>
        <H2><?php the_title(); ?></H2>
        <?php the_content(); ?>
        <?php
    }

    get_footer(  );
?>