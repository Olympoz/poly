<?


//ADD ACTION

add_action( 'wp_ajax_filter_actu', 'filter_actu' );
add_action( 'wp_ajax_nopriv_filter_actu', 'filter_actu' );

add_action( 'wp_ajax_filter_reset', 'filter_reset' );
add_action( 'wp_ajax_nopriv_filter_reset', 'filter_reset' );

add_action( 'wp_ajax_search_actu', 'search_actu' );
add_action( 'wp_ajax_nopriv_search_actu', 'search_actu' );

add_action( 'wp_ajax_color', 'color' );
add_action( 'wp_ajax_nopriv_color', 'color' );

//LIST ACTION

function color(){

  $test             = $_POST['param'];
  $term_by_id       = get_term_by('id', $test, 'Couleurs');
  $quantityTermName = $term_by_id->name;
  $desc = $term_by_id->description;
  $testing          = $term_by_id->taxonomy.'_'.$term_by_id->term_id;
  $id_chiffre       = $value->term_id;
  $image            = get_field('gamme_colors', $testing);
  $id_jquery        = get_field('gamme_colors_select', $testing);
  $img_link         = $image['url'];

  $term = get_term( $term_id, $taxonomy );
  $link_realisations = get_field('liens_vers_realisations', $testing);
  $link_polantis = get_field('lien_polantis', $testing);
  $script_polantis = get_field('script_polantis', $testing);



echo '<script type="text/javascript" src="https://www.polantis.com/bundles/polmirroring/js/mirroring.js"></script>';

      echo "<div class='inno_popup_title_wrapper'>";

        echo "<div class='inno_popup_invisible'></div>";

        echo "<div class='inno_popup_title_text'>".$quantityTermName."</div>";

        echo "<div class='inno_popup_close'></div>";

      echo "</div>";

      echo "<div class='inno_popup_content_wrapper'>";

        echo "<div class='inno_popup_image_container'>";

          echo "<div class='inno_popup_image' style='background-image: url( ".$img_link." )'>";

          echo "</div>";

        echo "</div>";

        echo "<div class='inno_popup_content_right'>";

          echo "<div class='inno_content_right_1'>";

          

         

            echo "<div class='inno_content_right_link_wrapper'>";

            if($link_polantis) {
              echo "<div class='inno_content_right_title'>";

                echo "LES BIM  - POLANTIS";

              echo "</div>";
              echo "<div class='inno_content_right_text'>";
                echo "Pour la réalisation de vos maquettes numériques, cette couleur est disponible en texture BIM sur le site de notre partnaire POLANTIS";
              echo "</div>";
              echo "<div class='inno_content_right_link_polantis'>";
                echo $link_polantis;
              echo "</div>";
            }
            else {
              echo "<div class='inno_content_right_title'>";

              

              echo "</div>";
              echo "<div class='inno_content_right_text text-sans-polantis'>";
                echo "Nous vous proposons également de créer des couleurs sur mesure adapatée à vos projets !";
              echo "</div>";
              echo "<div class='inno_content_right_link'>";
                echo "<a href=" . site_url('contact') .">Nous contacter</a>";

              echo "</div>";
            }
      

            echo "</div>";

          echo "</div>";

          echo "<div class='inno_content_right_2'>";

              echo "<div class='inno_content_right_2_link'>";

                echo "<a href='$link_realisations'>";

                echo "Voir les réalisations";

                echo "</a>";

              echo "</div>";

          echo "</div>";

        echo "</div>";

      echo "</div>";



};

function search_actu() {


  $search = $_POST['search'];

  echo $search;



};

function filter_reset(){

  $filter_actu = array(
      'post_type'       => 'post',
      'orderby'         => 'date',
      'order'           => 'DESC',
      'posts_per_page'  => -1,
  );

  $query_by_cat = new WP_Query($filter_actu);

  //Boucle

  $i_article = 0;

  echo "<div class='scrollable'>";

    echo "<ul class='archive_actu_second_row_first_floor'>";

      while ($query_by_cat->have_posts()) : $query_by_cat->the_post();
      
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),  "thumb-400" ); 
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



        
        <li class="grid-item archive_actu_items row_<?= $i_article; ?>" id="<?php echo $i_article; ?>" style="width:<?php echo $size_bloc ?>px;">
        
        <?php
        //Début du bloc actu
        // echo "<li class='grid-item archive_actu_items' id=' ".$i_article." '>";

          //Image de l'actu
          echo "<div class='archive_actu_image' style='background-image: url( ".$image['sizes']['thumb-600']." )' >";

          echo "</div>";

          //Détails de l'actu
          echo "<div class='archive_actu_items_wrapper'>";

            //Titre de l'actu
            echo"<div class='archive_actu_items_title'>";

              the_field('titre_court_de_lactualite');

              //echo de la date de l'article
              echo"<span class='archive_actu_items_date'>";

               echo " - ";  the_date(J/M/Y);

              echo "</span>";

            echo"</div>";

            //Contenu des blocs d'actualités
            echo "<div class='archive_actu_items_content'>";

              //Texte du bloc actualité
              echo "<div class='archive_actu_items_content_text'>";

                $test = get_field('premier_texte_de_lactualite');

                custom_echo($test, 135);

              echo "</div>";

            echo "</div>";

          echo "</div>";

          //Lien vers l'actualité
          echo "<a class='actu_abs' href=' ".get_permalink( $post-> $query_by_cat)." '>";

            echo "<div class='archive_actu_items_more'>";

              echo "<div class='archive_actu_items_more_svg  archive_actu_color_svg'>";

              echo "</div>";

            echo "</div>";

          echo "</a>";

        echo "</li>";

      //Fin de boucle
      endwhile;

      wp_reset_postdata();

    echo "</ul>";

  echo "</div>";

  die();
};


function filter_actu() {


  $cat_name = $_POST['param']; // = ID du bouton

  $filter_actu = array(
      'post_type'       => 'post',
      'category_name'   => $cat_name,
      'orderby'         => 'date',
      'order'           => 'DESC',
      'posts_per_page'  => -1,
  );

  $query_by_cat = new WP_Query($filter_actu);

  //Boucle
      
  $i_article = 0;

  echo "<div class='scrollable'>";

    echo "<ul class='archive_actu_second_row_first_floor'>";

      while ($query_by_cat->have_posts()) : $query_by_cat->the_post();
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



        //Début du bloc actu
        <li class="grid-item archive_actu_items row_<?= $i_article; ?>" id="<?php echo $i_article; ?>" style="width:<?php echo $size_bloc ?>px;">
        
        <?php
        // echo "<li class='grid-item archive_actu_items' style='width:". get_the_field('taille_de_lactualite') ."px'>";

          //Image de l'actu
          echo "<div class='archive_actu_image' style='background-image: url( ".$image['sizes']['thumb-600']." )' >";

          echo "</div>";

          //Détails de l'actu
          echo "<div class='archive_actu_items_wrapper'>";

            //Titre de l'actu
            echo"<div class='archive_actu_items_title'>";

              the_field('titre_court_de_lactualite');

              //echo de la date de l'article
              echo"<span class='archive_actu_items_date'>";

               echo " - ";  the_date(J/M/Y);

              echo "</span>";

            echo"</div>";

            //Contenu des blocs d'actualités
            echo "<div class='archive_actu_items_content'>";

              //Texte du bloc actualité
              echo "<div class='archive_actu_items_content_text'>";

                $test = get_field('premier_texte_de_lactualite');

                custom_echo($test, 135);

              echo "</div>";

            echo "</div>";

          echo "</div>";

          //Lien vers l'actualité
          echo "<a class='actu_abs' href=' ".get_permalink( $post-> $query_by_cat)." '>";

            echo "<div class='archive_actu_items_more'>";

              echo "<div class='archive_actu_items_more_svg  archive_actu_color_svg'>";

              echo "</div>";

            echo "</div>";

          echo "</a>";

        echo "</li>";



      //Fin de boucle
      endwhile;

      wp_reset_postdata();

    echo "</ul>";

  echo "</div>";

  die();
};

?>
