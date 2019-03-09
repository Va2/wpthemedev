<?php

// Pour ne pas avoir de fichier contenant trop de ligne de code nous allons repartir le tout dans des fichiers spécifiques afin de rendre le tout plus lisible.
// Nous découvrons ici la function require_once() de php qui nous permet d'importer des fichiers
// Nous découvrons également la fonction get_template_directory() qui renvoi le chemin du dossier du thème actif sur (à ne pas confondre avec get_template_directory_uri() qui renvoi une url) 

// nous utilisons le fonction define() de php pour nous facilité l'écriture et pouvoir utiliser un Constante global
define('INCLUDE_DIR', get_template_directory() . "/includes");
require_once(INCLUDE_DIR . '/enqueue-script.php');

require_once(INCLUDE_DIR . '/menu.php');

require_once(INCLUDE_DIR . '/theme-setup.php');

require_once(INCLUDE_DIR . '/customizer.php');

require_once(INCLUDE_DIR . '/sidebars.php');


//Ajout d'une section pour lecture
function ajout_section_lecture()
{
  // Enregistrement d'une option
  // le premier argument est le nom de la page qui va contenir cette option
  // le second argument est le nom de l'option qui sera également le name de l'input
  register_setting('reading', 'nombre_portfolio_home');

  // Ajout d'une section dans une page
  /**
   * premier argument est l'id (slug)
   * deuxième argument est le titre de la section
   * troisième argument est le nom de la fonction callback
   * Quatrième argument est le slug de la page qui affichera cette section
   */
  add_settings_section('home_portfolio', __('nombre de portfolio affiché'), 'section_portfolio', 'reading');
}
/**
 * Fonction callback qui affichera la nouvelle section
 *
 * @return void
 */
function section_portfolio()
{

  // on récupère la valeur de l'option
  $nombre_portfolio = (get_option('nombre_portfolio_home')) ? get_option('nombre_portfolio_home') : '';
  // on affiche l'input
  ?>
<input type="number" value="<?= $nombre_portfolio; ?>" name="nombre_portfolio_home">
<?php

}

add_action('admin_init', 'ajout_section_lecture');
