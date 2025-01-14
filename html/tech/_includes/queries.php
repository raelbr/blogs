<?php

$PAGINATION_LIMIT = 30;

/**
 * ## get_query_post_list
 */
function get_query_post_list($where, $page)
{
  $offset = ($page - 1) * $GLOBALS["PAGINATION_LIMIT"];
  $limit = $GLOBALS["PAGINATION_LIMIT"];
  return "
      SELECT posts.*, categories.name as category_name, categories.slug as category_slug
        FROM posts
        LEFT JOIN categories ON categories.id = posts.category_id
        WHERE $where
          LIMIT $limit
          OFFSET $offset
    ";
}

/**
 * ## get_query_post_list
 */
function get_post_tags($post_id)
{
  return "
      SELECT tags.*
      FROM rel_posts_tags
      JOIN tags ON rel_posts_tags.tag_id = tags.id
      WHERE rel_posts_tags.post_id = $post_id
    ";
}

/**
 * ## get_query_post_list
 */
function get_post_by_slug()
{
  $query = "
    SELECT posts.*, categories.name as category_name, categories.slug as category_slug
      FROM posts
      LEFT JOIN categories ON categories.id = posts.category_id
      WHERE posts.slug = ?
  ";
  return $query;
}

?>