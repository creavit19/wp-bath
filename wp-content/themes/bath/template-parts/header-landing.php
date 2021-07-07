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
                <div class="counter">
                  <span>313</span> :
                  <span>20</span> :
                  <span>29</span> :
                  <span>18</span>
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
  <main>
    <div class="container">
      <div class="row">
        <div class="col s12 m6 relative">
          <form class="main-form" action="#" method="post">
            <div class="form-head">
              <div class="form-header">
                Enter for a chance to win
              </div>
              <div class="form-sub-header">
                Note: You must be a homeowner in Virginia to quality.
              </div>
            </div>
            <div class="form-fields">
              <input class="browser-default" type="text" placeholder="You full name">
              <input class="browser-default" type="text" placeholder="Enter phone nomber to reach you at">
              <input class="browser-default" type="text" placeholder="Your email">
              <input class="browser-default" type="text" placeholder="You address">
              <div class="when-call">
                <div class="right">
                  <label>
                    <input name="group1" type="radio" checked>
                    <span>AM</span>
                  </label>
                  <label>
                    <input name="group1" type="radio">
                    <span>PM</span>
                  </label>
                </div>
                <p>Select time to call</p>
                <p>*Please select a time when it is convenient for you to call back</p>
              </div>
              <input class="browser-default" type="text" placeholder="Comments">
              <input class="browser-default" type="submit" value="Submit">
            </div>
            <div class="center-align form-footer">
              Fill out the form and submit to win 
            </div>
          </form>
        </div>