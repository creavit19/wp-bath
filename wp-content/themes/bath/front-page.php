<?php get_template_part( 'template-parts/header', 'landing' ); 
      $acf_slider_pictures = get_field('pictures');
      $acf_reviews = get_field('review_items');
      $acf_link = get_field('link');
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
              <?php echo get_field('slider_header'); ?>
            </div>
            <div class="slider-wrapper relative">
              <div class="carousel carousel-slider" id="main-slider">
                <?php foreach($acf_slider_pictures as $item){ ?>
                  <div class="carousel-item"><img src="<?php echo $item['picture'] ?>"></div>
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
          <div class="slider2-block">
            <div class="center-align slider2-docket">
              <?php echo get_field('review_header'); ?>
            </div>
            <div class="slider-wrapper relative">
              <div class="carousel carousel-slider" id="review-slider">
                <?php foreach($acf_reviews as $item){ ?>
                  <div class="carousel-item">
                    <div class="valign-wrapper" style="height: 100%;">
                      <div>
                        <h2 class="center-align">
                          <?php
                          for($i = 1; $i <= 5; $i++){
                            $star_class = $i <= $item['stars'] ? 'bright-star' : 'dim-star';
                            echo '<i class="fa fa-star '.$star_class.'" aria-hidden="true"></i>';
                          }
                          ?>
                        </h2>
                        <p><?php echo '"'.$item['review_text'].'"' ?></p>
                        <p class="right-align">– <?php echo $item['author_name'] ?></p>
                      </div>
                    </div>
                  </div>
                <?php 
                  }
                ?>
              </div>
              <div class="control-prev"><</div>
              <div class="control-next">></div>
            </div>
          </div>   
        </div>
        <div class="col s12 front-link-block">
          <div class="center-align">
            <?php the_field('inscription'); ?>
          </div>
          <div class="center-align">
            <?php echo '<a href="'.$acf_link['url'].'" target="'.$acf_link['target'].'" class="front-link">'.$acf_link['title'].'</a>'; ?>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php
get_footer();
