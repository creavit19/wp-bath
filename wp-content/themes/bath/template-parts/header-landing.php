<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="right-align phone">
            (757) 722-BATH
          </div>
        </div>
        <div class="col s12 m6">
          <div class="logo-block">
            <div class="center-align logo">
              <img src="<?php echo THEME_DIR_URI.'/dist/images/'?>QA-Logo-Navy.png">
            </div>
            <div class="slogan1">
              Enter to win!
            </div>
            <div class="amount">
              $10,000
            </div>
            <div class="slogan2">
              Dream bath makeover
            </div>
          </div> 
        </div>
      </div>
    </div>
    <div class="counter-line">
      <div class="container">
        <div class="col s12">
          <div class="row">
            <div class="col s12 m6">
              <div class="center-align counter-block">
                <div class="counter-docket">
                  Next drawing:
                </div>
                <div class="counter" id="counter" data-dateto="<?php the_field('moment_to_drawing'); ?>">
                  <span data-role="days">0</span> :
                  <span data-role="hours">00</span> :
                  <span data-role="minutes">00</span> :
                  <span data-role="seconds">00</span>
                </div>
                <div class="counter-labels">
                  <span>Days</span>
                  <span>Hours</span>
                  <span>Minutes</span>
                  <span>Seconds</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
