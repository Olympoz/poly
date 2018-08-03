<? get_header() ?>

<!--

//////////// Call ajax-filter-realisation

-->

          <?php

            $new_posts_filter = new Ajax_Filter_Posts();
            echo $new_posts_filter->get_genre_filters('realisations', 'gamme_de_produits', 'type_de_batiment', 'couleurs_realisations');
          ?>
      </div>

<?php get_footer() ?>
