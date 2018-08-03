<?
/*
Template Name: Contact
*/
?>

<? get_header() ?>

<div class="first_row_contact">
  <div class="first_row_contact_wrapper">
    <div class="title_contact">Contact</div>
      <div class="contact_description">
        Vous souhaitez en savoir plus sur un produit, prendre contact avec un professionnel Polypac ou simplement avoir un renseignement ? Contactez-nous !
      </div>
  </div>
</div>


<div class="row second_row_contact">
  <div class="second_row_contact_wrapper">

      <div class="testest">

        <?php echo do_shortcode( '[contact-form-7 id="494" title="Formulaire de contact"]' ); ?>

      </div>

  </div>
</div>

<div class=" third_row_contact">
  <div class="left_side_contact ">
    <div id="map"></div>
  </div>
  <div class="right_side_contact">
    <div class="right_side_contact_wrapper">
      <div class="right_side_contact_title">Polypac</div>
      <div class="right_side_contact_content">Adresse : ZA Porte de Kerlann</div>
      <div class="right_side_contact_content">Tel : 02.99.52.75.52 / Fax : 02.99.52.76.44</div>
      <div class="right_side_contact_content">Email : contact@poly-pac.fr</div>
    </div>
  </div>
  <div class="clear_contact"></div>
</div>

<script type="text/javascript">

// MAP Contact

function initialize() {
    var latlng = new google.maps.LatLng(48.054196, -1.741236);

    //48.0541993,-1.7434201,17z/data=!3m1!4b1!4m5!3m4!1s0x480f1e502ccbd6bd:0x98ec05cd354edf1a!8m2!3d48.0541957!4d-1.7412261

    var myOptions = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map"),
            myOptions);

    var marker = new google.maps.Marker({
      position: latlng,
      map: map
    });
}
google.maps.event.addDomListener(window, "load", initialize);

</script>

<? get_footer() ?>
