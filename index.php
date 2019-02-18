<?php 
//https://developer.wordpress.org/themes/basics/template-files/#using-template-files

// on séparer le header dans un fichier seul pour que toutes les pages puisse l'utiliser et qu'il ne faille modifier le header qu'à un seul endroit.
get_header();

//Ajout du header
get_template_part('templates/banner');

//Ajout de la section portfolio
get_template_part('templates/portfolio');

//Ajout de la section about
get_template_part('templates/about');

//Ajout de la section contact
get_template_part('templates/contact');

// https://developer.wordpress.org/themes/basics/template-files/#using-template-files
// Ajout d'un fichier footer.php pour y mettre le footer
get_footer();

?>