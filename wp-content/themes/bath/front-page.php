<?php get_template_part( 'template-parts/header', 'landing' ); 
      $acf_fields = get_field('pictures');
?>

        <div class="col s12">
          <div class="slider1-block">
            <div class="center-align slider1-docket">
              Here's what you could win:
            </div>
            <div class="slider-wrapper relative">
              <div class="carousel carousel-slider" id="main-slider">
                <?php foreach($acf_fields as $acf_field){ ?>
                  <div class="carousel-item"><img src="<?php echo $acf_field['picture'] ?>"></div>
                <?php 
                  }
                ?>
              </div>
              <div class="control-prev"><</div>
              <div class="control-next">></div>
            </div>
          </div>
        </div>
        <div class="col s12">
              
        </div>
        <div class="col s12">

        </div>
      </div>
    </div>
  </main>

<?php
get_footer();
