<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Welcome to XGDL</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/home.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>
  <!-- jQuery library (served from Google) -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <!-- bxSlider Javascript file -->
  <script src="/js/jquery.bxslider.min.js"></script>
  <!-- bxSlider CSS file -->
  <link href="/lib/jquery.bxslider.css" rel="stylesheet" />
  

</head>
<body>

  <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1><a href="#"><img src="../Imagenes/Background/gdlExtreme1.png"  width="100" height="100"/> </a></h1>
      </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Left Nav Section -->
      <ul class="left">
        <li class="divider"></li>
        <li class="active"><a href="calendario.html">Calendario</a></li>
        <li class="divider"></li>
        <li><a href="musica.html">Musica</a></li>
        <li class="divider"></li>
        <li class="has-dropdown"><a href="#">Deportes</a>
        <ul class="dropdown">
            <li><a href="skate.html">Skate</a></li>
            <li><a href="moto.html">Motocross</a></li>
            <li class="divider"></li>
            <li><a href="bmx.html">BMX</a></li>
            <li><a href="parachute.html">Parachute</a></li>
            
            <li class="divider"></li>
            
          </ul>
        </li>
        <li class="divider"></li>
      </ul>

      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider hide-for-small"></li>
        
        </li>
        <li class="divider"></li>
        <li class="has-form">
          <form>
            <div class="row collapse">
              <div class="small-8 columns">
                <input type="text">
              </div>
              <div class="small-4 columns">
                <a href="#" class="alert button">Search</a>
              </div>
            </div>
          </form>
        </li>
        <li class="divider show-for-small"></li>
        <li class="has-form">
          <a class="button" href="#">Login </a>
          
        </li>
      </ul>
    </section>
  </nav>

  <ul class="bxslider">
    <li><img src="data1/images/bmx2.jpg" /></li>
    <li><img src="data1/images/img_60.jpg" /></li>
    <li><img src="data1/images/img_60.jpg" /></li>
    <li><img src="data1/images/img_60.jpg" /></li>
  </ul>

  $(document).ready(function(){
    $('.bxslider').bxSlider();
  });
  

   <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  
  <script src="js/foundation.min.js"></script>
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
