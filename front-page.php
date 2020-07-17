<?php

get_header();

?>

<div class="container">
<section class="benefits container">
        
<h1 class="title__benefits">Nos Prestations</h1>

<div class="row">
  <div class="col-md-5">
    <div class="benefits__container">
      <div class="benefits__picture">
        <img src="wp-content/uploads/2020/06/bebe.jpg" class="picture" alt="..." />
      </div>
      <div class="benefits__body">
        <h5 class="benefits__title">Lorem ipsum</h5>
        <p class="benefits__text">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
        unde eligendi ullam eum omnis hic libero laborum, pariatur
        consequuntur non
        </p>
        <a href="#" class="btn btn-primary">Plus de détails</a>
      </div>
        
    </div>
  </div>

  <div class="col-md-2">
    <div class="benefits__separator"></div>
  </div>

  <div class="col-md-5">
    <div class="benefits__container">
      <div class="benefits__picture">
        <img src="wp-content/uploads/2020/06/bebe.jpg" class="picture" alt="..." />
      </div>
      <div class="benefits__body">
        <h5 class="benefits__title">Lorem ipsum</h5>
        <p class="benefits__text">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
        unde eligendi ullam eum omnis hic libero laborum, pariatur
        consequuntur non
        </p>
        <a href="#" class="btn btn-primary">Plus de détails</a>
      </div>
        
    </div>
  </div>

</div>
<div class="benefits__separator--horizontal"></div>
    
<div class="row">
    <div class="col-md-5">
      <div class="benefits__container">
        <div class="benefits__picture">
        </div>
        <div class="benefits__body">
          <h5 class="benefits__title">Lorem ipsum</h5>
          <p class="benefits__text">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
          unde eligendi ullam eum omnis hic libero laborum, pariatur
          consequuntur non
          </p>
          <a href="#" class="btn btn-primary">Plus de détails</a>
        </div>
          
      </div>
    </div>
  
    <div class="col-md-2">
      <div class="benefits__separator"></div>
    </div>

    <div class="col-md-5">
      <div class="benefits__container">
        <div class="benefits__picture">
          <img src="wp-content/uploads/2020/06/bebe.jpg" class="picture" alt="..." />
        </div>
        <div class="benefits__body">
          <h5 class="benefits__title">Lorem ipsum</h5>
          <p class="benefits__text">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
          unde eligendi ullam eum omnis hic libero laborum, pariatur
          consequuntur non
          </p>
          <a href="#" class="btn btn-primary">Plus de détails</a>
        </div>
          
      </div>
    </div>
    <div class="benefits__separator--last"></div>

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

// WP_Query arguments
$args = [
    'post_type' => [ 'page' ],
];

// The Query
$query = new WP_Query( $args );

if ( $query->have_posts() ):
    while ($query->have_posts()):
        $query->the_post();
?>
    <article>
        <h3><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h3>
    </article>
<?php
    endwhile;
endif;

// Restore original Post Data
wp_reset_postdata();

?>
<h2>liste des posts</h2>
<?php

// WP_Query arguments
$args = [
    'post_type' => [ 'post' ],
];

// The Query
$query = new WP_Query( $args );

if ( $query->have_posts() ):
    while ($query->have_posts()):
        $query->the_post();
?>
    <article>
        <h3><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h3>
    </article>
<?php
    endwhile;
endif;

// Restore original Post Data
wp_reset_postdata();

get_footer();