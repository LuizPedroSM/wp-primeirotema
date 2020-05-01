<form action="<?php echo esc_url( home_url('/') );?>" method="get" role="search" class="search-form">
    <input type="search" name="s" id="s" value="<?php the_search_query();?>" />
    <input type="submit" value="Buscar" />
</form>