jQuery(document).ready(function($){

    ///////////////////////  ajax page actualité

    $('.filter_style').on('click', function(){

      val = $(this).attr('id');

      jQuery.ajax({

          type:"POST",
          url: ajaxcustom,
          dataType: 'html',
          data: {
              action: 'filter_actu',
              param: val,
          },

          success:function(response){
              $('#scroll-area').html(response);

              $('.archive_actu_second_row_first_floor').isotope({
                layoutMode: 'masonryHorizontal',
                itemSelector: '.grid-item',
                masonryHorizontal: {
                // rowHeight: 100
                }
            });
          },

      });
    });
    

    $('#filter_reset').on('click', function(){

      jQuery.ajax({

          type:"POST",
          url: ajaxcustom,
          dataType: 'html',
          data: {
              action: 'filter_reset',
          },

          success:function(response){
              $('#scroll-area').html(response);
                console.log('istopo');
              $('.archive_actu_second_row_first_floor').isotope({
                layoutMode: 'masonryHorizontal',
                itemSelector: '.grid-item',
                masonryHorizontal: {
                  // rowHeight: 100
                }
              });

          },

      });




   
    });

    $('.first_row_second_floor_search_left').on('click', function(){

      val = $('#search_bar').val();

      jQuery.ajax({

          type:"POST",
          url: ajaxcustom,
          dataType: 'html',
          data: {
              action: 'search_actu',
              search: val,
          },

          success:function(response){
              $('#test-ajax').html(response);
          },

      });
    });

    $('.search').on('submit', function(e){

      e.preventDefault();

      val = $('#search_bar').val();

      jQuery.ajax({

          type:"POST",
          url: ajaxcustom,
          dataType: 'html',
          data: {
              action: 'search_actu',
              search: val,
          },

          success:function(response){
              $('#test-ajax').html(response);
          },

      });
    });

    ///////////////////////////////////////////////



    $('.inno_gamme_color').on('click', function(e){

      e.preventDefault();
      val_id = $(this).attr('id');
      var val_click = "#"+$(this).attr('data-click');
      //alert(val_click);

      jQuery.ajax({

          type:"POST",
          url: ajaxcustom,
          dataType: 'html',
          data: {
              action: 'color',
              param: val_id,
          },

          success:function(response){
              $(val_click).html(response);
              $('.inno_popup_close').on('click', function() {
                console.log('ok');
                $('html, body').animate({
                  scrollTop: $('.inno_gamme_popup').offset().top + 600
                },500);
              })
        
          },

      });
    });




        



});
