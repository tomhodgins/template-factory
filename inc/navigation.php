<!-- Nav -->
<nav data-nav>
  <a href="<?php echo $site; ?>" class=brand>The Template Factory</a>
  <input type=checkbox id=menu>
  <label for=menu><span>≡</span></label>
  <!-- Menu Loop -->
  <input type=radio name=topNav id=themes>
  <label for=themes>
    <span>Themes</span>
    <div>
      <a href=<?php echo $site; ?>/themes/default.php>Default Theme</a>
      <a href=<?php echo $site; ?>/themes/dark.php>Dark Theme</a>
      <a href=<?php echo $site; ?>/themes/code.php>Code Theme</a>
      <a href=<?php echo $site; ?>/themes/book.php>Book Theme</a>
      <a href=<?php echo $site; ?>/themes/green.php>Green Style</a>
      <a href=<?php echo $site; ?>/themes/swiss.php>Swiss Style</a>
      <a href=<?php echo $site; ?>/themes/rfi.php>RFI Style</a>
    </div>
  </label>
  <input type=radio name=topNav id=plugins>
  <label for=plugins>
    <span>Plugins</span>
    <div>
      <a href=<?php echo $site; ?>/plugins/form>Order Form</a>
      <a href=<?php echo $site; ?>/plugins/video-scaling>Video Scaling</a>
      <a href=<?php echo $site; ?>/plugins/notifications>Notifications</a>
      <a href=<?php echo $site; ?>/plugins/tooltips>Tooltips</a>
      <a href=<?php echo $site; ?>/plugins/tables>Responsive Tables</a>
      <a href=<?php echo $site; ?>/plugins/modals>Reponsive Modals</a>
      <a href=<?php echo $site; ?>/plugins/buttons>Buttons</a>
      <a href=<?php echo $site; ?>/plugins/nav>Responsive Nav</a>
    </div>
  </label>
  <!-- /Menu Loop -->
  <input type=radio name=topNav id=reset>
  <label for=reset></label>
</nav>