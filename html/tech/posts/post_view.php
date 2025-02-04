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
$tags = get_post_tags($post["id"]);
$tagNames = array_map(fn($tag) => $tag['name'], $tags);
$keywords = implode(', ', $tagNames);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <?php get_head($post["title"], $keywords, $post["description"]); ?>
</head>

<body>
  <?php get_body_header(); ?>
  <div class="container post">
    <article class="col-md-9">
      <section class="post-image">
        <img src="<?php echo $post["thumbnail"]; ?>" />
      </section>
      <header>
        <h1 class="post_h1"><?php echo $post["title"]; ?></h1>
        <div class="header_infos">
          <span class="post-date"><?php echo format_date_only($post["created_at"]); ?></span>
          <a
            href="<?php echo $GLOBALS["root"] . "/category/" . $post["category_slug"]; ?>"><?php echo $post["category_name"]; ?></a>
        </div>
      </header>
      <main>
        <?php echo $post["content"]; ?>
        <?php if (!is_null($post["source_url"])) { ?>
          <div class="post-source">
            <p><strong>Source: </strong><a href="<?php echo $post["source_url"] ?>"><?php echo $post["source_name"] ?></a>
            </p>
          </div>
        <?php } ?>
      </main>
      <footer>
        <strong>Tags:</strong>
        <ul class="post-tags">
          <?php foreach ($tags as $tag) { ?>
            <li>
              <a href="<?php $GLOBALS["root"]; ?>/tag/<?php echo $tag["slug"]; ?>">
                <?php echo $tag["name"]; ?>
              </a>
            </li>
          <?php } ?>
        </ul>
      </footer>
    </article>
  </div>
  <?php get_body_footer(); ?>
  <?php get_js_scripts(); ?>
</body>

</html>