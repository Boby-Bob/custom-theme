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
<!--
<div class="container">
    <h1 class="contact__title">Contact</h1>
    <div class="row">
        <div class="col-lg-12">
            <form class="contact__form" method="post" action="" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstname">Prénom<span class="blue"> *</span></label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="name">Nom<span class="blue"> *</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="email">Email<span class="blue"> *</span></label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="Telephone">Téléphone</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-12">
                        <label for="message">Message<span class="blue">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="6"></textarea>
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-12">
                        <p class="blue"><strong>* Ces informations sont requises</strong></p>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="button1" value="Envoyer">
                    </div>
                    
                    <p class="thank-you" style="display:none">Votre message a bien été envoyé. Merci de m'avoir contacté :) </p>
                </div>
            </form>
        </div>
    </div>
      
        <div class="row">
            <div class="contact__email col-md-5">
                <p>Exemple@exemple.com</p>
            </div>
            <div class="col-md-2">
                <div class="contact__separator--contact"></div>
            </div>
            <div class="contact__phone col-md-5">
                <p>03.60.30.20.10</p>
            </div>

        <div class="contact__separator--last"></div>
    </div>

</div> -->