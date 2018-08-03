jQuery(document).ready(function($){


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

////////////////////////////////////////////////////////////////////////////////
//// Page innovations - Second Row hover sur éléments et changement d'images////
////////////////////////////////////////////////////////////////////////////////

    /////////////
    // #1 item //
    /////////////

    $( "#inno_item_1" ).on( "mouseover", function() {
      $(".second_row_inno_image_1" ).css( "border", "5px solid #033873" );
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
      $(".second_row_inno_image_2" ).css( "border", "5px solid #033873" );
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
      $(".second_row_inno_image_3" ).css( "border", "5px solid #033873" );
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
      $(".second_row_inno_image_4" ).css( "border", "5px solid #033873" );
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
      $(".second_row_inno_image_5" ).css( "border", "5px solid #033873" );
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



});
