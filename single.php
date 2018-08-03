<? get_header() ?>

<?php

    function prev_link($posts, $current) {
        for ($i = 0; $i < count($posts); $i++) {
            if ($current->ID == $posts[$i]->ID) {
                if (isset($posts[$i-1])) {
                    return $posts[$i-1];
                }
            }
        }
        return $posts[count($posts)-1];
    }

    function next_link($posts, $current) {
        for ($i = 0; $i < count($posts); $i++) {
            if ($current->ID == $posts[$i]->ID) {
                if (isset($posts[$i+1])) {
                    return $posts[$i+1];

                }
            }
        }
        return reset($posts);
    }

    $args_article = array(
      'post_type'       => 'post',
      'orderby'         => 'date',
      'order'           => 'DESC',
      'posts_per_page'  => -1,
    );

    $posts_query = new WP_Query( $args_article );
    $posts =  $posts_query->posts;

 ?>

<div class="row first_row_single_actu">

  <a href="<? echo site_url('actualites')?>">

    <div class="cross_close_fixed"></div>

  </a>

      <? if ( have_rows('slider_actualite') ) : ?>

          <div class=" slider_single_actu" >

              <? while ( have_rows('slider_actualite') ) : the_row(); ?>

                  <div class="slider_single_actu_image" style="background-image: url(<? the_sub_field('slider_actualite_image'); ?>)">

                  </div>

              <? endwhile; ?>

          </div>

      <? endif; ?>

</div>

<!------------------------------------------------------------------------------->

<div class="row second_row_single_actu_color">

  <div class="row second_row_single_actu">


    <div class="col-sm-12">

      <div class="col-sm-8 ">

        <div class="single_actu_second_row_left_bloc">

          <div class="single_actu_datetime">

            <? the_field('date_de_lactualite'); ?>

          </div>

          <div class="single_actu_title">

            <? the_field('titre_de_lactualite');  ?>

          </div>

          <div class="single_actu_content_1">

            <? the_field('premier_texte_de_lactualite');  ?>

          </div>

          <?php if( get_field('image_de_lactualite') ): ?>

            <div class="single_actu_media_wrapper">

              <div class="single_actu_image" style="background-image: url(<? the_field('image_de_lactualite'); ?> )">


              </div>

            </div>

          	<?php else: ?>

          <?php endif; ?>

          <?php if( get_field('video_de_lactualite') ): ?>

            <div class="single_actu_media_wrapper">

              <video class="single_actu_video" controls src="<?php the_field('video_de_lactualite'); ?>" poster="https://images.unsplash.com/photo-1506549209434-33eff06262cc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=739096df79ee1aaca764631bd514fb47&auto=format&fit=crop&w=1256&q=80" style="width: 100%;  " >

              </video>

            </div>

            <?php else: ?>

          <?php endif; ?>


          <div class="single_actu_content_2">

            <? the_field('deuxieme_texte_de_lactualite');  ?>

          </div>

        </div>

      </div>

      <div class="col-sm-4 single_actu_second_row_right_bloc ">


        <div class="single_actu_innovations">

          <?php $img = get_field('archive_actu_image') ?>

          <?php echo strip_tags( the_category());?>

        </div>

        <div class="single_actu_prev_wrapper">

          <?

          $prev_post = prev_link($posts, $post);

          if($prev_post) {
            $image_prev_post = get_field( "archive_actu_image",  $prev_post->ID);

          }

          ?>

          <?php $prev = "

          <div class='single_actu_prev'  style=' background-image: url(". $image_prev_post['sizes']['thumb-600'].")  '>

            <div class='single_actu_prev_title' >

              actualité précédente

            </div>

          </div>

          "  ?>

          <?php previous_post_link( '%link',$prev

          );

          ?>

        </div>

        <div class="single_actu_next_wrapper">

          <?

          $next_post = next_link($posts, $post);

          if($next_post) {
            $image_next_post = get_field( "archive_actu_image",  $next_post->ID);

          }

          ?>

          <?php $next = "

          <div class='single_actu_next'  style=' background-image: url(".$image_next_post['sizes']['thumb-600'].")  '>

            <div class='single_actu_next_title' >

              actualité suivante

            </div>

          </div>

          "  ?>

          <?php next_post_link( '%link',$next

          );

          ?>

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

        <?php if( get_field('titre_du_bouton_de_popup') ): ?>

          <div class="line_single_actu_before">

          </div>

          <?php else: ?>

        <?php endif; ?>

        <?php if( get_field('titre_du_bouton_de_popup') ): ?>

          <div class="single_actu_more">

            <a class="overlay_open" >

              <? the_field('titre_du_bouton_de_popup'); ?>

            </a>

          </div>

          <?php else: ?>

        <?php endif; ?>

        <div class="popup_overlay_up">

        </div>

        <div class=" popup_overlay " >

            <div class="first_row_overlay">

              <div class=" modif_first_bloc_overlay  ">

                <div class="bloc_overlay">

                  <div class="overlay_title">

                    <? the_field('titre_de_la_popup'); ?>

                  </div>

                  <div class="overlay_close">


                  </div>

                </div>

              </div>

            </div>

          <div class="row second_row_overlay" >

            <div class="overlay_content" src="<? the_field('image_de_la_popup'); ?>" data-zoom-image="<? the_field('image_de_la_popup'); ?>"  style="background-image: url(<? the_field('image_de_la_popup'); ?>);">

            </div>

          </div>

      </div>

      </div>

    </div>

  </div>

</div>

<!------------------------------------------------------------------------------->

<div class="row third_row_single_actu">

    <div class="third_row_single_actu_title">
      <a href="<? echo  site_url('actualites')?>">Retour aux actualités</a>

    </div>

</div>

<!------------------------------------------------------------------------------->

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


///////////////
//// Popup ////
///////////////

jQuery(document).ready(function($){

  $('.single_actu_more').click(function(){

   $('.popup_overlay').css("visibility", "visible");
   $('.popup_overlay_up').css("visibility", "visible");

 });

  $('.overlay_close').click(function(){

    $('.popup_overlay').css("visibility", "hidden");
    $('.popup_overlay_up').css("visibility", "hidden");

  });
});

</script>

<? get_footer() ?>
