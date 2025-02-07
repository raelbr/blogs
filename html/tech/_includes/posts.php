<?php
function render_post_list($post_query)
{
  ?>
  <div class="container post-list">
    <div class="row">
      <?php foreach ($post_query as $post) { ?>
        <a href="<?php echo $GLOBALS["root"] . '/post/' . $post["slug"]; ?>" class="post-item col-md-12 col-lg-6">
          <section class="post-image">
            <img src="<?php echo $GLOBALS['imagePath']; ?><?php echo $post['thumbnail'] ?>" />
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
  </div>
  <?php
}
?>