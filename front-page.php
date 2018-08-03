<? get_header(); ?>

  <!-- <? //$image = get_sub_field('image_slide'); ?> -->

<!-- PRODUIT EN AVANT // SLIDER -->

<div class="global_home_content">

  <? if( have_rows('slider', 'options') ): ?>

 	  <div class="slider_products_home">

      <?  while ( have_rows('slider', 'options') ) : the_row(); ?>

      <?php  $image = get_sub_field('image_slide'); ?>

          <section class="full-image" style="background-image: url('<? echo $image['sizes']['thumb-1900']?>')">

            <div class="container_full_image">

              <div class="produit_une">

                <div class="produit_name">

                  <div class="blue_on_white">

                    <? the_sub_field('texte_ligne_1'); ?>

                  </div>

                  <br/>

                  <div class="white_on_blue">

                    <? the_sub_field('texte_ligne_2'); ?>

                  </div>

                </div>

              </div>

            </div>

          </section>

        <? endwhile; ?>

      </div>

  <? else : ?>

  <? endif; ?>

  <!-- FEED ACTU -->

  <?

  $args_article = array(
    'post_type'       => 'post',
    'posts_per_page'  => 3,
  );

  $query_article = new WP_Query( $args_article );

  $posts_article = $query_article->posts_article;

  ?>

  <?php if ($query_article->have_posts()) :  ?>

    <section class="actu_feed">

      <div class="container_feed">

        <div class="actu_display">

          <ul>

            <?php while ($query_article->have_posts()) : $query_article->the_post();  ?>

            <li class="actu_display_list">

              <?php  $image_2 = get_field('archive_actu_image'); ?>

              <div class="home_actu_img" style="background-image: url(<? echo $image_2['sizes']['thumb-400']?>);"></div>

              <div class="date">

                <?= get_the_date(J/M/Y); ?>

              </div>

              <div class="titre">

                <? the_field('titre_de_lactualite'); ?>

              </div>

              <div class="excerpt">

                <? $extrait = get_field('premier_texte_de_lactualite');  ?>

                <?php custom_echo($extrait, 60); ?>

              </div>

              <a class="actu_abs" href="<?php the_permalink() ?>">

                <div class="archive_actu_items_more">

                  <div class="archive_actu_items_more_svg  archive_actu_color_svg">

                  </div>

                </div>

              </a>

            </li>

            <? endwhile; ?>

          </ul>

        </div>

      </div>

    </section>

  <?php endif; ?>



<? wp_reset_postdata(); ?>

</div>

<!-- CONTACT BUTTON -->

<!-- <section class="contact_call_to all_actus_home">

  <a href="<? //echo site_url('actualites') ?>">

    <div class="container_actus">

      <div class="all_actus">

          <? //the_field('news_text_button', 'options') ?>

      </div>

    </div>

  </a>

</section> -->

<!-- Newsletter frontpage -->

<div class="overlay_newsletter"></div>

<div class="newsletter">

  <div class="first_row_newsletter">

    <div class="close_newsletter"></div>

    <div class="wrapper_logo_newsletter">

      <div class="logo_newsletter"></div>

    </div>

  </div>

  <div class="second_row_newsletter">

    <div class="first_text_newsletter">

      Vous souhaitez être informé de nos nouveautés et actualités...

    </div>

    <div class="second_text_newsletter">

      Inscrivez-vous à notre newsletter

    </div>

  </div>

  <?php echo do_shortcode('[sibwp_form id=1]'); ?>

  <div class="legend_newsletter">

    Une newsletter tous les 2 mois

  </div>

</div>

<? get_footer(); ?>
