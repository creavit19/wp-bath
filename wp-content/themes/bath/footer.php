<footer>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="valign-wrapper">
          <div class="footer-logo">
            <img src="<?php echo THEME_DIR_URI.'/dist/images/'?>QA-Logo-Navy.png">
          </div>
          <div class="social-icons">
            <?php 
              $networks = get_field('social_networks', 'options');
              foreach($networks as $network){
                echo '<a href="'.$network['link_network'].'" target="_blank"><i class="fa fa-'.$network['icon'].'" aria-hidden="true"></i></a>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>   
</body>
</html>
