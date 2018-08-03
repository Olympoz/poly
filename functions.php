<?

$options        = array();
$dossier        = get_template_directory().'/functions';
$dossier        =  opendir($dossier);

while ($entry = readdir($dossier)) {
    if ($entry != "." && $entry != ".." && $entry[0] != "_") {
        array_push($options, $entry);
    }
}
closedir($dossier);

foreach ($options as $option) {
	if (file_exists(get_template_directory().'/functions/'.$option)) {
		include('functions/'.$option);
	}
}

// THUMBNAILS SIZE

add_image_size('thumb-1900', 1900);
add_image_size('thumb-1000', 1000);
add_image_size('thumb-800', 800);
add_image_size('thumb-700', 700);
add_image_size('thumb-600', 600);
add_image_size('thumb-400', 400);
add_image_size('thumb-100', 100);

add_filter ('image_size_names_choose', 'images_sizes');

function images_sizes($sizes) {

   return array_merge($sizes, array (
       'thumb-1900' => __('1900px by 9999px'),
       'thumb-1000' => __('1000px by 9999px'),
       'thumb-800' => __('800px by 9999px'),
       'thumb-800' => __('700px by 9999px'),
       'thumb-600' => __('600px by 9999px'),
       'thumb-400' => __('400px by 9999px'),
       'thumb-100' => __('100px by 9999px')
   ));
}

?>
