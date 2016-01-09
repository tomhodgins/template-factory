<aside data-modal=<?php echo $modal; ?>>
  <article>
    <button data-close onclick=destroyModal('<?php echo $modal; ?>')>&times;</button>
    <?php include("../../inc/modals/" . $modal . ".php") ?>
  </article>
  <span data-overlay onclick=destroyModal('<?php echo $modal; ?>')></span>
</aside>