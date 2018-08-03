<? get_header() ?>


<!-- SLIDER -->

<div class="row container_slider_real">

  <!-- <?php

  //  $taxos = get_the_terms( $post->ID, 'gamme_de_produits');
    //$term_id = $taxos[0]->term_id;
  ?> -->

  <a href="<? echo site_url('realisations') ?>">

    <div class="cross_close_fixed"></div>

  </a>

    <? if ( have_rows('slider_image_realisation') ) : ?>

      <div class="slider_produit">

        <? while ( have_rows('slider_image_realisation') ) : the_row(); ?>

          <div class="item_slider_produit">

            <?php  $image = get_sub_field('image_slider_realisation'); ?>

            <div class="item_slider_produit_image" style="background-image: url('<? echo $image['sizes']['thumb-1000']?>')"></div>
          </div>

        <? endwhile; ?>

      </div>

    <? endif; ?>

</div>

<!-- DETAIL REALISATION-->

<section class="details">

  <div class="container_test">

    <div class="gauche_content_details">

      <div class="ville">

        <? the_field('titre_realisation'); ?>

      </div>

      <div class="lieu">

        <? the_field('sous_titre_realisation'); ?>

      </div>

      <div class="split_details">

        <div class="left">

          <div class="year">

            <span>Année</span> <? the_field('annee_realisation'); ?>

          </div>

          <div class="archi">

            <span>Architecte</span> <? the_field('architecte_realisation'); ?>

          </div>

          <div class="pose">

            <span>Pose</span> <? the_field('pose_realisation'); ?>

          </div>

          <div class="color">

            <span>Couleur</span> <? the_field('couleur_realisation'); ?>

          </div>

        </div>

        <div class="right">

          <div class="descr">

            <? the_field('texte_descriptif_realisation'); ?>

          </div>

        </div>

      </div>

    </div>

    <div class="droite_content_details">

      <div class="tags">

        <? if ( have_rows('liste_descriptive_realisation') ) : ?>

          <ul>

            <? while ( have_rows('liste_descriptive_realisation') ) : the_row(); ?>

              <li><? the_sub_field('texte_liste_realisation'); ?></li><br>

            <? endwhile; ?>


          </ul>

        <? endif; ?>

      </div>

      <div class="single_actu_social_share">

        <div class="single_actu_social_share_text">

          Vous aimez, n'hésitez pas à partager

        </div>

        <div class="single_actu_social_share_icons">

          <div class="single_actu_icons_wrapper">

            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse','pagename','resizable,height=449,width=865, left=860, top=330'); return false;">

              <div class="single_actu_social_share_icons_1 single_actu_icons"></div>

            </a>

          </div>



          <div class="single_actu_icons_wrapper">

            <a href="https://twitter.com/intent/tweet?" onClick="window.open('https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.google.com','pagename','resizable,height=449,width=865, left=860, top=330'); return false;"  class="twitter-share-button" >

              <div class="single_actu_social_share_icons_2 single_actu_icons"></div>

            </a>

          </div>

          <div class="single_actu_icons_wrapper">


            <a href="https://www.linkedin.com/cws/share?url=http%3A%2F%2Fwww.google.com" onClick="window.open('https://www.linkedin.com/cws/share?url=http%3A%2F%2Fwww.google.com','pagename','resizable,height=449,width=865, left=860, top=330'); return false;"  >

              <div class="single_actu_social_share_icons_3 single_actu_icons"></div>

            </a>

          </div>

        </div>


      </div>

      <?php if( get_field('texte_bouton_voir_produit') ): ?>

        <div class="line_single_actu_before"></div>

        <?php else: ?>

      <?php endif; ?>

      <div class="btn_produit">

      <!-- <?php
      //  $taxo = get_the_terms( $post->ID, 'gamme_de_produits');
      //  $link = normalizeString($taxo[0]->name);

      ?> -->

        <a href="<?php echo site_url('produit').'/'.$link ?>"><? the_field('texte_bouton_voir_produit'); ?></a>

      </div>

    </div>

  </div>

  <div class="clear" style="clear: both;"></div>

</section>

<!-- GOOGLE MAP -->
<section class="gmap_real">

  <div class="container_gmap">

    <div id="map_2">



    </div>

  </div>

</section>

<!-- EN SAVOIR PLUS -->
<section class="other_things">

  <div class="container_things">

    <div class="tier_other tier_other_map">

      bonjour

    </div>

       <a href="<? echo site_url('realisations')?>/?gamme=<?php echo $term_id; ?>">
         <div class="tier_other tier_other_similary">

          <div class="tier_other_similary_title">
            <p>Autre réalisations<br>utilisant le même produit</p>
          </div>

          </div>
        </a>

  </div>

</section>

<!-- bandeau -->

<div class="bandeau_row_real">

  <div class="bandeau_row_title">
    <a href="<?php echo site_url('realisations'); ?>">Retour aux résultats</a>
  </div>

</div>

<script type="text/javascript">

////////////////////////////////////////
//// Popup sharing buttons facebook ////
////////////////////////////////////////

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// MAP single real

function initialize() {
    var latlng = new google.maps.LatLng(48.054196, -1.741236);
    var myOptions = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_2"),
            myOptions);
}
google.maps.event.addDomListener(window, "load", initialize);

</script>

<?php get_footer() ?>
