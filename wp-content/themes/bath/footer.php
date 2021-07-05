
        <footer class="col s12">
          <nav class="nav-footer">
            <?php
            if ( has_nav_menu( 'footer_menu' ) ) :
              wp_nav_menu(
                [
                  'theme_location' => 'footer_menu',
                  'menu_id'        => 'footer-menu',
                  'walker'         => new beetroot_navwalker(),
                ]
              );
            endif;
            ?>
          </nav>
        </footer>

      <?php wp_footer(); ?>
    </div><!-- .row -->
</div><!-- .container -->
</body>
</html>
