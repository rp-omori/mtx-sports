<form role="search" method="get" class="search-form search-box" action="<?php echo home_url( '/column/#column__search-area-body' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-box__input" placeholder="<?php echo esc_attr_x( 'キーワードで検索', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <button type="submit" class="search-box__button"><img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-search.svg" alt=""></button>
</form>
