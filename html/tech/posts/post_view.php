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
$media_list = get_post_media($post['id']);
$main_image = "";
$post_images = array();
$post_videos = array();
foreach ($media_list as $media) {
  if ($media["type"] == 1) {
    if ($media["pos"] == 1) {
      $main_image = $media["value"];
    } else {
      $post_images[] = (object) [
        'src' => $media["value"],
        'thumbnail' => $media['thumbnail']
      ];
    }
  }
  if ($media["type"] == 2) {
    $post_videos[] = $media["value"];
  }
}
$videos_count = count($post_videos);
$images_count = count($post_images);
$has_videos = $videos_count > 0;
$has_images = $images_count > 0;
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
      <?php if (!empty($main_image)) { ?>
        <figure class="post-image">
          <img src="<?php echo $GLOBALS['imagePath'] . $main_image; ?>" />
        </figure>
      <?php } ?>
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

        <?php if ($has_images) { ?>
          <div role="images" data-type="image" class="post_gallery">
            <h4><?php echo $images_count; ?>   <?php translate($images_count == 1 ? "Image" : "Images"); ?>
              <?php translate("of"); ?>   <?php echo $post["subject"]; ?>:
              <div class="post-image-gallery-wrapper" id="post-image-gallery">
                <?php foreach ($post_images as $image) { ?>
                  <a href="<?php echo $GLOBALS['imagePath']; ?><?php echo $image->src; ?>">
                    <img width="180" src="<?php echo $GLOBALS['imagePath']; ?><?php echo $image->thumbnail; ?>" />
                  </a>
                <?php } ?>
              </div>
            </h4>
          </div>
        <?php } ?>

        <?php if ($has_videos) { ?>
          <div role="gallery" data-type="video" class="post_gallery">
            <h4><?php echo $videos_count; ?>   <?php translate($videos_count == 1 ? "Video" : "Videos"); ?>
              <?php translate("of"); ?>   <?php echo $post["subject"]; ?>:
            </h4>
            <ul>
              <?php foreach ($post_videos as $video) { ?>
                <li>
                  <div class="post-video-container">
                    <iframe width="100%" height="100%" src="<?php echo $video; ?>" frameborder="0"
                      allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>
        <?php } ?>

        <?php if (!is_null($post["source_url"])) { ?>
          <div class="post-source">
            <p><strong>Source: </strong><a href="<?php echo $post["source_url"] ?>"><?php echo $post["source_name"] ?></a>
            </p>
          </div>
        <?php } ?>

      </main>
      <footer>
        <strong>Tags:</strong>
        <li class="post-tags">
          <?php foreach ($tags as $tag) { ?>
            <a href="<?php $GLOBALS["root"]; ?>/tag/<?php echo $tag["slug"]; ?>">
              <?php echo $tag["name"]; ?>
            </a>
          <?php } ?>
        </li>
      </footer>
    </article>
  </div>
  <?php get_body_footer(); ?>
  <?php get_js_scripts(); ?>
</body>

<?php if ($has_images) { ?>
  <script>
    lightGallery(document.getElementById("post-image-gallery"), {
      thumbnail: true,
    });
  </script>
<?php } ?>

</html>