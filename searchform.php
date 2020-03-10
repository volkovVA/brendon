<form role="search" <?php $aria_label ?>method="get" id="searchform" class="searchform" action="<?php esc_url( home_url( '/' ) ) ?>">
    <div class="search-form  fullwidth">
        <div class="form-group">
            <input type="text" value="<?php get_search_query() ?>" name="key" id="s" placeholder="Enter keyword" class="form-control" />
            <input class="btn btn-search" type="submit" id="searchsubmit" value="<?php esc_attr_x( 'Search', 'submit button' ) ?>" />
        </div>
    </div>
</form>