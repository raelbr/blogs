<?php
  require_once("queries.php");

  /**
   * ## get_single_post_by_slug
   * returns details of a single post by slug
   */
  function get_single_post_by_slug($slug){
    // $sql = $GLOBALS["pdo"]->query(get_post_by_slug($slug));
    // $stmt = $GLOBALS["pdo"]->prepare($sql);

    $sql = get_post_by_slug();
    $stmt = $GLOBALS["pdo"]->prepare($sql);
    $stmt->execute([$slug]);
    return $stmt->fetch();
  }

  /**
   * ## get_post_list
   * returns a list of posts based on provided page
   */
  function get_post_list($page){
    
  }

  /**
   * ## get_post_list_by_category
   * returns a list of posts based on provided category and page
   */
  function get_post_list_by_category($category_id, $page){
    
  }

  /**
   * ## get_post_list_by_tag
   * returns a list of posts based on provided tag and page
   */
  function get_post_list_by_tag($category_id, $page){
    
  }

  /**
   * ## get_post_list_by_keywords
   * returns a list of posts based on provided keywords and page
   */
  function get_post_list_by_keywords($keywords, $page){
    
  }

?>