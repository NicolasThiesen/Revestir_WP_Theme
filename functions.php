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
                'name' => _x('Banners', "Banners para o slide", "Tintas Revestir"), 
                'singular_name' => _x('Banners', "Banners para o slide", "Tintas Revestir"),
                "menu_name" => __("Banners", "Tintas Revestir"),
                "all_items" => __("Todos os Banners", "Tintas Revestir"),
                "view_item" => __("Ver Banner", "Tintas Revestir"),
                "add_new_item" => __("Adicionar um novo Banner", "Tintas Revestir"),
                "edit_item" => __("Editar Banner", "Tintas Revestir"),
                "update_item" => __("Atualizar Banner", "Tintas Revestir")   
            ),
            "label" => __("banners", "Tintas Revestir"),
            'supports' => array(
                'title' , 'editor', 'thumbnail', "custom-fields"
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array('slug' => 'banners'),
            "hierarchical" => false,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menu" => true,
            "show_in_admin_bar" => true,
            "publicy_queryble" => true,
            "capability_type" => "post"
        )
    );
    
}

//Criar o tipo de post para o banner de produtos
function create_products_banners(){
    register_post_type('products banners',
        //definir as opcoes
        array(
            'labels' => array(
                'name' => _x('Products Banners', "Products Banners", "Tintas Revestir"), 
                'singular_name' => _x('Products Banners', "Products Banners para o slide", "Tintas Revestir"),
                "menu_name" => __("Products Banners", "Tintas Revestir"),
                "all_items" => __("Todos os Products Banners", "Tintas Revestir"),
                "view_item" => __("Ver Banner", "Tintas Revestir"),
                "add_new_item" => __("Adicionar um novo Banner", "Tintas Revestir"),
                "edit_item" => __("Editar Banner", "Tintas Revestir"),
                "update_item" => __("Atualizar Banner", "Tintas Revestir")   
            ),
            "label" => __("products banners", "Tintas Revestir"),
            'supports' => array(
                'title' , 'editor', 'thumbnail', "custom-fields"
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'rewrite' => array('slug' => 'products banners'),
            "hierarchical" => false,
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menu" => true,
            "show_in_admin_bar" => true,
            "publicy_queryble" => true,
            "capability_type" => "post"
        )
    );
    
}

//iniciar tipo de post
add_action('init', 'create_post_type');

add_action("init", "create_products_banners");

//registra os menus
register_nav_menus(array(
    'principal' => __('Menu principal','rev')
));
?>

