<?php require_once("../_includes/config.php"); ?>
<?php require_once("../_includes/layout.php"); ?>
<?php require_once("../_includes/utils.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php require_once("../_includes/posts.php"); ?>
<?php require_once("../_includes/components.php"); ?>
<?php
$slug = isset($_GET["slug"]) ? $_GET["slug"] : 1;
$category = get_category_by_slug($slug);
$page_query = empty($category) ? null : get_categories_posts_by_category_id($category["id"]);
$not_found = $page_query == null;
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <?php get_head(); ?>
</head>

<body>
  <?php get_body_header(); ?>
  <main class="page page_tags">
    <? if ($not_found) {
      render_not_found();
    } else {
      ?>
      <h1><?php translate("Posts by Category"); ?>: <strong><?php echo $category["name"]; ?></strong></h1>
      <?php render_post_list($page_query); ?>
      <?php
    }
    ?>
  </main>
  <!-- about section end -->
  <?php get_body_footer(); ?>
  <?php get_js_scripts(); ?>
</body>

</html>