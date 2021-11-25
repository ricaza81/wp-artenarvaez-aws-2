<div class="sidebar-item search">
    <div class="sidebar-info">
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type='search' name="s" placeholder="<?php esc_attr_e( 'Search Here...', 'tanda' )?>" class="form-control" id="search-box" value="<?php the_search_query(); ?>" >
	        <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>