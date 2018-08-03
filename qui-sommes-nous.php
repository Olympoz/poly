<?
/*
Template Name: Qui sommes nous ?
*/
?>

<?php get_header() ?>

<? $image = get_field('image_page_qui_sommes_nous'); ?>

<div class=" first_row_who_color" style="background-image: url('<? echo $image['sizes']['thumb-1900']?>')">

  <div class="image_qui_sommes_nous_responsive" style="background-image: url('<? echo $image['sizes']['thumb-1900']?>')"></div>

  <div class=" first_row_who_wrapper">

    <div class=" first_row_who_left" >

      <div class="first_row_who_left_container">

        <div class="first_row_who_title">

          <? the_field('first_row_who_title'); ?>

        </div>

        <div class="first_row_who_content">

          <? the_field('first_row_who_text'); ?>

        </div>

      </div>

    </div>

    <div class=" first_row_who_right">

      <div class="first_row_who_right_wrapper">

        <div class="first_row_who_right_container">

          <div class="first_row_who_right_title">

            Un projet, une info....

          </div>

          <a href="<? site_url()?>/polypac/contact/">

            <div class="first_row_who_right_text">

              Contactez-nous

            </div>

          </a>

        </div>

      </div>

    </div>

  </div>

</div>

<!--//////////////////////////////////////////////////////////////////////-->

<div class="row fourth_row_who_color">

  <div class="row fourth_row_who_title">

    <div class="fourth_row_who_title_1">

      poly-pac

    </div>

  </div>

  <div class="row fourth_row_who_wrapper_1">

    <div class="col-sm-6 fourth_row_who bloc_1_who">

      <div class="fourth_row_who_up_wrapper_1">


          <? the_field('fourth_row_who_bloc_1'); ?>


      </div>


    </div>

    <div class="col-sm-6 fourth_row_who bloc_2_who">

      <? $image_2 = get_field('fourth_row_who_bloc_2'); ?>

      <div class="fourth_row_who_up_wrapper_2" style="background-image: url(<? echo $image_2['sizes']['thumb-800']?>)">


      </div>

    </div>

  </div> 

  <div class="row fourth_row_who_wrapper_2">

    <div class="col-sm-6 fourth_row_who bloc_3_who">

      <? $image_3 = get_field('fourth_row_who_bloc_3'); ?>

      <div class="fourth_row_who_down_wrapper_1" style="background-image: url(<? echo $image_3['sizes']['thumb-800']?>)">


      </div>

    </div>

    <div class="col-sm-6 fourth_row_who bloc_4_who">

      <div class="fourth_row_who_down_wrapper_2" >


        <? the_field('fourth_row_who_bloc_4'); ?>


      </div>

    </div>

  </div>

</div>

<!--//////////////////////////////////////////////////////////////////////-->
<!--//////////////////////////////////////////////////////////////////////-->

<div class="row second_row_who_color">

  <div class=" row second_row_who_wrapper">

    <div class="col-sm-9 second_row_who_left">

      <div class="second_row_who_left_container">

        <div class="second_row_who_title">

          <? the_field('second_row_who_title'); ?>

        </div>

        <div class="second_row_who_content">

          <? the_field('second_row_who_text'); ?>

        </div>

      </div>



    </div>

    <div class="col-md-3 col-sm-6 second_row_who_right">

      <div class="second_row_who_right_wrapper">

        <div class="second_row_who_right_container">

          <div class="second_row_who_right_title">

            Pour en savoir plus

          </div>

          <a href="<? site_url() ?>/polypac/produit/">

            <div class="second_row_who_right_text">

              Nos produits

            </div>

          </a>

        </div>

      </div>

    </div>

  </div>

</div>

<!--//////////////////////////////////////////////////////////////////////-->

<div class="row third_row_who_color" >

  <div class="row third_row_who_wrapper">

    <div class="col-sm-12">

          <div class="col-md-3 col-sm-6 third_row_who_bloc">

            <div class="third_row_who_bloc_wrapper">

              <div class="who_icon_wrapper">

                <div class="third_row_who_bloc_icon_1 who_icons">

                </div>

              </div>

              <div class="third_row_who_bloc_title">

                <? the_field('third_row_who_title_1'); ?>

              </div>

              <div class="third_row_who_bloc_text">

                <? the_field('third_row_who_text_1'); ?>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 third_row_who_bloc">

            <div class="third_row_who_bloc_wrapper">

              <div class="who_icon_wrapper">

                <div class="third_row_who_bloc_icon_2 who_icons">

                </div>

              </div>

              <div class="third_row_who_bloc_title">

                <? the_field('third_row_who_title_2'); ?>

              </div>

              <div class="third_row_who_bloc_text">

                <? the_field('third_row_who_text_2'); ?>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 third_row_who_bloc">

            <div class="third_row_who_bloc_wrapper">

              <div class="who_icon_wrapper">

                <div class="third_row_who_bloc_icon_3 who_icons">

                </div>

              </div>

              <div class="third_row_who_bloc_title">

                <? the_field('third_row_who_title_3'); ?>

              </div>

              <div class="third_row_who_bloc_text">

                <? the_field('third_row_who_text_3'); ?>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 third_row_who_bloc">

            <div class="third_row_who_bloc_wrapper">

              <div class="who_icon_wrapper">

                <div class="third_row_who_bloc_icon_4 who_icons">

                </div>

              </div>

              <div class="third_row_who_bloc_title">

                <? the_field('third_row_who_title_4'); ?>

              </div>

              <div class="third_row_who_bloc_text">

                <? the_field('third_row_who_text_4'); ?>

              </div>

            </div>

          </div>

      </div>

      <div class="col-sm-12">

          <div class="col-md-3 col-sm-6 third_row_who_bloc">

            <div class="third_row_who_bloc_wrapper">

              <div class="who_icon_wrapper">

                <div class="third_row_who_bloc_icon_5 who_icons">

                </div>

              </div>

              <div class="third_row_who_bloc_title">

                <? the_field('third_row_who_title_5'); ?>

              </div>

              <div class="third_row_who_bloc_text">

                <? the_field('third_row_who_text_5'); ?>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 third_row_who_bloc">

            <div class="third_row_who_bloc_wrapper">

              <div class="who_icon_wrapper">

                <div class="third_row_who_bloc_icon_6 who_icons">

                </div>

              </div>

              <div class="third_row_who_bloc_title">

                <? the_field('third_row_who_title_6'); ?>

              </div>

              <div class="third_row_who_bloc_text">

                <? the_field('third_row_who_text_6'); ?>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 third_row_who_bloc">

            <div class="third_row_who_bloc_wrapper">

              <div class="who_icon_wrapper">

                <div class="third_row_who_bloc_icon_7 who_icons">

                </div>

              </div>

              <div class="third_row_who_bloc_title">

                <? the_field('third_row_who_title_7'); ?>

              </div>

              <div class="third_row_who_bloc_text">

                <? the_field('third_row_who_text_7'); ?>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 third_row_who_bloc">

            <div class="third_row_who_bloc_wrapper">

              <div class="who_icon_wrapper">

                <div class="third_row_who_bloc_icon_8 who_icons">

                </div>

              </div>

              <div class="third_row_who_bloc_title">

                <? the_field('third_row_who_title_8'); ?>

              </div>

              <div class="third_row_who_bloc_text">

                <? the_field('third_row_who_text_8'); ?>

              </div>

            </div>

          </div>

      </div>

  </div>

</div>

<!--//////////////////////////////////////////////////////////////////////-->



<?php get_footer() ?>
