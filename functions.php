<?php 

function cidw_4w4_enqueue(){
    //wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
    wp_enqueue_style('4w4-police-google', "https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:ital,wght@0,400;1,300;1,500&family=Roboto:ital@1&display=swap" , false);
}
add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'cidw_4w4' ),
        'menu_footer'  => __( 'Menu footer', 'cidw_4w4' ),
        'menu_lien_externe'  => __( 'Menu lien externe', 'cidw_4w4' ),
        'menu_categorie_cours' => __( 'Menu cours', 'cidw_4w4' ),
        'menu_accueil' => __( 'Menu Accueil', 'cidw_4w4' ),
    ) );
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );

/* ---------------------------------------------------------------------- filtré les choix du menu principal */
function cidw_4w4_filtre_choix_menu($obj_menu){
    //var_dump($obj_menu);
    foreach($obj_menu as $cle => $value)
    {
       // print_r($value);
       //$value->title = substr($value->title,0,7);
       $value->title = wp_trim_words($value->title,3,"...");
       // echo $value->title . '<br>';
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects","cidw_4w4_filtre_choix_menu");

// -------------------------------------------------------add theme support
function cidw_4w4_add_theme_support(){

    add_theme_support('post-thumbnails');

add_theme_support( 'custom-logo', array(
    "width" => 100,
    "height" => 100
 ));
}
add_action( 'after_setup_theme', 'cidw_4w4_add_theme_support' );
/* ---------------------------------------ajout de la description dans menu-------------------------------------------- */

/* --------------------------------------------------Enregistrement du sidebar---------------------------------------- */

function my_register_sidebars() {
    /* Register the 'primary' sidebar. */

    register_sidebar(
        array(
            'id'            => 'entete_1',
            'name'          => __( 'entete 1' ),
            'description'   => __( 'entete 1' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );


    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_1',
            'name'          => __( 'Pied de page colonne 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_2',
            'name'          => __( 'Pied de page colonne 2' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_3',
            'name'          => __( 'Pied de page colonne 3' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'pied_page_ligne_1',
            'name'          => __( 'Pied de page ligne_1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'haut_main_titre',
            'name'          => __( 'haut_main_titre' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    

    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'my_register_sidebars' );

/* ************************************************************************************************** */
function trouve_la_categorie($tableau){
    foreach($tableau as $cle){
        if(is_category($cle)) return($cle);
    }
}
?>
