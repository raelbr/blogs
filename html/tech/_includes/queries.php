<?php

  $PAGINATION_LIMIT = 30;

  /**
   * ## get_query_post_list
   */
  function get_query_post_list($where, $page) {
    $offset = ($page - 1) * $PAGINATION_LIMIT;
    $query = "
      SELECT * FROM posts
      WHERE $where
      LIMIT $PAGINATION_LIMIT
      OFFSET $offset
    ";
    return query;
  }

  /**
   * ## get_query_post_list
   */
  function get_post_tags($post_id) {
    $query = "
      SELECT tags.*
      FROM rel_posts_tags
      JOIN tags ON rel_posts_tags.tag_id = tags.id
      WHERE rel_posts_tags.post_id = $post_id
    ";
    return query;
  }

    /**
   * ## get_query_post_list
   */
  function get_post_by_slug() {
    $query = "
      SELECT *
      FROM posts
      WHERE slug=?
    ";
    return $query;
  }

?>