<!-- On ajoute ici un formulaire de recherche qui va chercher tout les articles qui contienent un certain mot. Le formulaire doit avoir la méthode get -->
<form class="form-inline" action="<?php echo get_site_url(); ?>" method="get">
    <!--le name de cette input est "s" pour string afin de rechercher un mot-->
    <input class="form-control" type="text" name="s" id="">
    <button class="btn bg-white ml-3" type="submit"><i class="fa fa-search"></i></button>
</form> 