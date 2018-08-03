<?
/*
Template Name: Innovations
*/
?>

<? get_header() ?>

<div class=" first_row_inno">

  <div class=" first_row_inno_wrapper">

    <div class=" first_row_inno_left" >

      <div class="first_row_inno_left_container">

        <div class="first_row_inno_title">

          <? the_field('first_row_inno_title'); ?>

        </div>

        <div class="first_row_inno_content">

          <? the_field('first_row_inno_text'); ?>

        </div>

      </div>

    </div>

    <div class=" first_row_inno_right">

      <div class="first_row_inno_right_wrapper">

        <div class="first_row_inno_right_container">

          <div class="first_row_inno_right_title">

            Une question ?

          </div>

          <a href="<? site_url()?>/polypac/contact/">

            <div class="first_row_inno_right_text">

              Contactez-nous

            </div>

          </a>

        </div>

      </div>

    </div>

  </div>

</div>

      <!-- ////////////////////////////////////////////////////////// -->

<div class="third_row_inno">

  <div class="third_row_inno_title_container">

    <div class="third_row_inno_title">

      Nos gammes couleurs

    </div>

    <div class="third_row_inno_description">

      Cette liste est non exhaustive. N'hésitez pas à nous contactez pour une couleur sur-mesure.
      <br>
      Nous créons des nuances adaptées à vos projets !

    </div>

  </div>

  <?
    $field_key        = "field_5ab909ac5f865";
    $field            = get_field_object($field_key);
    $array_cat_color  = $field['choices'];

    if( $field )
    {
        foreach( $array_cat_color as $k => $v ){   ?>
          <? $meta_value = $k; ?>

          <div class="inno_gamme_wrapper" >
            <div class="inno_gamme_title">
              <?= $v; ?>
            </div>

            <ul  class="inno_gamme_container">

              <? $terms_classique= get_terms( array(
                    'taxonomy' => 'Couleurs',
                    'meta_key' => 'gamme_colors_select',
                    'meta_value' => $k,
                    'hide_empty' => false,

                ) );

                foreach ($terms_classique as $un_terms_classique=>$value) { ?>

                  <?php
                  $testing = $value->taxonomy.'_'.$value->term_id;
                  $id_chiffre = $value->term_id;
                  $image = get_field('gamme_colors', $testing);
                  // $img_link = $image['url'];

                  // var_dump($image);

                  ?>

                  <? if( get_field('gamme_colors_click',  $testing)[0] == 'cliquable' ) : ?>

                  <!-- <a href="#<?//echo $k;?>"> -->

                      <li class="inno_gamme_color <?= $k; ?>" id="<?= $id_chiffre ?>"   data-click="<?= $k; ?>" >

                          <div  id="inno_gamme_image" style="background-image: url(<?= $image['sizes']['thumb-100']?>)"></div>
                          <div  class="inno_gamme_text"><? echo $value->name; ?></div>

                      </li>

                  <!-- </a> -->



                  <? else : ?>

                    <li class="inno_gamme_color inno_gamme_color_no_click">

                        <div  id="inno_gamme_image" style="background-image: url(<?= $image['sizes']['thumb-100']?>)"></div>
                        <div  class="inno_gamme_text"><? echo $value->name; ?></div>


                    </li>


                  <? endif; ?>

                <? } ?>

            </ul>

          <div class="inno_gamme_hover">

            <div class='inno_gamme_popup popup_ajax_color' id="<? echo $k; ?>">

            </div>

          </div>

          </div>

      <?  }

    }
  ?>

</div>

      <!-- ////////////////////////////////////////////////////////// -->



<!--////////////////////////////////////////////////////////////////////-->




<!--///////////////////////////////////////////////////////////////////////-->

<div class="row fourth_row_inno">

  <div class="fourth_row_inno_container">

    <div class="fourth_row_inno_wrapper_left">

        <div class="fourth_row_inno_title">

          Des couleurs sur-mesure

        </div>

        <div class="fourth_row_inno_description">

          Les équipes de Poly-Pac pensent vos projets en sur-mesure.
          <br>
          N'hésitez pas à nous contacter, si vous souhaitez une autre couleur ou une spécificité technique !

        </div>

        <a href="<? site_url()?>/polypac/contact/">

          <div class="fourth_row_inno_consulter">

              Nous consulter

          </div>

        </a>

    </div>

    <div class="fourth_row_inno_wrapper_right">

    </div>

  </div>

</div>

<!--/////////////////////////////////////////////////////////////////////-->

<div class="row fifth_row_inno">

  <div class="fifth_row_inno_container">

    <div class="fifth_row_inno_wrapper_left">

    </div>

    <div class="fifth_row_inno_wrapper_right">

      <div class="fifth_row_inno_title">

        Laquage ou anodisation des profilés

      </div>

      <div class="fifth_row_inno_description">

        Tous les profilés et connecteurs arcoPlus peuvent être laqués dans la gamme RAL, sous les labels européens QUALICOAT et QUALIMARINE (exposition en bord de mer), ou anodisés.

      </div>

    </div>

  </div>

</div>

<!--/////////////////////////////////////////////////////////////////////-->

<div class="row sixth_row_inno">

  <div class="sixth_row_inno_container">

    <div class="sixth_row_inno_wrapper_left">

      <div class="sixth_row_inno_title">

        Plaque bicolore

      </div>

      <div class="sixth_row_inno_description">

        Créer l'atmosphère qui vous convient en choisissant une couleur différente sur chaque face de votre façade ArcoPlus.
        <br>
        <br>
        Toute association de couleurs et de finitions confort possible.

      </div>

      <a href="<? echo site_url('contact')?>">

        <div class="sixth_row_inno_consulter">

            Nous consulter

        </div>

      </a>

    </div>

    <div class="sixth_row_inno_wrapper_right">

    </div>

  </div>

</div>

<!--/////////////////////////////////////////////////////////////////////-->

<div class="row seventh_row_inno">

  <div class="seventh_row_inno_container">

    <div class="seventh_row_inno_wrapper_left">

      <div class="seventh_row_inno_title">

        Impression numérique

      </div>

      <div class="seventh_row_inno_description">

        Révélez le caractère de votre bâtiment en associant à vos façades arcoPlus® votre logo ou tout autre visuel au choix.

      </div>

    </div>

  </div>

</div>


<!-- ////////////////////////////////////////////////////////////// -->


<div class="second_row_inno">

  <div class="second_row_inno_title">

      <? the_field('second_row_inno_title'); ?>

  </div>

  <div class="second_row_inno_finitions">

    <div class="second_row_inno_wrapper_1" >

      <div class="second_row_inno_protection" id="inno_item_1">

        <div class="second_row_inno_logo_1">

          <div class="inno_icon_wrapper_1">

            <div class="inno_icon_1 inno_icons">


            </div>

          </div>

        </div>

        <div class="second_row_inno_container_1">

          <div class="second_row_inno_title_1">

            <? the_field('second_row_inno_title_bloc_1'); ?>

          </div>

          <div class="second_row_inno_text_1">

            <? the_field('second_row_inno_text_bloc_1'); ?>

          </div>

        </div>

      </div>

      <!-- ////////////////////////////////////////////////////////// -->

      <div class="second_row_inno_protection" id="inno_item_2">

        <div class="second_row_inno_logo_2">

          <div class="inno_icon_wrapper_2">

            <div class="inno_icon_2 inno_icons">


            </div>

          </div>

        </div>

        <div class="second_row_inno_container_2">

          <div class="second_row_inno_title_2">

            <? the_field('second_row_inno_title_bloc_2'); ?>

          </div>

          <div class="second_row_inno_text_2">

            <? the_field('second_row_inno_text_bloc_2'); ?>

          </div>

        </div>

      </div>

      <!-- ////////////////////////////////////////////////////////// -->

      <div class="second_row_inno_protection" id="inno_item_3">

        <div class="second_row_inno_logo_3">

          <div class="inno_icon_wrapper_3">

            <div class="inno_icon_3 inno_icons">


            </div>

          </div>

        </div>

        <div class="second_row_inno_container_3">

          <div class="second_row_inno_title_3">

            <? the_field('second_row_inno_title_bloc_3'); ?>

          </div>

          <div class="second_row_inno_text_3">

            <? the_field('second_row_inno_text_bloc_3'); ?>

          </div>

        </div>

      </div>

      <!-- ////////////////////////////////////////////////////////// -->

      <div class="second_row_inno_protection" id="inno_item_4">

        <div class="second_row_inno_logo_4">

          <div class="inno_icon_wrapper_4">

            <div class="inno_icon_4 inno_icons">

            </div>

          </div>

        </div>

        <div class="second_row_inno_container_4">

          <div class="second_row_inno_title_4">

            <? the_field('second_row_inno_title_bloc_4'); ?>

          </div>

          <div class="second_row_inno_text_4">

            <? the_field('second_row_inno_text_bloc_4'); ?>

          </div>

        </div>

      </div>

      <!-- ////////////////////////////////////////////////////////// -->

      <div class="second_row_inno_protection" id="inno_item_5">

        <div class="second_row_inno_logo_5">

          <div class="inno_icon_wrapper_5">

            <div class="inno_icon_5 inno_icons">


            </div>

          </div>

        </div>

        <div class="second_row_inno_container_5">

          <div class="second_row_inno_title_5">

            <? the_field('second_row_inno_title_bloc_5'); ?>

          </div>

          <div class="second_row_inno_text_5">

            <? the_field('second_row_inno_text_bloc_5'); ?>

          </div>

        </div>

      </div>

    </div>

    <div class="second_row_inno_wrapper_2">

      <? $image_finitions_1 = get_field('second_row_inno_image_bloc_1'); ?>

      <div class="second_row_inno_image_1" id="inno_image" style="background-image : url('<? echo $image_finitions_1['sizes']['thumb-700']?>')">

        <div class="second_row_inno_image_descriptif_wrapper">

          <div class="second_row_inno_image_descriptif_1">

            <? the_field('second_row_inno_texte_1_bloc_1'); ?>

          </div>

          <div class="second_row_inno_image_descriptif_2">

            <? the_field('second_row_inno_texte_2_bloc_1'); ?>

          </div>

        </div>

      </div>

      <? $image_finitions_2 = get_field('second_row_inno_image_bloc_2'); ?>

      <div class="second_row_inno_image_2" id="inno_image" style="background-image : url('<? echo $image_finitions_2['sizes']['thumb-700']?>')">

        <div class="second_row_inno_image_descriptif_wrapper">

          <div class="second_row_inno_image_descriptif_1">

            <? the_field('second_row_inno_texte_1_bloc_2'); ?>

          </div>

          <div class="second_row_inno_image_descriptif_2">

            <? the_field('second_row_inno_texte_2_bloc_2'); ?>

          </div>

        </div>

      </div>

      <? $image_finitions_3 = get_field('second_row_inno_image_bloc_3'); ?>

      <div class="second_row_inno_image_3" id="inno_image" style="background-image : url('<? echo $image_finitions_3['sizes']['thumb-700']?>')">

        <div class="second_row_inno_image_descriptif_wrapper">

          <div class="second_row_inno_image_descriptif_1">

            <? the_field('second_row_inno_texte_1_bloc_3'); ?>

          </div>

          <div class="second_row_inno_image_descriptif_2">

            <? the_field('second_row_inno_texte_2_bloc_3'); ?>

          </div>

        </div>

      </div>

      <? $image_finitions_4 = get_field('second_row_inno_image_bloc_4'); ?>

      <div class="second_row_inno_image_4" id="inno_image" style="background-image : url('<? echo $image_finitions_4['sizes']['thumb-700']?>')">

        <div class="second_row_inno_image_descriptif_wrapper">

          <div class="second_row_inno_image_descriptif_1">

            <? the_field('second_row_inno_texte_1_bloc_4'); ?>

          </div>

          <div class="second_row_inno_image_descriptif_2">

            <? the_field('second_row_inno_texte_2_bloc_4'); ?>

          </div>

        </div>

      </div>

      <? $image_finitions_5 = get_field('second_row_inno_image_bloc_5'); ?>

      <div class="second_row_inno_image_5" id="inno_image" style="background-image : url('<? echo $image_finitions_5['sizes']['thumb-700']?>')">

        <div class="second_row_inno_image_descriptif_wrapper">

          <div class="second_row_inno_image_descriptif_1">

            <? the_field('second_row_inno_texte_1_bloc_5'); ?>

          </div>

          <div class="second_row_inno_image_descriptif_2">

            <? the_field('second_row_inno_texte_2_bloc_5'); ?>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>


<? get_footer() ?>
