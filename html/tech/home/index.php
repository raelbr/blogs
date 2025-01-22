<?php require_once("../_includes/config.php"); ?>
<?php require_once("../_includes/layout.php"); ?>
<?php require_once("../_includes/utils.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php require_once("../_includes/posts.php"); ?>
<?php
$page = isset($_GET["pg"]) ? $_GET["pg"] : 1;
$page_query = get_post_list($page);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <?php get_head(); ?>
</head>

<body>
  <?php get_body_header(); ?>
  <main class="home">
    <?php render_post_list($page_query); ?>
  </main>
  <!-- about section end -->
  <?php get_body_footer(); ?>
  <?php get_js_scripts(); ?>
</body>

</html>