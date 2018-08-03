<? get_header() ?>

  <section class="container_produit">

          <?

          $args = array(
            'post_type' => 'produit',
            'orderby' => 'date',
            'order' => 'ASC',
          );

          $query = new WP_Query( $args );

          $posts = $query->posts;

          ?>

          <div class="produit-row1">

            <? $i = 0; ?>


            <?php while (have_posts()) : the_post(); ?>

              <?

              $taille_produit =  get_field('taille_produit');
                  if ($taille_produit == 'taille_1') {
                    $class_produit = "col-md-3 col-sm-6";
                  }
                  elseif ($taille_produit == 'taille_2'){
                    $class_produit = "col-md-4 col-sm-6";
                  }
                  else {
                    $class_produit = "col-md-6 col-sm-6";
                  }



              ?>

              <? $field_color = get_field('color_produit'); ?>

              <? $image = get_field('image_produit'); ?>

                <? $i++; ?>

                <!-- <? //echo $i;  ?> -->

                <div class="<? echo $class_produit; ?> produit_item">

                    <a href="<?php the_permalink() ?>"  class="produit_item_inner" style="background-image: url('<? echo $image['sizes']['thumb-1000']?>')" >

                        <div class="produit_more" style="background-color: <?= $field_color; ?>">

                          <div class="produit_title_1">

                            <? the_field('titre'); ?>

                          </div>

                          <div class="produit_title_2">

                            <? the_field('sous_titre'); ?>

                          </div>

                      </div>

                     </a>

                   </div>

                   <?php if ($i == 6): ?>

                     <div class=" col-md-3 col-sm-6 produit_contactus">

                       <div class="produit_contactus_inner">

                           <div class="produit_contactus_wrapper">

                               <div class="produit_contactus_text1">

                                 Besoin d'informations, un conseil, un devis ...

                               </div>

                               <a href="<? site_url()?>/polypac/contact/">

                                 <div class="produit_contactus_text2">

                                   Contactez-nous

                                 </div>

                               </a>

                         </div>

                       </div>

                     </div>

                   <?php endif; ?>

              <?php endwhile;?>

              <? wp_reset_postdata(); ?>

        </div>

  </section>

<? get_footer() ?>
