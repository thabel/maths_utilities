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

<article class="contact-article">
  <h2>📬 Contact Me</h2>
  <p>
    Got a question, found a bug, or want to collaborate? I'd love to hear from you!
    Just fill out the form below and I'll get back to you as soon as possible.
  </p>

  <form action="contact_handler.php" method="post" class="contact-form">
    <div class="form-group">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" required placeholder="e.g. Jane Doe">
    </div>

    <div class="form-group">
      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email" required placeholder="e.g. jane@example.com">
    </div>

    <div class="form-group">
      <label for="message">Your Message:</label>
      <textarea id="message" name="message" rows="6" required placeholder="Type your message here..."></textarea>
    </div>

    <button type="submit">Send Message</button>
  </form>
</article>

</div>
<?php sl_template_render_footer(); ?>

  </main>
</div>

</body>
</html>