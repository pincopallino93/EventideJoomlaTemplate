<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
  <jdoc:include type="head" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eventide</title>

  <meta name="description" content="">
  <meta name="theme-color" content="#2CC7C1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/favicon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/apple-touch-icon-114x114.png">

  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/styles.css">

</head>
<body>
<div class="banner pad-top-45 pad-bottom-45 pad-top-60-m pad-bottom-60-m">
  <div class="container text-center pad-top-20-m pad-bottom-20-m pad-top-55-l pad-bottom-55-l">
    <h1 id="logo" class="logo">
    <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="550px" height="160px" viewBox="0 0 550 160" enable-background="new 0 0 550 160">
    <g>
      <path stroke="#FFFFFF" stroke-width="2" fill="transparent" class="fill" d="M407,4c1.3,0,2.6,0,4,0c3.4,0.6,7.3,1.9,10.3,3.4
        c3,1.5,6.1,3.4,8.2,5.5c-2.1,0.2-4.2,1.5-5.5,2.9c-5.1,5.6-7.4,16.7-9,26.9c-1.6,10.6-2.1,21.6-2.6,33.5
        c-1.2,25.7-2.4,58.5,15.3,66.4c-5.5,3-11.2,7-18.7,6.9c-12.3-0.3-15.4-12.1-15.6-25.3c-2.5,2-3.7,5.9-6.3,9
        c-4.6,5.4-12.4,9.6-20.6,6.3c-12.2-4.8-12.9-27.2-9-41.9c3-11.1,8.5-20.1,15.6-24.3c2.8-1.6,7.1-2.9,10.8-2.6
        c3.3,0.3,5.6,2,7.6,3.2c0.1,0.1,1.1,1.3,1.3,0.3c0.8-10.3,0.5-25.3,0.5-38.8C393.3,20.2,394.9,6,407,4z M380.2,101.3
        c-1.7,5.8-3,10.5-2.4,16.3c0.3,2.7,1.4,5.8,2.9,6.1c1,0.2,3.4-1.2,4.2-1.8c3.6-3.1,5.8-10.1,7.1-16.6c1-5.1,1.6-10.8,1.6-16.3
        c0-1.9,0.6-4.7-0.8-5.3C385.5,85.4,382.3,93.8,380.2,101.3z"/>
      <path stroke="#FFFFFF" stroke-width="2" fill="transparent" class="fill" d="M6,124.8c0-1.7,0-3.3,0-5c1.5-11.7,9.2-20.3,16.9-25.6
        c2.3-1.6,5-2.9,6.9-5c-5.6-3-10.4-5-14.2-9.2c-3.8-4.2-7.2-9.2-8.2-15.3C4.3,46.1,21.5,33.7,32.9,28c12.3-6.1,37.9-13.2,49.3-2.1
        c4.6,4.5,9,14.8,5.3,23.2c-1.9,4.2-5.2,6.5-10.3,7.9c-0.8-1.8-1.7-3.9-3.7-5c-5.2-2.8-14.6-1.2-20.8,0.8c-7,2.2-12.9,5.5-16.1,9
        c-2.5,2.7-5.8,9-4.2,13.4c2.4,6.7,17,1.8,21.6,0c3.5-1.3,6.6-2.9,9.8-4.2c3.1-1.3,6.9-3.4,10.8-2.1c1.1,4.2-0.2,5.6-2.9,7.1
        c-7.5,4.2-14.6,7.8-21.4,12.4c-4.1,2.8-8.5,5.8-12.7,9.8c-2.7,2.6-9,9-7.9,14.8c0.4,2.2,3.1,4.4,5.3,5.3c5.7,2.4,12.8,1.8,19,0.8
        c6.4-1,12-3,16.3-5.3c8.3-4.3,15.1-10.7,19-18.5c0.6-1.2,0.7-2.7,1.8-3.7c7.3,1.2,11.5,3.8,14,9c5.2,10.9-2.4,21.9-9,27.7
        c-13.3,11.6-35.7,20.8-60.9,19.2C19.7,146.5,8,139.3,6,124.8z"/>
      <path stroke="#FFFFFF" stroke-width="2" fill="transparent" class="fill" d="M316.1,46.7c19.8,1.9,37.3-1.3,50.1-8.2c4.3-2.3,7.7-5.6,11.6-7.9
        c2.7,4.8,6.7,10.2,4.7,18.5c-0.6,2.3-2.1,4.8-3.4,6.3c-11.4,12.9-44.4,6.4-64.1,5.5c-1.9,23.5-3.6,54.2,3.2,73.6
        c-5.6,3.5-11.1,7.8-20.5,6.7c-1.1-0.1-2.9-1.3-3.5-2.2c-3.4-5.3-1.7-12.6-1.3-19.2c1.2-19.4,3.3-39,3.4-59.3
        c-2.5-0.1-5,0.6-7.6,1.1c-2.5,0.4-5.7,1.4-7.6,1.1c-3.3-0.5-6.3-6-5-11.1c3.9-4.3,12.3-4.3,19.8-5c1.3-7.8-1.4-15.9-3.4-22.1
        c5.7-2.9,18-4.6,22.4,0.3C319.4,29.8,315.5,38.8,316.1,46.7z"/>
      <path stroke="#FFFFFF" stroke-width="2" fill="transparent" class="fill" d="M231.4,48.8c-6.4-0.9-12.8-2.2-19.5-2.6c-6.8-0.4-13.8,0-20.6,1.1
        c-12.4,2-24.3,6.3-33,11.3c1,7.7,2.4,16,2.1,24.5c-0.6,16.6-3.6,32-9,44.3c-2.7,6.2-6.2,12.5-10.5,16.1c-2.5,2.1-6.6,4.6-11.6,3.7
        c-9.1-1.7-13.1-16.3-14.8-25.8c-0.9-5.4-1.7-12.1-1.6-18.7c0.1-6.5,0.5-13.4,2.6-17.4c1.8-3.3,6.3-7.1,10.5-9
        c2.7-1.2,6.3-1.8,9.5-0.8c-2.2,10.2-4.8,22-2.9,35.6c0.5,3.6,2.1,11.1,5.8,11.3c4.2,0.2,6.4-7.1,7.6-11.1
        c1.5-4.7,2.5-10.3,2.9-15.8c1-12.8-0.8-22.9-4.2-31.9c-8.1,0.7-15.7,3.7-24.3,3.7c-9.9,0-19.4-3.7-23.5-10.5
        c-5-8.4-0.9-18.4,5-22.9c11.8-9,33.4-3.8,43,4.5c3,2.6,4.3,5.4,7.1,7.9c9.1-3.4,17.8-8.6,27.2-13.2c9.2-4.5,19.5-10,30.6-10.8
        C226.2,21,234.1,31.7,231.4,48.8z M121.8,45.4c-4.2-0.3-8.3,0.5-10,2.9c-4.2,5.9,4.2,8.9,10.5,8.4c5.6-0.5,10.7-2.4,14.8-4
        C134.9,49.2,128.1,45.8,121.8,45.4z"/>
      <path stroke="#FFFFFF" stroke-width="2" fill="transparent" class="fill" d="M546,97.3c0,1,0,1.9,0,2.9c-0.6,1.7-1.4,3.7-2.9,5.3
        c-9.5,10.1-28.1,11.9-47.2,11.9c-19.5,0-38.8-3.5-53.5-5.8c0.2,4.9,0.6,9.2,2.6,12.7c2.2,3.7,7.3,6.5,12.7,4.7
        c2-0.7,4.4-2.8,5.5-4.2c1.4-1.8,2.4-5.3,4.2-5.8c2.1-0.5,4.9,0.9,6.3,1.8c6.2,4,2.8,11.8-1.6,14.8c-8.7,6-24.2,6.8-34,2.4
        c-9.6-4.3-16.1-13.4-16.9-25.6c-0.9-12.9,3.5-23.9,8.4-31.1c4.9-7.2,13.3-14.7,25-14.8c12.6-0.1,23.2,7.5,24.3,18.2
        c1.2,11.5-6.6,19.9-15.3,23.5c16.5-0.5,27.6-1.4,40.6-5.8c8.4-2.8,15.4-7.9,21.4-13.4c1.7-1.6,4.8-5.3,6.6-5.3
        c0.8,0,2.1,1.3,3.4,2.1C540.3,88.7,544.7,92.3,546,97.3z M455.3,98.7c2.6-2.6,5.1-7.4,4.5-11.3c-0.7-4.6-5.3-4.5-8.2-2.4
        c-4.6,3.4-7.6,12-8.7,18.5C447.7,103.2,452.1,101.8,455.3,98.7z"/>
      <path stroke="#FFFFFF" stroke-width="2" fill="transparent" class="fill" d="M280.5,156.1c-1.3,0-2.6,0-4,0c-15.4-2.2-15.3-22-14-39.8
        c0.7-10,2.2-22.8-2.1-29c-1.6-2.3-6.7-4.6-9.2-1.8c-1.5,1.7-1.6,8.4-1.8,11.9c-0.9,12.9-1.3,28.8,1.6,38.5c0.9,2.9,2.3,4.1,3.2,7.4
        c-7.2,0.5-15.5,2.3-21.1-0.5c-7.3-3.7-6-14.7-5-25c1-9.7,2-20.9,0.5-30.1c-0.8-4.9-2.8-9.3-2.6-13.7c5-1.1,14.7-8.8,21.6-5.8
        c2.7,1.2,3.8,4.2,3.7,8.7c0.9,0.3,1.5-0.6,2.1-1.1c4.2-3.1,8.4-7.1,14.8-7.6c5.9-0.5,10,2.2,12.1,5.3c10.1,14.7-4.6,50,4,65.9
        c2.4,4.5,7.7,6.7,12.7,8.2C292.7,151.6,287.6,154.9,280.5,156.1z"/>
      <path stroke="#FFFFFF" stroke-width="2" fill="transparent" class="fill" d="M184.2,115.5c-0.3,10.5,4.3,20,14.8,17.4c3.8-0.9,6.1-4.3,7.9-7.4
        c0.6-1,1-2.3,2.1-2.9c5,0.9,9.3,2.5,10,7.1c0.8,5-3.7,9.1-7.4,11.1c-5,2.6-11.7,4-17.9,4c-9.6,0-16.2-3.1-20.6-6.9
        c-6.8-5.9-10.9-15.6-10-29c0.7-10.3,4.3-17.9,9.5-24.8c5.2-6.9,12-12.6,21.6-13.4c9.2-0.8,16,2.1,20.3,6.1c5.2,4.9,9.3,15.7,5.3,25
        c-2.9,6.8-10,13.6-19,14.5C195.9,116.8,190.3,116,184.2,115.5z M201.6,92.1c-0.1-1.7-0.9-3.6-1.8-4.2c-3.4-2.1-7.7,2-9.2,4
        c-3.3,4.2-5.1,10.9-5.8,15.6C193.5,107.5,202.1,100.1,201.6,92.1z"/>
      <path stroke="#FFFFFF" stroke-width="2" fill="transparent" class="fill" d="M351.4,136.1c-2.4,1.2-6.3,2.1-10.5,2.6c-4.7,0.6-11.4,1.4-14-0.8
        c-4.1-3.6-2.5-13.3-1.8-20.8c0.4-4.3,0.9-8.8,1.3-13.2c0.9-9.9-1-18.8-2.4-26.4c4.8-1.1,10.6-3.9,16.1-4.2c1.8-0.1,3.6-0.1,5,0.8
        c4.1,2.6,2,12.8,1.1,18.2c-1.8,10.3-3.9,23.5-0.3,33.2C347.4,129.7,349.7,132.1,351.4,136.1z"/>
    </g>
    </svg>
  </h1>
    <h2 class="banner-heading">November 08-10 | Sydney</h2>
    <p class="fs-4 col-8-m col-6-l no-float center">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam,
      quis nostrud.
    </p>
    <div class="banner-buttons">
      <a class="button button-primary" href="#register"><span class="icon icon-right chevron-right">Register</span></a>
      <a class="button" href="#">Discover</a>
    </div>
  </div>
</div>


<div class="content">
  <jdoc:include type="modules" name="position-1" /> 

  <jdoc:include type="modules" name="position-2" /> 

  <jdoc:include type="modules" name="position-3" />

  <jdoc:include type="modules" name="position-4" />

  <jdoc:include type="modules" name="position-5" />

  <jdoc:include type="modules" name="position-6" />

  <jdoc:include type="modules" name="position-7" />

  <jdoc:include type="modules" name="position-8" />

  <jdoc:include type="modules" name="position-9" />

  <jdoc:include type="modules" name="position-10" />
  
</div>

<div class="footer-block">

  <jdoc:include type="modules" name="footer" /> 
  
  <div class="footer pad-top-60 pad-bottom-60">
    <div class="container-full">
      <div class="clear footer-content-blocks">
        <div class="footer-content-block col-4-m col-5-l">
          <div class="col-11-l no-float-l">
            <h3 class="fs-4 h-white"><strong>203</strong> People Have Signed in Since June</h3>
            <p class="no-margin">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
        <div class="footer-content-block col-4-m col-4-l">
          <div class="col-10-l no-float-l">
            <h3 class="fs-4 h-white">Need Help?</h3>
            <p class="no-margin">
              If you need help with something else, please see our fully searchable <a href="#">FAQs</a>. If you can't find what you're looking for, you can <a href="#">Contact Us</a>
            </p>
          </div>
        </div>
        <div class="footer-content-block col-4-m col-3-l">
          <div class="col-12-l no-float-l">
            <h3 class="fs-4 h-white">Get In Touch</h3>
            <ul class="contact-list">
              <li><a class="footer-link icon icon-left icon-phone" href="#">+62 853 539 2001</a></li>
              <li><a class="footer-link icon icon-left icon-email" href="#">hi@eventide.com</a></li>
              <li><a class="footer-link icon icon-left icon-skype" href="#">Eventidesupport</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <p>
        Copyright 2015 Eventide
      </p>
    </div>
  </div>
</div>


<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery-1.11.3.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/webfontloader.js"></script>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.mobile.custom.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/bootstrap.transition.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/bootstrap.carousel.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/bootstrap.collapse.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/bootstrap.dropdown.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/bootstrap.tab.js"></script>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.drawsvg.js"></script>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/default.js"></script>


</body>
</html>