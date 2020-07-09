<?php

get_header();

?>
    
<?php

if ( have_posts() ):
    the_post(); //crée une variable globale $post qui contient les infos du poste actuel
?>
    <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    </article>
<?php
endif; //obligatoire

get_footer();