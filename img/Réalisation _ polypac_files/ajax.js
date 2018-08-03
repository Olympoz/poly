jQuery(document).ready(function($){

    /////////////////////// Add Ajax call here

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
          },

      });
    });

});
