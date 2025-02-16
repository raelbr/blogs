<?php
function render_post_list($post_query)
{
  $pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
  $parsedPg = is_numeric($pg) ? $pg : 1;
  $next_page = $parsedPg + 1;
  $previous_page = $parsedPg - 1;
  $has_previous = $parsedPg > 1;
  ?>
  <div class="container post-list">
    <div class="row">
      <?php foreach ($post_query as $post) { ?>
        <a href="<?php echo $GLOBALS["root"] . '/post/' . $post["slug"]; ?>" class="post-item col-md-12 col-lg-6">
          <?php if (!empty($post['thumbnail'])) { ?>
          <section class="post-image">
            <img src="<?php echo $GLOBALS['imagePath']; ?><?php echo $post['thumbnail'] ?>" />
          </section>
          <?php } ?>
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
    <nav role="pagination" class="post-list-pagination">
      <a class="pagination_previous_bt<?php echo $has_previous ? ' hidden' : '';?>" href="<?php echo $has_previous ? "?pg=$previous_page" : '#'; ?>"><?php translate("Previous Page"); ?></a>        
      <a class="pagination_next_bt" href="<?php echo "?pg=$next_page"; ?>"><?php translate("Next Page"); ?></a>        
    </nav>
  </div>
  <?php
}
?>