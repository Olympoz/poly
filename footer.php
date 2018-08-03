<footer>

  <section class="contact_call_to">

    <div class="btn_container" >

    <?php if (is_page( 473 ) ){  ?>

    <?  } else { ?>

      <div class="wrapper_contacter">

          <a href="<? site_url()?>/polypac/contact/">

            <?the_field('contact_text_button', 'options') ?>

          </a>

      </div>

      <?  }; ?>
    </div>
  </section>

  <div class="container_footer" style="">
    <? wp_nav_menu(array( 'theme_location' => 'menu-secondaire', 'container' => 'nav', 'container_class' => 'menu-footer col-sm-12  col-md-6 col-lg-offset-1 col-lg-5')); ?>

    <ul class="wrapper_logos_footer col-sm-12  col-md-6 col-lg-offset-1 col-lg-5 ">

      <li class="footer_logos col-lg-offset-1 col-lg-5  ">
        <a target="_blank" href="https://www.gallina.it/?lang=fr">
          <img style="" src="<?php echo get_template_directory_uri(); ?>/img/logo_gallina.png" alt="">
        </a>
      </li>

      <li class="footer_logos  col-lg-5" >
        <a target="_blank" href="https://www.reseau-entreprendre.org/fr/accueil/">
          <img style="" src="<?php echo get_template_directory_uri(); ?>/img/logo_reseau.png" alt="">
        </a>
      </li>

    </ul>
  </div>

</footer>

</body>
</html>
