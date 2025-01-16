<?php require_once("../_includes/config.php"); ?>
<?php require_once("../_includes/layout.php"); ?>
<?php require_once("../_includes/utils.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php
$page = isset($_GET["slug"]) ? $_GET["slug"] : 1;
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <?php get_head(); ?>
</head>

<body>
  <?php get_body_header(); ?>
  <main class="home">
    <div class="container post-list">
      <?php foreach (get_post_list($page) as $post) { ?>
        <a href="<?php echo $GLOBALS["root"] . '/post/' . $post["slug"]; ?>" class="post-item col-md-6">
          <section class="post-image">
            <img src="<?php echo $post['thumbnail'] ?>" />
          </section>
          <section class="post-content">
            <span class="post-item-category"><?php echo $post["category_name"] ?></span>
            <div class="post-item-title">
              <h3><?php echo $post["title"]; ?></h3>
            </div>
            <p class="post-description"><?php echo $post["description"]; ?></p>
            <span class="post-item-date">posted on <?php echo format_date_only($post["created_at"]); ?></span>
          </section>
        </a>
      <? } ?>
    </div>
  </main>
  <!-- about section end -->
  <?php get_body_footer(); ?>
  <?php get_js_scripts(); ?>
</body>

</html>