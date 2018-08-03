<?
/*------------------------------------------------------------*\
	Custom Post Types
\*------------------------------------------------------------*/

// NOTE : REACTIVER LES PERMALIENS DEPUIS L'ADMIN WP POUR PRENDRE EN COMPTE LA NOUVELLE URL


function create_post_type_produits() {
    register_post_type('produit',
        array(
            'label'                 => __('Produit'),
            'singular_label'        => __('Produit'),
            'add_new_item'          => __( 'Ajouter un Produit' ),
            'edit_item'             => __( 'Modifier un Produit' ),
            'new_item'              => __( 'Nouveau Produit' ),
            'view_item'             => __( "Voir le Produit" ),
            'search_items'          => __( 'Rechercher un Produit' ),
            'not_found'             =>  __( 'Aucun Produit trouvé' ),
            'not_found_in_trash'    => __( 'Aucun Produit trouvé' ),
            'public'                => true,
            'show_ui'               => true,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-groups',
            //'taxonomies'            => array('galerie'),
            'supports'              => array( 'title', 'editor', 'thumbnail'),
            'rewrite'               => array('slug' => 'produit', 'with_front' => true)
        )
    );
}
add_action( 'init', 'create_post_type_produits' );


function create_post_type() {
    register_post_type('realisations',
        array(
            'label'                 => __('Réalisation'),
            'singular_label'        => __('realisation'),
            'add_new_item'          => __( 'Ajouter une realisation' ),
            'edit_item'             => __( 'Modifier une realisation' ),
            'new_item'              => __( 'Nouvelle realisation' ),
            'view_item'             => __( "Voir la realisation" ),
            'search_items'          => __( 'Rechercher une realisation' ),
            'not_found'             =>  __( 'Aucune realisation trouvée' ),
            'not_found_in_trash'    => __( 'Aucune realisation trouvée' ),
            'public'                => true,
            'show_ui'               => true,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-groups',
            //'taxonomies'            => array('galerie'),
            'supports'              => array( 'title', 'editor', 'thumbnail'),
            'rewrite'               => array('slug' => 'realisations', 'with_front' => true)
        )
    );
}
add_action( 'init', 'create_post_type' );
