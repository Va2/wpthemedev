<?php

class MgThemeSetup
{
  /**
   * Ajout la fonctionnalité d'un ajout d'image pour les posts pour ce thème ci
   *
   * @return void
   */
  public static function ajout_image_article()
  {
  //Ajout de la fonctionnalité d'ajout d'image pour les posts pour ce thème ci
    add_theme_support('post-thumbnails');
  }
}

// Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
add_action('init', [MgThemeSetup::class, 'ajout_image_article']);

