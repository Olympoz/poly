jQuery(document).ready(function($){

  //////////////////////////////////////////////////////////
  //// Modification de hauteurs sur des blocs 75% - 25% ////
  //////////////////////////////////////////////////////////

  /////////////////////////////////////////////////////
  //// Page Qui Sommes Nous / Innovations / Single ////
  /////////////////////////////////////////////////////


  setTimeout(() => {

    $(".first_row_who_right_wrapper").css({'height':($(".first_row_who_left").height()+'px')});
    $(".fourth_row_who_up_wrapper_2").css({'height':($(".bloc_1_who").height()-3+'px')});
    $(".fourth_row_who_down_wrapper_1").css({'height':($(".bloc_4_who").height()-3+'px')});
    $(".second_row_who_right_wrapper").css({'height':($(".second_row_who_left").height()+'px')});
    $(".first_row_inno_right_wrapper").css({'height':($(".first_row_inno_left").height()+'px')});
    $(".test").css({'height':($(".first_row_right").height()+'px')});
    $(".second_row_left_2").css({'height':($(".anchor_single_js").height()+'px')});
    $(".second_row_right").css({'height':($(".anchor_single_js").height()+'px')});
  }, 500);

  $( window ).resize(function() {

    $(".first_row_who_right_wrapper").css({'height':($(".first_row_who_left").height()+'px')});
    $(".fourth_row_who_up_wrapper_2").css({'height':($(".bloc_1_who").height()-3+'px')});
    $(".fourth_row_who_down_wrapper_1").css({'height':($(".bloc_4_who").height()-3+'px')});
    $(".second_row_who_right_wrapper").css({'height':($(".second_row_who_left").height()+'px')});
    $(".first_row_inno_right_wrapper").css({'height':($(".first_row_inno_left").height()+'px')});
    $(".test").css({'height':($(".first_row_right").height()+'px')});
    $(".second_row_left_2").css({'height':($(".anchor_single_js").height()+'px')});
    $(".second_row_right").css({'height':($(".anchor_single_js").height()+'px')});

  });

  /////////////////////
  //// Menu Mobile ////
  /////////////////////

  $('.logo_menu_open').on('click', function(){

    $('.overlay_mobile').css('transform', 'translateY(0)');
    $('.logo_menu_close').css('display', 'block');
    $(this).css("display", "none");
    $('.logo_menu_close').css("display", "block ");
    $('.overlay_mobile').css("overflow-y", "hidden");

  });

  $('.logo_menu_close').on('click', function(){

    $(this).css("display", "none");
    $('.overlay_mobile').css('transform', 'translateY(-100vh)');
    $('.logo_menu_open').css('display', 'block');

  });

  ////////////////////
  //// Newsletter ////
  ////////////////////

  $('.close_newsletter').on("click", function(){

    $(".newsletter").css("visibility", "hidden");
    $(".overlay_newsletter").css("visibility", "hidden");

  });

  // Set timeOut

  $(".newsletter").hide();
  $('.overlay_newsletter').hide();

  setTimeout(function(){

   $('.newsletter').show();
   $('.overlay_newsletter').show();

    }, 5000);

  /////////////////////
  //// Logo header ////
  /////////////////////

  $('.rs').on("click", function () {

    $( ".rs_logo_1" ).css("display","block");
    $( ".rs_logo_1" ).css("margin-top","0px");

    $( ".rs_logo_2" ).css("display","block");
    $( ".rs_logo_2" ).css("margin-top","0px");

    });

  //////////////////////////////////
  //// Page contact bouton file ////
  //////////////////////////////////

  $('.wpcf7-file').change(function(){

    if ($('.wpcf7-file').get(0).files.length == 0) {

    }else{
      var fileName = $('.wpcf7-file').val();
      cleanFileName = fileName.replace(/.*[\/\\]/, '');
      $('.span_form').html(cleanFileName);

      $(".wpcf7_file_clear").css("display","block");
    };

  });

  $(".wpcf7_file_clear").on("click", function () {

      $(this).css("display","none");

      $(".wpcf7-file").val('');
      var reset = $(".wpcf7-file").val();

      $('.span_form').html("Ajouter une pièce jointe");

  });

  //////////////////////////////////////
  //// Fonction page contact select ////
  //////////////////////////////////////

  $(".form_select_1").change(function(){

    if ($(this).val() == 'Avoir des infos sur un produit') {

      $(".form_select_2").css("display","block");

    }else {
      $(".form_select_2").css("display","none");
    }

  });

  $(".form_select_1 option:first").html('Vous souhaitez... ? *');
  $(".form_select_1 option:first").addClass('testetstet');
  $(".form_select_1 option:first").attr('disabled','disabled');
  $(".form_select_2 option:first").html('Quel produit ? *');
  $(".form_select_2 option:first").attr('disabled','disabled');

//////////////////////////////////
//// Jquery différents slider ////
//////////////////////////////////

    /////////////////
    // Slider Home //
    /////////////////

    $('.slider_products_home').bxSlider({
      mode :    'vertical',
      speed:    '1000',
      control:  'false',
      auto:     'true',
      pause:    '5000',
    });

    ///////////////////////////
    // Slider single product //
    ///////////////////////////

    $('.slider_single_product').bxSlider({
      speed:    '1000',
      control:  'false',
      auto:     'true',
      pause:    '5000',
      touchEnabled: false
    });

    ////////////////////////
    // Slider single actu //
    ////////////////////////

    $('.slider_single_actu').bxSlider({
      speed:    '1000',
      control:  'false',
      auto:     'true',
      pause:    '5000',
      touchEnabled: false
    });

    $('.slider_produit').bxSlider({
      speed:    '1000',
      control:  'false',
      auto:     'true',
      pause:    '5000',
      touchEnabled: false
    });

////////////////////////////////////////////////////////////////////////////////
//// Page innovations - Second Row hover sur éléments et changement d'images////
////////////////////////////////////////////////////////////////////////////////

    /////////////
    // #1 item //
    /////////////

    $( "#inno_item_1" ).on( "mouseover", function() {
      $(".second_row_inno_image_1" ).css( "border", "5px solid #002954" );
      $(".second_row_inno_image_1").css("display", "block");

      $(".second_row_inno_image_2").css("display", "none");
      $(".second_row_inno_image_3").css("display", "none");
      $(".second_row_inno_image_4").css("display", "none");
      $(".second_row_inno_image_5").css("display", "none");

    });

    $( "#inno_item_1" ).on( "mouseleave", function() {
      $(".second_row_inno_image_1" ).css( "border", "5px solid transparent" );
    });

    /////////////
    // #2 item //
    /////////////

    $( "#inno_item_2" ).on( "mouseover", function() {
      $(".second_row_inno_image_2" ).css( "border", "5px solid #002954" );
      $(".second_row_inno_image_2").css("display", "block");

      $(".second_row_inno_image_1").css("display", "none");
      $(".second_row_inno_image_3").css("display", "none");
      $(".second_row_inno_image_4").css("display", "none");
      $(".second_row_inno_image_5").css("display", "none");

    });

    $( "#inno_item_2" ).on( "mouseleave", function() {
      $(".second_row_inno_image_2" ).css( "border", "5px solid transparent" );
    });

    /////////////
    // #3 item //
    /////////////

    $( "#inno_item_3" ).on( "mouseover", function() {
      $(".second_row_inno_image_3" ).css( "border", "5px solid #002954" );
      $(".second_row_inno_image_3").css("display", "block");

      $(".second_row_inno_image_1").css("display", "none");
      $(".second_row_inno_image_2").css("display", "none");
      $(".second_row_inno_image_4").css("display", "none");
      $(".second_row_inno_image_5").css("display", "none");

    });

    $( "#inno_item_3" ).on( "mouseleave", function() {
      $(".second_row_inno_image_3" ).css( "border", "5px solid transparent" );
    });


    /////////////
    // #4 item //
    /////////////

    $( "#inno_item_4" ).on( "mouseover", function() {
      $(".second_row_inno_image_4" ).css( "border", "5px solid #002954" );
      $(".second_row_inno_image_4").css("display", "block");

      $(".second_row_inno_image_1").css("display", "none");
      $(".second_row_inno_image_2").css("display", "none");
      $(".second_row_inno_image_3").css("display", "none");
      $(".second_row_inno_image_5").css("display", "none");

    });

    $( "#inno_item_4" ).on( "mouseleave", function() {
      $(".second_row_inno_image_4" ).css( "border", "5px solid transparent" );
    });

    /////////////
    // #5 item //
    /////////////

    $( "#inno_item_5" ).on( "mouseover", function() {
      $(".second_row_inno_image_5" ).css( "border", "5px solid #002954" );
      $(".second_row_inno_image_5").css("display", "block");

      $(".second_row_inno_image_1").css("display", "none");
      $(".second_row_inno_image_2").css("display", "none");
      $(".second_row_inno_image_3").css("display", "none");
      $(".second_row_inno_image_4").css("display", "none");

    });

    $( "#inno_item_5" ).on( "mouseleave", function() {
      $(".second_row_inno_image_5" ).css( "border", "5px solid transparent" );
    });


//////////////////////////////////////////////////////////////////////
//// Page innovations - Third Row popup on click sur les couleurs ////
//////////////////////////////////////////////////////////////////////

    ///////////////////////////
    // Function fermer popup //
    ///////////////////////////

    $(document).on("click", ".inno_popup_close", function(){


      $('#classique').removeClass('open');
      $('#pastels').removeClass('open');
      $('#toniques').removeClass('open');
      $('#nacree').removeClass('open');
      $('#opaques').removeClass('open');

    });

    ////////////
    // Gammes //
    ////////////

    $('.inno_gamme_color').on('click', function(){

      var next;
      next = $(this).parent().next('.inno_gamme_hover');
      console.log(next);

      $('html, body').animate({
        scrollTop: (next.offset().top)
      },500);


    });



    $('.classique').on('click', function(){

      $('#pastels').removeClass('open');
      $('#toniques').removeClass('open');
      $('#nacree').removeClass('open');
      $('#opaques').removeClass('open');
      $("#classique").addClass('open');



    });

    $('.pastels').on('click', function(){



      $('#classique').removeClass('open');
      $('#toniques').removeClass('open');
      $('#nacree').removeClass('open');
      $('#opaques').removeClass('open');
      $("#pastels").addClass('open');


    });

    $('.toniques').on('click', function(){

      $('#pastels').removeClass('open');
      $('#classique').removeClass('open');
      $('#nacree').removeClass('open');
      $('#opaques').removeClass('open');
      $("#toniques").addClass('open');

    });

    $('.nacree').on('click', function(){

      $('#pastels').removeClass('open');
      $('#toniques').removeClass('open');
      $('#classique').removeClass('open');
      $('#opaques').removeClass('open');
      $("#nacree").addClass('open');

    });

    $('.opaques').on('click', function(){

      $('#pastels').removeClass('open');
      $('#toniques').removeClass('open');
      $('#nacree').removeClass('open');
      $('#classique').removeClass('open');
      $("#opaques").addClass('open');

    });

  //////////////////////
  //// Realisations ////
  //////////////////////

  $('.filters_more').on('click', function() {
    $('#genre-filter').toggle();
  })
});
