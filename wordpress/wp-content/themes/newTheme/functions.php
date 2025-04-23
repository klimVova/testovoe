<?php


add_action('wp_enqueue_scripts', 'newTheme_scripts');
add_action('widgets_init', 'newTheme_register');
add_action('after_setup_theme', 'newTheme');

function newTheme_scripts()
{           
    wp_enqueue_script('js', _newTheme_assets_path('js/main.js'), [], '1.0', true);
    wp_enqueue_script('wow', _newTheme_assets_path('lib/wow/wow.min.js'), [], '1.0', true);
    wp_enqueue_script('easing', _newTheme_assets_path('lib/easing/easing.min.js'), [], '1.0', true);
    wp_enqueue_script('waypoints', _newTheme_assets_path('lib/waypoints/waypoints.min.js'), [], '1.0', true);
    wp_enqueue_script('counterup', _newTheme_assets_path('lib/counterup/counterup.min.js'), [], '1.0', true);
    wp_enqueue_script('owlcarousel', _newTheme_assets_path('lib/owlcarousel/owl.carousel.min.js'), [], '1.0', true);
    wp_enqueue_script('tempusdominus', _newTheme_assets_path('lib/tempusdominus/js/moment.min.js'), [], '1.0', true);
    wp_enqueue_script('timezone', _newTheme_assets_path('lib/tempusdominus/js/moment-timezone.min.js'), [], '1.0', true);
    wp_enqueue_script('bootstrap', _newTheme_assets_path('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'), [], '1.0', true);
    wp_enqueue_style('style', _newTheme_assets_path('css/style.css'), [], '1.0', 'all');
    wp_enqueue_style('bootstrap', _newTheme_assets_path('css/bootstrap.min.css'), [], '1.0', 'all');
    wp_enqueue_style('animate', _newTheme_assets_path('lib/animate/animate.min.css'), [], '1.0', 'all');
    wp_enqueue_style('owlcarousel', _newTheme_assets_path('lib/owlcarousel/assets/owl.carousel.min.css'), [], '1.0', 'all');
    wp_enqueue_style('tempusdominus', _newTheme_assets_path('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'), [], '1.0', 'all');

}


add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);
add_filter('nav_menu_css_class', 'add_class_li', 10, 3);
function add_class_li($classes, $item, $args)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}

function add_anchor_class($attr, $item, $args)
{
    if (isset($args->a_class)) {
        $attr['class'] = $args->a_class;
    }
    return $attr;
}
function _newTheme_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}
acf_add_options_page(array(
  'page_title'     => 'Theme General Settings',
  'menu_title'    => 'Theme Settings',
  'menu_slug'     => 'theme-general-settings',
  'capability'    => 'edit_posts',
  'redirect'        => false
));
acf_add_options_sub_page(array(
    'page_title'     => 'Theme Header Settings',
    'menu_title'    => 'Header',
    'parent_slug'    => 'theme-general-settings',
));

acf_add_options_sub_page(array(
    'page_title'     => 'Theme Footer Settings',
    'menu_title'    => 'Footer',
    'parent_slug'    => 'theme-general-settings',
));
acf_add_options_sub_page(array(
    'page_title'     => 'Theme Menu Mobile Settings',
    'menu_title'    => 'Mobile menu',
    'parent_slug'    => 'theme-general-settings',
));



  function newTheme_register()
{
    register_sidebar([
        'name' => 'Сайдбар для переключения языков',
        'id' => 'newTheme-lang',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Сайдбар для переключения языков мобильный',
        'id' => 'newTheme-lang-mob',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Cайдбар в основном меню для телефона',
        'id' => 'newTheme-tel',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Cайдбар в основном меню для почты',
        'id' => 'newTheme-email',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Cайдбар футер',
        'id' => 'newTheme-footer',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Cайдбар футер_разработка',
        'id' => 'newTheme-footer_dev',
        'before_widget' => null,
        'after_widget'  => null
      ]);
}

function newTheme()
{
  register_nav_menu('menu-header', 'меню в шапке');
  register_nav_menu('menu-fotter-service',    'меню в футоре услуги');
  register_nav_menu('menu-fotter-quick', 'меню в футоре cсылки');

  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support( 'menus');
}