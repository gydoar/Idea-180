<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="formubusca" />
<input type="submit" id="searchsubmit" value="<?php _e('Buscar'); ?>" class="formuboton"/>
</form>
