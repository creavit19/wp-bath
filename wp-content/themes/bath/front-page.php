<?php get_template_part( 'template-parts/header', 'landing' ); 
      $acf_fields = get_field('pictures');
?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col s12 m6 relative">

          <div class="main-form">
            <div class="form-head">
              <div class="form-header">
                Enter for a chance to win
              </div>
              <div class="form-sub-header">
                Note: You must be a homeowner in Virginia to quality.
              </div>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="23" title="Main form"]' ); ?>
            <div class="center-align form-footer">
              Fill out the form and submit to win 
            </div>
          </div>

          
        </div>
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
