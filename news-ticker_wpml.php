<?php
add_filter('category-filter', 'wpml_category_filter', 10, 1);
add_filter('ticker-recent-comments', 'wpml_ticker_recent_comments', 10, 1);

function wpml_category_filter($cat_filter) {
    global $sitepress;
    if (defined('ICL_SITEPRESS_VERSION') && function_exists('icl_object_id') && is_array($cat_filter)) {
        foreach ($cat_filter as $key => $cat)
            $cat_filter[$key] = icl_object_id($cat, 'category', true, $sitepress->get_current_language());
    }
    return $cat_filter;
}

function wpml_ticker_recent_comments($sql) {
    global $wpdb, $sitepress;
    if (defined('ICL_SITEPRESS_VERSION')) {
        $sql = str_replace("WHERE ", " LEFT OUTER JOIN {$wpdb->prefix}icl_translations ON ($wpdb->comments.comment_post_ID = {$wpdb->prefix}icl_translations.element_id) WHERE ", $sql);
        $sql = str_replace("ORDER ", " AND language_code='" . $sitepress->get_current_language() . "' ORDER ", $sql);
    }
    return $sql;
}

?>
