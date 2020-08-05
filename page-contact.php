<?php

get_header();

?>

<?php

if ( have_posts() ):
    the_post(); //crée une variable globale $post qui contient les infos du poste actuel
?>
    <div class="container">
        <h1 class="contact__title">Contact</h1>
        <div><?php the_content(); ?></div>
    </div>
<?php
endif; //obligatoire
?>


<?php
  get_footer();
?>