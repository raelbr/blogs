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
    <div class="row">
      <?php foreach (get_post_list($page) as $post) { ?>
        <article class="post col-md-6">
          <section class="post-image">
            <img
              src="https://media.licdn.com/dms/image/C5612AQFjboZ3ggD-uQ/article-cover_image-shrink_600_2000/0/1645833122523?e=2147483647&v=beta&t=wgkobzY0jiOe6Dm4s_fnLRKH7IVv3SgxCbwrpsb6a_s" />
          </section>
          <header>
            <h1 class="post_h1"><?php echo $post["title"]; ?></h1>
          </header>
          <main>
            <?php echo $post["content"]; ?>
          </main>
        </article>
      <? } ?>
    </div>
  </main>
  <!-- about section end -->
  <?php get_body_footer(); ?>
  <?php get_js_scripts(); ?>
</body>

</html>