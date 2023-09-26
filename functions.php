<?php


//teheme suports

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');
//image-size
add_image_size('main',750, 400, true);
add_image_size('carousel',360, 236,true);
add_image_size('sidebar',300, 138,true);
add_image_size('archive' , 360 ,340,true);


//register_menu
register_nav_menus(
    array(
        'top-menu' => "top menu location" ,
        'footer-menu' => 'footer menu location'
    )
);

//register requirements
function load_css(){
    wp_register_style('main-style' , get_template_directory_uri() .'/style.css' ,'','false' ,"all");
    wp_register_style('bootstrap' , get_template_directory_uri() .'/vendors/bootstrap/bootstrap.min.css' ,'','false' ,"all");
    wp_register_style('fontawesome-all' , get_template_directory_uri() .'/vendors/fontawesome/css/all.min.css' , '','false' ,"all");
    wp_register_style('themify-icons' , get_template_directory_uri() .'/vendors/themify-icons/themify-icons.css' , '','false' ,"all");
    wp_register_style('linericon' , get_template_directory_uri() .'/vendors/linericon/style.css' , '','false' ,"all");
    wp_register_style('owl-default' , get_template_directory_uri() .'/vendors/owl-carousel/owl.theme.default.min.css' , '','false' ,"all");
    wp_register_style('owl-carousel' , get_template_directory_uri() .'/vendors/owl-carousel/owl.carousel.min.css' , '','false' ,"all");
    wp_register_style('navbar' , get_template_directory_uri() .'/mystyle/navbar.css' ,'','false' ,"all");
    wp_register_style('index-content' , get_template_directory_uri() .'/mystyle/index-content.css' ,'','false' ,"all");
    wp_register_style('searchForm' , get_template_directory_uri() .'/mystyle/my-searchForm.css' ,'','false' ,"all");
    wp_register_style('pagination' , get_template_directory_uri() .'/mystyle/pagination.css' ,'','false' ,"all");
    wp_register_style('mybuttons' , get_template_directory_uri() .'/mystyle/mybuttons.css' ,'','false' ,"all");
    wp_register_style('footer' , get_template_directory_uri() .'/mystyle/footer.css' ,'','false' ,"all");
    wp_register_style('sidebar' , get_template_directory_uri() .'/mystyle/sidebar.css' ,'','false' ,"all");

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fontawesome-all');
    wp_enqueue_style('themify-icons');
    wp_enqueue_style('linericon');
    wp_enqueue_style('owl-default');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('main-style');
    wp_enqueue_style('navbar');
    wp_enqueue_style('index-content');
    wp_enqueue_style('searchForm');
    wp_enqueue_style('pagination');
    wp_enqueue_style('mybuttons');
    wp_enqueue_style('footer');
    wp_enqueue_style('sidebar');
}
add_action('wp_enqueue_scripts' ,'load_css');

function load_js(){
    wp_deregister_script('jquery');
    wp_register_script('jquery' , get_template_directory_uri() .'/vendors/jquery/jquery-3.2.1.min.js');
    wp_register_script('bootstrap' , get_template_directory_uri() .'/vendors/bootstrap/bootstrap.bundle.min.js','jquery','false',true);
    wp_register_script('owl-carousel' , get_template_directory_uri() .'/vendors/owl-carousel/owl.carousel.min.js','jquery','false',true);
    wp_register_script('ajaxchimp' , get_template_directory_uri() .'/js/jquery.ajaxchimp.min.js','jquery','false',true);
    wp_register_script('mail-script' , get_template_directory_uri() .'/js/mail-script.js','jquery','false',true);
    wp_register_script('main-js' , get_template_directory_uri() .'/js/main.js','jquery','false',true);


    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('ajaxchimp');
    wp_enqueue_script('mail-script');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts' , 'load_js');

function amer_popular_tags()
{
    register_sidebar(
        array(
            'name'=>'popular_tags',
            'id' => 'popular-tags',
            'before_title'=> '<h4 class="single-sidebar-widget__title" >',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init' , 'amer_popular_tags');

function tag_widget_limit($args)
{
    if(isset($args['taxonomy'])&& $args['taxonomy'] == 'post_tag'){
        $args['number'] =3;
    }
    return $args;
}
add_filter('widget_tag_cloud_args' ,'tag_widget_limit');