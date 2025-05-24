<?php
declare(strict_types=1);
// Erors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require("./templates.php");
sl_template_render_header();
?>

<div class="root">
  <?php sl_template_render_sidebar(); ?>

  <main class="main-container">
    <?php sl_template_render_main_header() ?>
    <div class="content-after-main-header">
      <?php render_tool_page() ?>
</div>
<?php sl_template_render_footer(); ?>
  </main>
</div>

<script src="assets/js/main.js"></script>
</body>
</html>
