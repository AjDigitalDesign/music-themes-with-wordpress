<?php
/**
 * default search form
 */
?>


<div class="search-box-area">
    <div class="sec-title-four">
        <h6>Find in Site</h6>
    </div>
    <!-- Search -->
    <form method="get" id="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="form-group">
            <label class="sr-only" for="exampleInputAmount"><?php _e( 'Search for:', 'presentation' ); ?></label>
            <input type="search" placeholder="<?php echo esc_attr( 'Search…', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
        </div>
    </form>
</div>

