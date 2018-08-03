<? get_header() ?>

<? $field_color = get_field('color_produit'); ?>

<div class="flex-row first_row">

  <div id="1">

    <div class="col-sm-12 ">

      <a href="<? site_url()?>/polypac/produit/">

      <div class="cross_close_fixed"></div>

      </a>

      <div class="col-sm-9 modif_bottom">

      <? if ( have_rows('first_row_slider_produit') ) : ?>

        <div class="first_row_left  slider_single_product">

          <? while ( have_rows('first_row_slider_produit') ) : the_row(); ?>

          <? $image = get_sub_field('first_row_slider_serie_600_image'); ?>

            <div class="test" style="background-image: url(<? echo $image['sizes']['thumb-1000']?>)">

              <div class="slider_single_product_adress" > <? the_sub_field('first_row_bloc_left_description_adresse'); ?> </div>

              <div class="slider_single_product_thing" > <? the_sub_field('first_row_bloc_left_description_lieu'); ?> </div>

            </div>

          <? endwhile; ?>

        </div>

      <? endif; ?>

      </div>

      <div class="col-sm-3 modif_bottom modif_left ">

        <div class="first_row_right" style="background:<?= $field_color; ?>";>

            <div class="first_row_right_wrapper_cross" >

            </div>

            <? if (have_rows('bloc_droite')): ?>

            <ul class="first_row_right_wrapper">

              <? while ( have_rows('bloc_droite') ) : the_row(); ?>

                  <div class="first_row_right_li">

                    <? the_sub_field('bloc_droite_description'); ?>

                  </div>

              <? endwhile; ?>

              <?php if( get_field('bloc_droite_exclu_title') ): ?>


                <div class="first_row_right_focus">

                  <span class="first_row_right_focus_bold"> <? the_field('bloc_droite_exclu_title'); ?></span>

                  <br>

                  <? the_field('bloc_droite_exclu_texte'); ?>

                </div>

                <?php else: ?>

              <?php endif; ?>

            </ul>

            <? endif; ?>

        </div>

      </div>

    </div>

  </div>

<!------------------------------------------------------------------------------->

  <div id="2">

  <div class="col-sm-12 ">

    <div class="col-sm-9 ">

        <div class="col-sm-9  modif_bottom anchor_single_js">

          <div class="second_row_left_1  " style="background-color:<?= $field_color; ?>">

            <div class="second_row_left_1_title">

              <? the_field('second_row_bloc_gauche_titre_1'); ?>

            </div>

            <div class="second_row_left_1_sub_title">

              <? the_field('second_row_bloc_gauche_titre_2'); ?>

            </div>

            <div class="second_row_left_1_text">

              <? the_field('second_row_bloc_gauche_text'); ?>

            </div>

          </div>

        </div>

        <div class="col-sm-3 modif_bottom modif_left ">

          <div class="second_row_left_2 " style="background-color:<?= $field_color; ?>">

            <? if( have_rows('second_row_bloc_middle_title_2') ): ?>

            <ul class="second_row_left_2_wrapper">

              <?php if( get_field('second_row_bloc_middle_title_1') ): ?>

                <li class="second_row_left_2_focus" style="color: <?= $field_color; ?>"><? the_field('second_row_bloc_middle_title_1'); ?></li>

              	<?php else: ?>

              <?php endif; ?>

              <? while ( have_rows('second_row_bloc_middle_title_2') ) : the_row(); ?>

              <li><? the_sub_field('second_row_bloc_middle_title_2_text'); ?></li>

              <? endwhile; ?>

            </ul>

          <? endif; ?>

          </div>

        </div>

    </div>

    <div class="col-sm-3  modif_left modif_bottom">

      <div class="second_row_right ">

        <div class="wrapper_second_row_right">

          <p class="second_row_right_title"><? the_field('second_row_bloc_right_text_1'); ?></p>

          <a href="<? site_url()?>/polypac/contact/">

          <p class="second_row_right_text"><? the_field('second_row_bloc_right_text_2'); ?></p>

          </a>

        </div>

      </div>

    </div>

  </div>

  </div>

</div>

<!------------------------------------------------------------------------------->

<div class="row third_row">

  <div class="col-sm-12 ">

    <div class="col-sm-9 ">

      <div class="col-sm-6 ">

        <div class="third_row_left_1">

          <div class="third_row_left_1_text_1">

            <div class="third_row_left_1_text_1_1"><? the_field('third_row_bloc_left_title_1'); ?></div>

            <div class="third_row_left_1_text_1_2"><? the_field('third_row_bloc_left_text_1'); ?></div>

          </div>

          <div class="third_row_left_1_text_2">

            <div class="third_row_left_1_text_2_1"> <? the_field('third_row_bloc_left_title_2'); ?></div>

            <div class="third_row_left_1_text_2_2"><? the_field('third_row_bloc_left_text_2'); ?></div>

          </div>

        </div>

      </div>

      <div class="col-sm-6 modif_left modif_bottom">

        <div class="third_row_left_2 ">

          <div class="third_row_left_2_1">

            <div class="third_row_left_2_text_1"><? the_field('third_row_bloc_middle_title_1'); ?></div>

            <div class="third_row_left_2_text_2"><? the_field('third_row_bloc_middle_text_1'); ?></div>

          </div>

          <div class="third_row_left_2_2">

            <?php if( get_field('third_row_bloc_middle_title_2') ): ?>

              <div class="third_row_left_2_text_1"><? the_field('third_row_bloc_middle_title_2'); ?></div>

              <?php else: ?>

            <?php endif; ?>

            <?php if( get_field('third_row_bloc_middle_text_2') ): ?>

              <div class="third_row_left_2_text_2"><? the_field('third_row_bloc_middle_text_2'); ?></div>

              <?php else: ?>

            <?php endif; ?>

          </div>

        </div>

      </div>

    </div>

    <div class="col-sm-3  modif_left modif_bottom">

      <?php if( get_field('third_row_bloc_droite_image') ): ?>

            <div class="third_row_right" style="background-image: url(<? the_field('third_row_bloc_droite_image'); ?>);">

            <?php else: ?>

      <?php endif; ?>

      </div>

    </div>

  </div>

</div>

<!------------------------------------------------------------------------------->

<? echo $newstr; ?>

<div class="row fourth_row">

  <div class="col-sm-12 ">

    <div class="col-sm-9 ">

      <div class="modif_bottom modif_float">

        <? if( have_rows('fourth_row_bloc_left_title') ): ?>

        <div class="fourth_row_left">

          <? while ( have_rows('fourth_row_bloc_left_title') ) : the_row(); ?>

            <? $field_color = get_field('color_produit'); ?>

            <? $class = get_sub_field('popup_title'); ?>

            <? $newstr = cleanString($class);?>

            <? $overlay_id = get_sub_field('bouton_id'); ?>

                <a class="overlay_open" id="<?= $newstr ?>">

                  <div class="fourth_row_left_1 modif_fourth_row modif_float " id="<?=$overlay_id?>">

                      <? the_sub_field('fourth_row_bloc_left_title_popup'); ?>

                  </div>

                </a>

                <div class="popup_overlay_up">

                </div>

                  <div class=" popup_overlay <?=$newstr?>" >

                      <div class=" first_row_overlay">

                        <div class=" modif_first_bloc_overlay  ">

                          <div class="bloc_overlay">

                            <div class="overlay_title">

                              <?= $class; ?>

                            </div>

                            <div class="overlay_close">


                            </div>

                          </div>

                        </div>

                      </div>

                    <div class="row second_row_overlay" >

                      <div class="overlay_content" style="background-image: url(<? the_sub_field('popup_content'); ?>)">

                      </div>

                    </div>

                </div>

          <? endwhile; ?>

          <? wp_reset_postdata(); ?>

                    <? while ( have_rows('groupe_de_boutons_pdf') ) : the_row(); ?>

                    <a class="overlay_open" target="_blank" href="<? the_sub_field('liens_pdf'); ?>">

                        <div class="fourth_row_left_1 modif_fourth_row modif_float " id="id" style="background-color: rgb(244, 244, 243);">
                          <? the_sub_field('fourth_row_bloc_left_title_pdf'); ?>

                  </div>

                </a>

                    <? endwhile; ?>


        </div>

      <? endif; ?>

      </div>

    </div>

    <div class="col-sm-3 modif_bottom">

      <div class="fourth_row_right">

        <a href="#">

          <div class="scroll_auto_fourth_row_right">

          </div>

        </a>

      </div>

    </div>

  </div>

</div>

<!------------------------------------------------------------------------------->

<div class="row fifth_row">

  <div class="fifth_row_title">

        <?php

       // BARDAGE CONNECTABLE
       if($post->ID == '556') {
         $term_id = '159';
       }

       // BARDAGE EMBOÎTABLE
       elseif ($post->ID == '558') {
          $term_id = '158';
       }
       // COUVERTURE CONNECTABLE
        elseif ($post->ID == '557') {
            $term_id = '160';
        }
        // brise soleil
        elseif ($post->ID == '83') {
          $term_id = '169';
      }

      ?>

    <a href="<? echo site_url('realisations')?>/?gamme=<?php echo $term_id;  ?>">

      <? the_field('fifth_row_title'); ?>

    </a>

  </div>

</div>

<script type="text/javascript">

jQuery(document).ready(function($){

    <? while ( have_rows('fourth_row_bloc_left_title') ) : the_row(); ?>

       <? $overlay_id = '#'.get_sub_field('bouton_id'); ?>
       <? $class = get_sub_field('popup_title'); ?>
       <? $newstr = '#'.cleanString($class);  ?>
       <? $newstrClass = '.'.cleanString($class);  ?>

       $( '.fourth_row_left_1' ).hover(function() {
          $(this).css("background-color", "<?= $field_color; ?>");
        }, function() {
          $(this).css("background-color", "#F4F4F3");
        }
      );

      $('<?= $newstr; ?>').click(function(){

        $('<?= $newstrClass; ?>').css("visibility", "visible");
        $('.popup_overlay_up').css("visibility", "visible");

        ///////////////////////////////////////

        if ($('<?= $newstrClass; ?>').is(":visible")){

          $('.fourth_row_left_1').off("hover", "fourth_row_left_1");

        }

        else{

          alert('nothing');
        }

        //////////////////////////////////////////

      });

       $('.overlay_close').click(function(){

         $('<?= $overlay_id; ?>').css("background-color", "#F4F4F3");
         $('<?= $newstrClass; ?>').css("visibility", "hidden");
         $('.popup_overlay_up').css("visibility", "hidden");

       });

       <? wp_reset_postdata(); ?>

    <? endwhile;?>

});

</script>

<? get_footer() ?>
