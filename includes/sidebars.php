<?php

class MgWidgetRegister
{
  public static function register()
  {
    register_sidebar(array(
      'name'          => __('Footer colonne gauche'),
      'id'            => 'footer-left',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="text-uppercase mb-4">',
      'after_title'   => '</h4>',
    ));
    register_sidebar(array(
      'name'          => __('Footer colonne droite'),
      'id'            => 'footer-right',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="text-uppercase mb-4">',
      'after_title'   => '</h4>',
    ));
  }
}
add_action('widgets_init', [MgWidgetRegister::class, 'register']);
