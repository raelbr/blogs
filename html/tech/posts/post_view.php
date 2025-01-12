<?php require_once("../_includes/config.php"); ?>
<?php require_once("../_includes/layout.php"); ?>
<?php require_once("../_includes/utils.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php
if (!isset($_GET["slug"])) {
  die("Can't find informations about the post");
}
$post_slug = parse_get(var: 'slug');
$post = get_single_post_by_slug(slug: $post_slug);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <?php get_head(); ?>
</head>

<body>
  <?php get_body_header(); ?>
  <div class="container">
    <div class="row">
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
    </div>
  </div>
  <!-- about section end -->
  <?php get_body_footer(); ?>
  <?php get_js_scripts(); ?>
</body>

</html>