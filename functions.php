<?php

wp_enquene_style("style",get_stylesheet_url());
wp_enquene_style("slider",get_template_diectory_url().'/css/slider.css',false,'1.1','all');

function ds_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', "Primary Navigation");

}

add_action("init", "ds_setup");

wp_nav_menu(array('theme_location'=>'primary'));


?>

<?php 
  add_theme_support('post-thumbnails');

  function themebs_enqueue_styles(){
  wp_enque_style("bootsrap",get_template_directory_uri().'./css/bootsrap.min.css');
  wp_enqueue_style("core",get_template_directory_uri().'./style.css');

  }

  add_action('wp_enqueue_scripts','defino_bs_styles');

  function themebs_scripts(){
    wp_enqueue_script('bootsrap',get_template_uri().'./js/bootsrap.bundle.min.js',
    array("jquery"));
  }

  ad_action("wp_enqueue_scripts""themebs_scripts");


function themename_wigets_init(){
  register_sidebar(array(
   'name'=>_('Primary Sidebar','ds_theme'),
   "id"=>'sidebar-1',
   "before_wiget" =>"<aside id='%1$s' class='wiget %2$s'",
   'after_widget'=>"</aside>",
   'before_title'=>"<h3 class='widget-title'>",
   "after_title"=>"</h3>",
  
   ));

   
function themename_wigets_init(){
  register_sidebar(array(
   'name'=>_('Primary Sidebar','ds_theme'),
   "id"=>'sidebar-1',
   "before_wiget" =>"<aside id='%1$s' class='wiget %2$s'",
   'after_widget'=>"</aside>",
   'before_title'=>"<h3 class='widget-title'>",
   "after_title"=>"</h3>",
  
   ));

}

?>
