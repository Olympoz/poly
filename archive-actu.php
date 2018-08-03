<?
/*
Template Name: Archive Actu
*/
?>

<? get_header() ?>

<section class="archive_actu">

      <div class="archive_actu_first_row">

        <div class="archive_actu_first_row_first_floor">

                  <div class="first_row_first_floor_title">

                    Thématiques

                  </div>


                  <div class="filter_style" id="evenements">

                    évènements

                  </div>

                  <div class="filter_style" id="realisations">

                    réalisations

                  </div>

                  <div class="filter_style" id="innovation">

                    Innovation

                  </div>

                  <div class="filter_style" id="etude_de_cas">

                    études de cas

                  </div>

                  <div class="filter_style" id="filter_reset">

                    Réinitialiser les filtres

                  </div>

        </div>

      </div>

      <div class="archive_actu_second_row" id='test-ajax'>

        <?

        $args_article = array(
          'post_type'       => 'post',
          'orderby'         => 'date',
          'order'           => 'DESC',
          'posts_per_page'  => -1,
        );

        $query_article = new WP_Query( $args_article );

        $posts_article = $query_article->posts_article;

        ?>

        <div>

<!--/////////////////////////////////////////////////////////////////-->

<div id="scroll-area">

  <div class="scrollable scrollable-test">

    <?

    $args_article = array(
      'post_type'       => 'post',
      'orderby'         => 'date',
      'order'           => 'DESC',
      'posts_per_page'  => -1,
    );

    $query_article = new WP_Query( $args_article );

    $posts_article = $query_article->posts_article;
?>




      <ul class="archive_actu_second_row_first_floor wrapper">

          <?php  while ($query_article->have_posts()) : $query_article->the_post();  ?>

            <?php
             $image = get_field('archive_actu_image');
         $title =  get_field('titre_court_de_lactualite');
         
              if (strlen($title) < 10) {
                $size_bloc = "300";
              }
              elseif (strlen($title) > 10 && strlen($title) < 18) {
                $size_bloc = "400";
              }
              else  {
                $size_bloc = "500";
              }
            ?>

          <?php  $image = get_field('archive_actu_image'); ?>

          <a href="<?php the_permalink() ?>">

              <li class="grid-item archive_actu_items row_<?= $i_article; ?>"  style="width:<?php echo $size_bloc ?>px;">
                <a  href="<?php the_permalink() ?>">

                <div class="archive_actu_image" style="background-image: url('<? echo $image['sizes']['thumb-600']?>')" >

                </div>

                <div class="archive_actu_items_wrapper">

                    <div class="archive_actu_items_title">

                      <? the_field('titre_court_de_lactualite'); ?>

                      <span class="archive_actu_items_date">

                        - <?= get_the_date(J/M/Y); ?>

                      </span>

                    </div>

                    <div class="archive_actu_items_content">

                      <div class="archive_actu_items_content_text">

                        <? $extrait = get_field('premier_texte_de_lactualite');  ?>

                        <?php custom_echo($extrait, 100); ?>

                      </div>

                  </div>

                </div>

                <a class="actu_abs" href="<?php the_permalink() ?>">

                  <div class="archive_actu_items_more">

                    <div class="archive_actu_items_more_svg  archive_actu_color_svg">

                    </div>

                  </div>

                </a>
            </a>

              </li>

          </a>



        <? endwhile; ?>

        <? wp_reset_postdata(); ?>

    </ul>

  </div>

</div>

</section>

<script type="text/javascript">

$(document).ready(function(){

  // var marginBlocPrev  = 0;
  // var marginSelf      = 0;
  // var row_1           = $(".row_1");
  // var row_2           = $(".row_2");
  // var row_3           = $(".row_3");

  // var globalMargeRow1 = 0;
  // var globalMargeRow2 = 0;
  // var globalMargeRow3 = 0;

  $('.archive_actu_second_row_first_floor').isotope({
    layoutMode: 'masonryHorizontal',
    itemSelector: '.grid-item',
    masonryHorizontal: {
      // rowHeight: 100
    }
  });


  // row_1.each(function() {

  //   var blocprev    = parseInt($(this).parent(".wrapper").prev().children('.row_1').css("width"));
  //   var blocParent  = parseInt($(this).parent(".wrapper").prev().css("width"));
  //   var marginSelf  = (blocParent - 5) - blocprev;

  //   if(isNaN(parseFloat(marginSelf))){
  //     globalMargeRow1 = globalMargeRow1;
  //   }else{
  //     globalMargeRow1 += marginSelf;
  //   }

  //   $(this).css('margin-left', - globalMargeRow1);

  // });

  ///////////////////////////////////////////////

  // row_2.each(function() {

  //   var blocprev = parseInt($(this).parent(".wrapper").prev().children('.row_2').css("width"));
  //   var blocParent = parseInt($(this).parent(".wrapper").prev().css("width"));
  //   var marginSelf = (blocParent - 5) - blocprev;



  //   if(isNaN(parseFloat(marginSelf))){
  //     globalMargeRow2 = globalMargeRow2;
  //   }else{
  //     globalMargeRow2 += marginSelf;
  //   }

  //   $(this).css('margin-left', - globalMargeRow2);



  // });

  ///////////////////////////////////////////////

  // row_3.each(function() {

  //   var blocprev = parseInt($(this).parent(".wrapper").prev().children('.row_3').css("width"));
  //   var blocParent = parseInt($(this).parent(".wrapper").prev().css("width"));
  //   var marginSelf = (blocParent - 5) - blocprev;



  //   if(isNaN(parseFloat(marginSelf))){
  //     globalMargeRow3 = globalMargeRow3;
  //   }else{
  //     globalMargeRow3 += marginSelf;
  //   }

  //   $(this).css('margin-left', - globalMargeRow3);



  // });

  });



    // Fake horizontal scrolling with mouse wheel
    var elem;

    setTimeout(() => {
          elem = document.querySelector('#scroll-area');
            width = parseInt(elem.offsetWidth, 10);
            cldWidth = parseInt(elem.children[0].offsetWidth, 10);
            distance = cldWidth - width;
            mean = 40; // Just for multiplier (go faster or slower)
            current = 0;

          elem.children[0].style.left = current + "px"; // Set default `left` value as `0` for initiation

          if (elem.addEventListener) {
            elem.addEventListener("mousewheel", doScroll, false);
            elem.addEventListener("DOMMouseScroll", doScroll, false);
        } else {
            elem.attachEvent("onmousewheel", doScroll);
        }

 }, 500);

  var doScroll = function (e) {

      // cross-browser wheel delta
      e = window.event || e;
      var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));

      // (1 = scroll-up, -1 = scroll-down)
      // Always check the scroll distance, make sure that the scroll distance value will not
      // increased more than the container width and/or less than zero
      if ((delta == -1 && current * mean >= -distance) || (delta == 1 && current * mean < 0)) {
          current = current + delta;
      }

      // Move element to the left or right by updating the `left` value
      elem.children[0].style.left = (current * mean) + 'px';

      e.preventDefault();
  };


</script>

<? get_footer() ?>
