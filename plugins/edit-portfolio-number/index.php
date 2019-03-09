<?php

class EditPortfolioNumber
{
  public static function init()
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
    add_settings_section('home_portfolio', __('nombre de portfolio affiché'), [self::class, 'section_portfolio'], 'reading');
  }
  /**
 * Fonction callback qui affichera la nouvelle section
 *
 * @return void
 */
  public static function section_portfolio()
  {

    // on récupère la valeur de l'option
    $nombre_portfolio = (get_option('nombre_portfolio_home')) ? get_option('nombre_portfolio_home') : '';
    // on affiche l'input
    ?>
<input type="number" value="<?= $nombre_portfolio; ?>" name="nombre_portfolio_home">
<?php

}
}

add_action('admin_init', [EditPortfolioNumber::class, 'init']);
