<?php

$PAGINATION_LIMIT = 30;

/**
 * ## get_query_post_list
 */
function get_query_post_list($where, $page)
{
  $offset = ($page - 1) * $GLOBALS["PAGINATION_LIMIT"];
  $limit = $GLOBALS["PAGINATION_LIMIT"];
  $lang = get_lang();
  return "
      SELECT posts.*, categories.name as category_name, categories.slug as category_slug
        FROM posts
        LEFT JOIN categories ON categories.id = posts.category_id AND categories.lang=$lang
        WHERE $where AND posts.lang=$lang
          LIMIT $limit
          OFFSET $offset
    ";
}

/**
 * ## get_post_tags_query
 */
function get_post_tags_query($post_id)
{
  $lang = get_lang();
  return "
      SELECT tags.*
      FROM posts_tags
      JOIN tags ON posts_tags.tag_id = tags.id AND tags.lang=$lang
      WHERE posts_tags.post_id = $post_id
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