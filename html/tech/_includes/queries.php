<?php

$PAGINATION_LIMIT = 30;

function get_post_media_query($post_id)
{
  return "SELECT *
      FROM media
      WHERE post_id = $post_id";
}

/**
 * ## get_query_post_list
 */
function get_query_post_list($where, $page = 1)
{
  $offset = ((int) $page - 1) * 30;
  $limit = $GLOBALS["PAGINATION_LIMIT"];
  $lang = get_lang();
  return "
      SELECT posts.*, categories.name as category_name, categories.slug as category_slug
        FROM posts
        LEFT JOIN categories ON categories.id = posts.category_id AND categories.lang=$lang
        WHERE $where AND posts.lang=$lang
          ORDER BY id DESC
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

function get_categories_list_query($where = "TRUE", $limit = 20, $order_by = "id DESC")
{
  $lang = get_lang();
  return "
      SELECT *
        FROM categories
        WHERE $where AND lang=$lang
        ORDER BY $order_by
        LIMIT $limit
  ";
}

function get_tags_list_query($where = "TRUE", $limit = 20, $order_by = "id DESC")
{
  $lang = get_lang();
  return "
      SELECT *
        FROM tags
        WHERE $where AND lang=$lang
        ORDER BY $order_by
        LIMIT $limit
  ";
}

function get_tag_by_slug_query()
{
  $lang = get_lang();
  return "
    SELECT *
      FROM tags
      WHERE slug=? AND lang=$lang
  ";
}
function get_tag_posts_by_tag_id_query($id)
{
  return "
    SELECT posts.*, categories.name as category_name, categories.slug as category_slug
      FROM posts_tags
      LEFT JOIN posts ON posts_tags.post_id = posts.id
      LEFT JOIN categories ON categories.id = posts.category_id
      WHERE posts_tags.tag_id=$id
  ";
}

function get_category_by_slug_query()
{
  $lang = get_lang();
  return "
    SELECT *
      FROM categories
      WHERE slug=? AND lang=$lang
  ";
}
function get_categories_posts_by_category_id_query($id)
{
  return "
    SELECT posts.*, categories.name as category_name, categories.slug as category_slug
      FROM posts
      LEFT JOIN categories ON categories.id = posts.category_id
      WHERE posts.category_id=$id
  ";
}

?>