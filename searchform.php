<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
    <div class="search-form  fullwidth">
        <div class="form-group">
            <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Enter keyword" class="form-control" />
            <input class="btn btn-search" type="submit" id="searchsubmit" value="Найти" />
        </div>
    </div>
</form>