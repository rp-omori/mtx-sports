<?php
$rootDir = get_template_directory_uri();
?>
<?php wp_footer(); ?>
    <footer class="footer">
      <div class="footer__inner">
        <div class="footer__logo">
          <a href="/" class="footer__logo-link">
            <img src="<?php echo $rootDir ?>/images/logo--white.svg" alt="">
          </a>
        </div>
        <div class="footer__copyright">
          <small>Copyright © 2022 MTXスポーツ・関節CLINIC.All Rights Reserved.</small>
        </div>
      </div>
    </footer>
</div>
<script src="<?php echo $rootDir ?>/js/index.js"></script>
</body>
</html>
