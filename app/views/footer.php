<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; <?php echo $site['name'] . ' ' . date('Y') ?></p>
  </div>
  <!-- /.container -->
</footer>

<?php
  // Bootstrap core JavaScript
  echo script_tag('assets/js/jquery.min.js');
  echo script_tag('assets/js/bootstrap.bundle.min.js');
  // Custom scripts for all pages
  if(!empty($scripts)) {
    foreach($scripts as $script) {
      echo script_tag(sprintf('assets/js/%s.js', $script));
    }
  }
?>
</body>

</html>
