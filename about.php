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

<article class="about-article">
  <h2>About This Project</h2>
  <p>
    <strong>Maths Utilities Tools</strong> is a growing collection of web-based tools designed to simplify and visualize key concepts in number theory and discrete mathematics.
  </p>

  <p>
    Whether you're solving modular equations, computing GCDs, or exploring prime numbers, this platform offers clean interfaces and robust logic to support your learning or teaching.
  </p>

  <h3>👨‍💻 About the Developer</h3>
  <p>
    Hi! I'm <strong>KUADJOVI Thabel</strong>, a final-year engineering student at HESTIM in Morocco, specializing in AI, Big Data, and Cybersecurity. I'm passionate about creating intelligent, accessible, and educational tools to make math more enjoyable for everyone.
  </p>

  <p>
    This site was built from the ground up using PHP, JavaScript, and modern web design principles. All tools are optimized for accuracy and learning value.
  </p>

  <h3>🎯 Mission</h3>
  <p>
    My goal is to provide a helpful and free environment for students, teachers, and enthusiasts to interactively explore mathematical ideas.
  </p>

  <h3>💡 Features</h3>
  <ul>
    <li>🧮 Chinese Remainder Theorem Solver</li>
    <li>➗ GCD & LCM Tools</li>
    <li>🔢 Prime Number Utilities</li>
    <li>🧠 Clear Explanations and Live Results</li>
    <li>📚 More modules coming soon!</li>
  </ul>

  <h3>🤝 Contributions</h3>
  <p>
    I'm always open to feedback and collaboration. If you’d like to contribute, you can visit my 
    <a href="https://github.com/thabel" target="_blank">GitHub</a> or contact me at <a href="mailto:thabelkodjo@gmail.com">thabelkodjo@gmail.com</a>.
  </p>
</article>

</div>
<?php sl_template_render_footer(); ?>

  </main>
</div>

</body>
</html>