<?php 

function rev_theme_support(){
    //adicionar suporte a post-thumbnails
    add_theme_support('post-thumbnails');
    //chamar a tag title 
    add_theme_support('title-tag');
     //adicionar o logotipo
     add_theme_support('custom-logo');
}
add_action('after_setup_theme','rev_theme_support');

if(!function_exists('_wp_render_title_tag')){
    function rev_render_title(){
        ?>
        <title><?php wp_title(' | ',true,'right');  ?></title>
        <?php
    }
    add_action('wp_head','rev_render_title');
}
//mostra o custom navibar walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Criar o tipo de post para o banner
function create_post_type(){
    register_post_type('banners',
        //definir as opcoes
        array(
            'labels' => array(
                'name' => __('Banners'), 
                'singular_name' => __('Banners')   
            ),
            'supports' => array(
                'title' , 'editor', 'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array('slug' => 'banners'),
        )
    );
    
}

//iniciar tipo de post
add_action('init', 'create_post_type');

//registra os menus
register_nav_menus(array(
    'principal' => __('Menu principal','rev')
));
?>