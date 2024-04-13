<section id="footer">
  <div class="container">
    <ul class="copyright">
      <li>&copy; Untitled. All rights reserved.</li>
      <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
  </div>
</section>

</div>
<?php wp_footer(); ?>
      <?php 
      $scripts = array(
        'jquery' => 'assets/js/jquery.min.js',
        'scrollex' => 'assets/js/jquery.scrollex.min.js',
        'scrolly' => 'assets/js/jquery.scrolly.min.js',
        'browser' => 'assets/js/browser.min.js',
        'breakpoints' => 'assets/js/breakpoints.min.js',
        'util' => 'assets/js/util.js',
        'main' => 'assets/js/main.js'
      );
      foreach ($scripts as $nombre => $script) : ?>
        <script src="<?php echo get_template_directory_uri() . '/' . $script; ?>"></script>
      <?php endforeach; ?>
</body>

</html>