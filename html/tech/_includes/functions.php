<?php
require_once("queries.php");


/**
 * get_post_media
 */
function get_post_media($post_id)
{
  $sql = get_post_media_query($post_id);
  $stmt = $GLOBALS["pdo"]->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * ## get_single_post_by_slug
 * returns details of a single post by slug
 */
function get_single_post_by_slug($slug)
{
  $sql = get_post_by_slug();
  $stmt = $GLOBALS["pdo"]->prepare($sql);
  $stmt->execute([$slug]);
  return $stmt->fetch();
}

/**
 * ## get_post_list
 * returns a list of posts based on provided page
 */
function get_post_list($page)
{
  $sql = get_query_post_list("TRUE", $page);
  $sth = $GLOBALS["pdo"]->prepare($sql);
  $sth->execute();
  return $sth->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * ## get_post_list_by_category
 * returns a list of posts based on provided category and page
 */
function get_post_list_by_category($category_id, $page)
{

}

/**
 * ## get_post_tags
 * returns a list of tags by post id
 */
function get_post_tags($post_id)
{
  $sql = get_post_tags_query($post_id);
  $stmt = $GLOBALS["pdo"]->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(\PDO::FETCH_ASSOC);

}

/**
 * ## get_post_list_by_keywords
 * returns a list of posts based on provided keywords and page
 */
function get_post_list_by_keywords($keywords, $page)
{

}

function get_footer_categories()
{
  $sql = get_categories_list_query("TRUE", 15, "count DESC");
  $stmt = $GLOBALS["pdo"]->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(\PDO::FETCH_ASSOC);
}

function get_footer_tags()
{
  $sql = get_tags_list_query("TRUE", 15, "count DESC");
  $stmt = $GLOBALS["pdo"]->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(\PDO::FETCH_ASSOC);
}

function get_tag_by_slug($slug)
{
  $sql = get_tag_by_slug_query();
  $stmt = $GLOBALS["pdo"]->prepare($sql);
  $stmt->execute([$slug]);
  return $stmt->fetch();
}
function get_tag_posts_by_tag_id($id)
{
  $sql = get_tag_posts_by_tag_id_query($id);
  $sth = $GLOBALS["pdo"]->prepare($sql);
  $sth->execute();
  return $sth->fetchAll(\PDO::FETCH_ASSOC);
}

function get_category_by_slug($slug)
{
  $sql = get_category_by_slug_query();
  $stmt = $GLOBALS["pdo"]->prepare($sql);
  $stmt->execute([$slug]);
  return $stmt->fetch();
}
function get_categories_posts_by_category_id($id)
{
  $sql = get_categories_posts_by_category_id_query($id);
  $sth = $GLOBALS["pdo"]->prepare($sql);
  $sth->execute();
  return $sth->fetchAll(\PDO::FETCH_ASSOC);
}

?>