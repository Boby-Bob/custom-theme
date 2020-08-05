<?php

get_header();

?>

<div class="container">
<section class="all_benefits">
        
<h1 class="title__benefits">Nos Prestations</h1>

<div class="row benefit text-center">
  <div class="col-md-5">
    <h5 class="benefits__title">Le thalasso bain bébé</h5>
    <div class="benefits__container">
      <div class="benefits__picture">
        <img src="wp-content/uploads/2020/06/thalasso.jpg" class="benefits__picture__img"></img>
      </div>
      <div class="benefits__body">
        <p class="benefits__text">
        C'est le plus beau des cadeaux de bienvenue au monde. Bébé retrouve les postures, les sensations qu'il avait in utero. Il se libère des tensions à la grossesse et à la naissance.
        </p>
        <div class="buttons">
          <button type="text" class="btn btn-primary details presta--one">Plus de détails</button>
          <?php

          global $product; $id = $product->id; ?>
          <a class="btn btn-primary commands" href="http://pro-dev.fr/www/b-a-m/?add-to-cart=28<?php echo $id ?>"><?php _e('Commander', 'textdomain'); ?></a>
        </div>
      </div>
        
    </div>
  </div>

  <div class="col-md-2">
    <div class="benefits__separator"></div>
  </div>

  <div class="col-md-5">
    <h5 class="benefits__title">L'atelier massage bébé</h5>
    <div class="benefits__container">
      <div class="benefits__picture">
        <div class="benefits__picture__img"></div>
      </div>
      <div class="benefits__body">
        <p class="benefits__text">
        Apprenez à masser votre bébé pour créer, entretenir le lien d'attachement avec lui et lui apporter confiance, sécurité, détente, éveil.
        </p>

        <div class="buttons">
          <button type="text" class="btn btn-primary details presta--two">Plus de détails</button>
          <?php

          global $product; $id = $product->id; ?>
          <a class="btn btn-primary commands" href="http://pro-dev.fr/www/b-a-m/?add-to-cart=66<?php echo $id ?>"><?php _e('Commander', 'textdomain'); ?></a>
        </div>
      </div>
        
    </div>
  </div>

</div>

<div class="benefits__separator--horizontal"></div>

<div class="presta">
</div>

<div id="presta_separator"></div>

    
<div class="row benefit text-center">
    <div class="col-md-5">
      <h5 class="benefits__title">Le massage future maman</h5>
      <div class="benefits__container">
        <div class="benefits__picture">
          <div class="benefits__picture__img"></div>
        </div>
        <div class="benefits__body">
          <p class="benefits__text">
          Le massage prénatal est l'un des meilleurs moyens de se relaxer sur le plan physique et émotionnel. Il peut être reçu comme un véritable accompagnement à la maternité.
          </p>
          <div class="buttons">
            <button type="text" class="btn btn-primary details presta--three">Plus de détails</button>
            <?php

            global $product; $id = $product->id; ?>
            <a class="btn btn-primary commands" href="http://pro-dev.fr/www/b-a-m/?add-to-cart=68<?php echo $id ?>"><?php _e('Commander', 'textdomain'); ?></a>
          </div>
        </div>
          
      </div>
    </div>
  
    <div class="col-md-2">
      <div class="benefits__separator"></div>
    </div>

    <div class="col-md-5">
      <h5 class="benefits__title">L'atelier de soutien à l'allaitement maternel</h5>
      <div class="benefits__container">
        <div class="benefits__picture">
          <img src="wp-content/uploads/2020/06/allaitement.jpg" class="benefits__picture__img"></img>
        </div>
        <div class="benefits__body">
          <p class="benefits__text">
          Pour vous épanouir dans votre projet d'allaitement, vous souhaitez des informations claires, des astuces, de l'écoute. Abordons ensemble les sujets clés pour vous.
          </p>
          <div>
            <button type="text" class="btn btn-primary details presta--four">Plus de détails</button>
            <?php

            global $product; $id = $product->id; ?>
            <a class="btn btn-primary commands" href="http://pro-dev.fr/www/b-a-m/?add-to-cart=69<?php echo $id ?>"><?php _e('Commander', 'textdomain'); ?></a>
          </div>
        </div>
        <ul class="products">
</ul>
          
      </div>
    </div>
    <div class="benefits__separator--horizontal"></div>

</section>
</div>


<section class="gallery" id="galerie">
<h1 class="title__gallery">Galerie</h1>
<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="wp-content/uploads/2020/06/pexels-photo-325690.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="wp-content/uploads/2020/06/pexels-photo-3270224.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="wp-content/uploads/2020/06/pexels-photo-374781.jpg" class="d-block w-100" alt="...">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</section>

<?php
get_footer();