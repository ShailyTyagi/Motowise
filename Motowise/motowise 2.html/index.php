<!DOCTYPE html>

<html class="not-ie js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js" lang="en" style=""><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Basic Meta Tags -->
  
  <title>MOTOWISE-best place to find cars</title>
	<meta name="description" content="your description">
	<meta name="keywords" content="your keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.png" rel="icon" type="image/png">
  <!-- Bootstrap style -->
  <link href="./index_files/bootstrap.min.css" rel="stylesheet" media="screen">
  <!-- Font Awesome Style -->
  <link href="./index_files/font-awesome.min.css" rel="stylesheet" media="screen">
  <!-- Animate Style -->
  <link href="./index_files/animate.css" rel="stylesheet" media="screen">   
  <!-- Lightbox -->
  <link href="./index_files/magnific-popup.css" rel="stylesheet" media="screen">
  <!-- Flexslider Style -->
  <link href="./index_files/flexslider.css" rel="stylesheet" media="screen">       
	<!-- Style css -->
  <link href="./index_files/style.css" rel="stylesheet" media="screen"> 
	<!-- Components css -->
  <link href="./index_files/components.css" rel="stylesheet" media="screen"> 
	<!-- Color style css -->
  <link href="./index_files/color-1.css" rel="stylesheet" media="screen" id="color"> 
	<!-- Responsive css -->
  <link href="./index_files/responsive.css" rel="stylesheet" media="screen">
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link href="./index_files/extralayers.css" rel="stylesheet" media="screen">	
	<link href="./index_files/settings.css" rel="stylesheet" media="screen">
  <!-- Google Web Fonts -->
  <link href="./index_files/css" rel="stylesheet" type="text/css">
  <link href="./index_files/css(1)" rel="stylesheet" type="text/css"> 
  <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!-- Modernizr js -->        
	<div class="fit-vids-style" id="fit-vids-style" style="display: none;">­<style>                 .fluid-width-video-wrapper {                   width: 100%;                                position: relative;                         padding: 0;                              }                                                                                       .fluid-width-video-wrapper iframe,          .fluid-width-video-wrapper object,          .fluid-width-video-wrapper embed {             position: absolute;                         top: 0;                                     left: 0;                                    width: 100%;                                height: 100%;                            }                                         </style></div><script src="./index_files/modernizr.js.download"></script>
</head>
 <?php 
		include 'php/classes/Dbase.php';
               $objd = new Dbase();
              $arr_fetch = array();

		
		$query = "SELECT `ID` FROM `car_details`";
		$check = $objd->fetchAll($query);
		while($fetch= mysqli_fetch_assoc($check)){
			array_push($arr_fetch,$fetch['ID']);
		}
		
		
		
	?>   

<body>

   


  <div class="color-picker" style="left: -239px;">
		
	</div>
  
	<div id="loading-wrap" style="display: none;">
		<div id="loading">
      <i class="fa fa-cog fa-spin"></i>
    </div>
	</div>

  <header class="home-header" position="fixed"> <!-- header -->
    
    <nav class="navbar navbar-default" role="navigation">
	    <div class="container">
        <div class="navbar-inner">          
          <!-- logo-->                       
					<a href="index.php" title="Home" class="logo pull-left"><img src="./index_files/logo.png" alt="logo"></a>
          <!-- logo ends -->         
          <ul class="nav pull-left" id="nav">
            <li class="selected"><a href="index.php" title="">Home</a></li>
              <li><a href="catalog-left.html">Catalog</a></li>
                <li><a href="product-detail.php">Product detail</a></li>
            
                <li><a href="about-us.html" title="">About us</a></li>
                <li><a href="gallery-4.html" title="">Gallery</a></li>                

                       
            
            <li  ><a href="contact.html" title="">Contact</a></li>                         
          </ul><select class="selectnav" id="selectnav1"><option value="">Navigation</option><option value="index.html" selected="">HOME</option><option value="catalog-left.html">Catalog</option><option value="product-detail.html"> Product detail</option><option value="about-us.html"> About us</option><option value="gallery-4.html"> Gallery</option><option value="contact.html">CONTACT</option></select>
          <!-- Menu ends -->
        </div>  
      </div>           
    </nav>         
    
    
	<div class="tp-banner-container main-slider" style="overflow: visible;">     
		<div class="tp-banner revslider-initialised tp-simpleresponsive" id="revslider-393" style="max-height: 800px; height: 562px;">
      <ul class="tp-revslider-mainul" style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">	
        <!-- SLIDE  -->
	      <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="img/slider-main/1.jpg" data-delay="8000" data-saveperformance="off" data-title="Our Workplace" class="tp-revslider-slidesli active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
		      <!-- MAIN IMAGE -->
		      <div class="slotholder" style="width:100%;height:80%;" data-duration="9000" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="Linear.easeNone" data-bgpositionend="right center" data-bgposition="left center" data-kenburns="on" data-easeme="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="100" data-bgposition="left center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="img/slider-main/1.jpg" data-src="img/slider-main/1.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;img/slider-main/1.jpg&quot;); background-position: 100% 50%; width: 100%; height: 100%; visibility: hidden; background-size: 123.733% 197.973%; opacity: 1;"></div></div>
		      <!-- LAYERS -->

						<div class="caption tp-resizeme skewfromrightshort big-caption tp-caption start splitted" data-x="center" data-y="center" data-voffset="-70" data-speed="500" data-start="500" data-easing="easeOutExpo" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 56px; left: 508px; top: 204.825px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.99619, 0.08715, 0, 0, 0, 0, 1, -0.00166, 958.21, 0, 0, 1); transition: all 0s ease 0s;"><div class="tp-splitted" style="display: block; text-align: left; position: relative;"><div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">T</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">r</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">o</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">y</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">P</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">r</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">e</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">W</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">e</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">n</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">t</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">s</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">
</div></div> </div><div class="tp-splitted" style="display: block; text-align: left; position: relative;"><div style="position:relative;display:inline-block;" class="tp-splitted">           </div> </div></div>

                  
						<div class="caption tp-resizeme lfl fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="0" data-hoffset="0" data-speed="500" data-start="2000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 555px; top: 266.5px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">Ultra Responsive Design
            </div>                     
						<div class="caption tp-resizeme lfr fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="50" data-hoffset="0" data-speed="500" data-start="2500" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 587px; top: 301.625px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">Lot of Shortcodes
            </div>
						<div class="caption tp-resizeme lfl fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="100" data-hoffset="0" data-speed="500" data-start="3000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 606px; top: 336.75px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">Retina Ready
            </div>
						<div class="caption tp-resizeme lfl fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="150" data-hoffset="0" data-speed="500" data-start="3500" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 613px; top: 371.875px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">Color Styles
            </div>
						<div class="caption tp-resizeme lfr fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="200" data-hoffset="0" data-speed="500" data-start="4000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 587px; top: 407px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">Premium Support
            </div>
						<div class="caption tp-resizeme lfl fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="250" data-hoffset="0" data-speed="500" data-start="4500" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 599px; top: 442.125px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">Shop elements
            </div>
        </li>
	      <!-- SLIDE  -->
	      <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1500" data-thumb="img/slider-main/2.jpg" data-delay="8000" data-saveperformance="off" data-title="New York City" class="tp-revslider-slidesli active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1;">
		      <!-- MAIN IMAGE -->
		      <div class="slotholder" style="width:100%;height:80%;" data-duration="9000" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="Linear.easeNone" data-bgpositionend="center center" data-bgposition="center top" data-kenburns="on" data-easeme="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="110" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" src="img/slider-main/2.jpg" data-src="img/slider-main/2.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;img/slider-main/2.jpg&quot;); background-position: 50% 39.3226%; width: 100%; height: 100%; opacity: 1; visibility: inherit; background-size: 101.639% 137.213%;"></div><div class="kenburnimg" style="position:absolute;z-index:1;width:100%;height:100%;top:0px;left:0px;"><img src="slider-main/2.jpg" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; visibility: inherit; opacity: 1; transform: matrix(1.09613, 0, 0, 1.09613, -64.8419, -3.80867); transform-origin: 0% 0% 0px; width: 100%; height: 135%;"></div></div>
		      <!-- LAYERS -->
						<div class="caption tp-resizeme skewfromrightshort big-caption tp-caption start splitted" data-x="center" data-y="center" data-voffset="-70" data-speed="500" data-start="1000" data-easing="easeOutExpo" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 56px; left: 530.5px; top: 204.825px; visibility: visible; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); transition: all 0s ease 0s;"><div class="tp-splitted" style="display: block; text-align: left; position: relative;"><div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">M</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">O</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">T</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">O</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">W</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0.996956; transform: matrix3d(1, 0, 0, 0, -0.00451, 0.99998, 0, 0, 0, 0, 1, -0.00249, 2.91642, 0, 0, 1);" class="tp-splitted">I</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0.987826; transform: matrix3d(1, 0, 0, 0, -0.01806, 0.99983, 0, 0, 0, 0, 1, -0.00248, 11.6657, 0, 0, 1);" class="tp-splitted">S</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 0.951302; transform: matrix3d(1, 0, 0, 0, -0.07218, 0.99739, 0, 0, 0, 0, 1, -0.00244, 46.6627, 0, 0, 1);" class="tp-splitted">E</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 0.805209; transform: matrix3d(1, 0, 0, 0, -0.28497, 0.95853, 0, 0, 0, 0, 1, -0.00227, 186.651, 0, 0, 1);" class="tp-splitted">
</div></div> </div><div class="tp-splitted" style="display: block; text-align: left; position: relative;"><div style="position:relative;display:inline-block;" class="tp-splitted">           </div> </div></div>

                  
						<div class="caption tp-resizeme lfl fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="0" data-hoffset="0" data-speed="500" data-start="2000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 617px; top: 266.5px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00166, -91.325, 0, 0, 1); transition: all 0s ease 0s;">6.5l engine
            </div>                     
						<div class="caption tp-resizeme lfr fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="50" data-hoffset="0" data-speed="500" data-start="2500" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 617px; top: 301.625px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00166, 958.21, 0, 0, 1); transition: all 0s ease 0s;">120 000km
            </div>
						<div class="caption tp-resizeme lfl fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="100" data-hoffset="0" data-speed="500" data-start="3000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 627.5px; top: 336.75px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00166, -76.5725, 0, 0, 1); transition: all 0s ease 0s;">250 mph
            </div>
						<div class="caption tp-resizeme lfl fadeout medium-caption tp-caption start" data-x="center" data-y="center" data-voffset="150" data-hoffset="0" data-speed="500" data-start="4000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 35px; left: 561.5px; top: 378.875px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00166, -169.303, 0, 0, 1); transition: all 0s ease 0s;">Only: <strong style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 35px; transition: all 0s ease 0s;">155 000$</strong>
            </div>
						<div class="caption tp-resizeme lfl fadeout small-caption-2 tp-caption start" data-x="center" data-y="center" data-voffset="220" data-hoffset="0" data-speed="500" data-start="4500" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 21px; left: 638px; top: 420.05px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00166, -61.82, 0, 0, 1); transition: all 0s ease 0s;"><a href="product-detail.php" class="btn btn-default btn-lg" role="button" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 8px 10px; letter-spacing: 0px; font-size: 11px; transition: all 0.2s ease-out 0s;">See details</a>
            </div>                      
        </li>
	      <!-- SLIDE  -->
	      <li data-transition="slideleft" data-slotamount="1" data-masterspeed="1500" data-thumb="img/slider-main/3.jpg" data-delay="8000" data-saveperformance="off" data-title="Nerd Wisdom" class="tp-revslider-slidesli active-revslide" style="width: 100%; height: 100%; overflow: hidden; visibility: hidden; opacity: 0; z-index: 18;">
          <!-- MAIN IMAGE -->
		      <div class="slotholder" style="width:100%;height:80%;" data-duration="9000" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="Linear.easeNone" data-bgpositionend="right bottom" data-bgposition="left top" data-kenburns="on" data-easeme="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-owidth="undefined" data-oheight="undefined"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="130" data-bgposition="left top" data-bgrepeat="no-repeat" data-lazydone="undefined" src="img/slider-main/3.jpg" data-src="img/slider-main/3.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;img/slider-main/3.jpg&quot;); background-position: 0% 72.1038%; width: 100%; height: 100%; opacity: 1; visibility: inherit; background-size: 105.307% 168.491%;"></div></div>
		      <!-- LAYERS -->
						<div class="caption tp-resizeme skewfromrightshort big-caption tp-caption start splitted" data-x="center" data-y="center" data-voffset="-70" data-speed="500" data-start="1000" data-easing="easeOutExpo" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 56px; left: 523px; top: 224.325px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, -0.99619, 0.08715, 0, 0, 0, 0, 1, -0.00166, 958.21, 0, 0, 1); transition: all 0s ease 0s;"><div class="tp-splitted" style="display: block; text-align: left; position: relative;"><div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">N</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">I</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">E</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">S</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">A</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">N</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">G</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">T</div><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">R</div></div> <div style="position:relative;display:inline-block;" class="tp-splitted"><div style="position: relative; display: inline-block; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);" class="tp-splitted">
</div></div> </div><div class="tp-splitted" style="display: block; text-align: left; position: relative;"><div style="position:relative;display:inline-block;" class="tp-splitted">           </div> </div></div>

                  
						<div class="caption tp-resizeme lfl fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="0" data-hoffset="0" data-speed="500" data-start="2000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 617px; top: 266.5px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">6.5l engine
            </div>                     
						<div class="caption tp-resizeme lfr fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="50" data-hoffset="0" data-speed="500" data-start="2500" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 617px; top: 301.625px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">100 000km
            </div>
						<div class="caption tp-resizeme lfl fadeout small-caption tp-caption start" data-x="center" data-y="center" data-voffset="100" data-hoffset="0" data-speed="500" data-start="3000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 7px; letter-spacing: 0px; font-size: 21px; left: 627.5px; top: 336.75px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">250 mph
            </div>
						<div class="caption tp-resizeme lfl fadeout medium-caption tp-caption start" data-x="center" data-y="center" data-voffset="150" data-hoffset="0" data-speed="500" data-start="4000" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 35px; left: 561.5px; top: 378.875px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;">Only: <strong style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 35px; transition: all 0s ease 0s;">555 000$</strong>
            </div>
						<div class="caption tp-resizeme lfl fadeout small-caption-2 tp-caption start" data-x="center" data-y="center" data-voffset="220" data-hoffset="0" data-speed="500" data-start="4500" data-easing="easeOutExpot" data-splitout="none" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 21px; left: 638px; top: 420.05px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1); transition: all 0s ease 0s;"><a href="product-detail.php" class="btn btn-default btn-lg" role="button" style="min-height: 0px; min-width: 0px; line-height: 15px; border-width: 0px; margin: 0px; padding: 8px 10px; letter-spacing: 0px; font-size: 11px; transition: all 0.2s ease-out 0s;">See details</a>
            </div>                        	
        </li>
      </ul>

    <div class="tp-loader spinner4" style="display: none;"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div><div class="tp-bannertimer" style="width: 11.475%; transform: translate3d(0px, 0px, 0px); visibility: visible;"></div></div>
  <div style="position: absolute; margin-top: -50px; left: 0px; top: 250px;" class="tp-leftarrow tparrows default preview1 hidearrows"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;img/slider-main/1.jpg&quot;);"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder">Our Workplace</div><div class="tp-arr-subtitleholder"></div></div></div></div><div style="position: absolute; margin-top: -50px; right: 0px; top: 281px;" class="tp-rightarrow tparrows default preview1 hidearrows"><div class="tp-arr-allwrapper"><div class="tp-arr-iwrapper"><div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;img/slider-main/3.jpg&quot;);"></div><div class="tp-arr-imgholder2"></div><div class="tp-arr-titleholder">Nerd Wisdom</div><div class="tp-arr-subtitleholder"></div></div></div></div></div>    
        
  </header>  


  <section> <!-- section -->
    <div class="promo-video-container alert fade in" style="margin-top:-2px;">
      <div class="promo-video">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <span class="promo-video-text">Team Spark presents</span>
			 
              <a href="https://m.facebook.com/story.php?story_fbid=342678259414054&id=100010156472668"popup-youtube promo-video-link" rel="external" target="_blank"><i class="fa fa-play"><img src=play.png></i></a>
              <span class="promo-video-text">their team video</span>
           
            </div>
          </div>
        </div>
      </div>
      <a href="index.php" class="close" data-dismiss="alert">x</a>       
    </div>
    
    
    <div class="f-bg big-search-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
           </br>
           <div class="big-search-heading" align="center">Popular searches: <span class="theme-color">Nissan,BMW</span></div>
          </div>
        </div>
        </br>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form role="form">
            <div class="input-group">
              <span class="input-group-addon">Search</span>
              <input type="text" class="form-control input-lg" placeholder="Type and hit enter...">
              <span class="input-group-addon">
                <button class="btn btn-default btn-lg" type="button"><i class="fa fa-search"><img src=search.png></i></button>
              </span>
            </div>
            </form>            
          </div>
        </div>
        <div class="spacer30"></div>
        <div class="row">
          <div class="col-sm-12">
           <p align="center"><a href="index.php" id="advanced-serach-container-button" class="advanced-serach-container-button" >Advanced search.</a></p>
          </div>
        </div>        
      </div>
    </div>
    
    <div class="d-bg advanced-search-container" id="advanced-search-container" style="display: none;">
      <div class="container">

    
        <div class="row">
          <div class="col-xs-12" >
                 
            <form role="form" class="form-dark">
              
              <div class="row">
                    
               
                <div class="form-group col-sm-3">
                  <label for="a2">City</label>
                  <select class="form-control input-lg selectpicker" id="a2" data-style="btn-primary btn-lg" disabled="" style="display: none;">
                    <option>All</option>
                    <option>New Delhi</option>
                    <option>Banglore</option>
                    <option>Mumbai</option>
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker disabled btn-primary btn-lg" data-toggle="dropdown" data-id="a2" tabindex="-1" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;" href="index.php"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1" class="disabled"><a tabindex="-1" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Salzburg (2)&lt;/span&gt;" href="index.php"><span class="text">Salzburg (2)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2" class="disabled"><a tabindex="-1" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Vienna (1)&lt;/span&gt;" href="index.php"><span class="text">Vienna (1)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3" class="disabled"><a tabindex="-1" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Tyrol (3)&lt;/span&gt;" href="index.php"><span class="text">Tyrol (3)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>
                
                    

              </div>

              <div class="row">
                
                <div class="form-group col-sm-3">
                  <label for="b0">Brand</label>
                  <select class="form-control input-lg selectpicker" id="b0" data-style="btn-primary btn-lg" style="display: none;">
                   <option>All</option>
                    <option>Audi</option>
                    <option>Mercedes-Benz</option>
                    <option>Ferrari</option>
                    <option>Pagani</option>
                    <option>Nissan</option>
                    <option>Lamborghini</option>
                    <option>BMW</option>
 
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker btn-primary btn-lg" data-toggle="dropdown" data-id="b0" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;BMW&lt;/span&gt;"><span class="text">BMW</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Audi&lt;/span&gt;"><span class="text">Audi</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Mazda&lt;/span&gt;"><span class="text">Mazda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>
                              
                <div class="form-group col-sm-3">
                  <label for="b1">Model</label>
                  <select class="form-control input-lg selectpicker" id="b1" disabled="" data-style="btn-primary btn-lg" style="display: none;">
                     <option>All</option>
                    <option>r8 v10 Spyder</option>
                    <option>SLS AMG</option>
                    <option>S.p.A</option>
                    <option>Huayra</option>
                    <option>GT-R</option>
                    <option>V12</option>
                    <option>Urus</option>
                    <option>M6</option>
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker disabled btn-primary btn-lg" data-toggle="dropdown" data-id="b1" tabindex="-1" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;" href="index.php"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1" class="disabled"><a tabindex="-1" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Seria 1&lt;/span&gt;" href="index.php"><span class="text">Seria 1</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2" class="disabled"><a tabindex="-1" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Seria 3&lt;/span&gt;" href="index.php#"><span class="text">Seria 3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3" class="disabled"><a tabindex="-1" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Seria 5&lt;/span&gt;" href="index.php#"><span class="text">Seria 5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>

                <div class="form-group col-sm-3">
                  <label for="b2">Price from</label>
                  <input type="text" class="form-control input-lg" id="b2" placeholder="$">
                </div>
                
                <div class="form-group col-sm-3">
                  <label for="b3">Price to</label>
                  <input type="text" class="form-control input-lg" id="b3" placeholder="$">
                </div> 
                                
              </div>          
              
              <div class="row">
                
                <div class="form-group col-sm-3">
                  <label for="c0">Year from</label>
                  <select class="form-control input-lg selectpicker" id="c0" data-style="btn-primary btn-lg" style="display: none;">
                    <option>All</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker btn-primary btn-lg" data-toggle="dropdown" data-id="c0" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;1990&lt;/span&gt;"><span class="text">1990</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;1991&lt;/span&gt;"><span class="text">1991</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;1992&lt;/span&gt;"><span class="text">1992</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>
                              
                <div class="form-group col-sm-3">
                  <label for="c1">Year to</label>
                  <select class="form-control input-lg selectpicker" id="c1" data-style="btn-primary btn-lg" style="display: none;">
                    <option>All</option>
                    <option>2015</option>
                    <option>2016</option>
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker btn-primary btn-lg" data-toggle="dropdown" data-id="c1" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;2014&lt;/span&gt;"><span class="text">2014</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;2013&lt;/span&gt;"><span class="text">2013</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;2012&lt;/span&gt;"><span class="text">2012</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>

                <div class="form-group col-sm-3">
                  <label for="c2">Mileage from</label>
                  <input type="text" class="form-control input-lg" id="c2" placeholder="0">
                </div>
                
                <div class="form-group col-sm-3">
                  <label for="c3">Mileage to</label>
                  <input type="text" class="form-control input-lg" id="c3" placeholder="0">
                </div> 
                                
              </div>
              

              <div class="row">
                
                <div class="form-group col-sm-3">
                  <label for="d0">Fuel type</label>
                  <select class="form-control input-lg selectpicker" id="d0" data-style="btn-primary btn-lg" style="display: none;">
                    <option>All</option>
                    <option>Diesel</option>
                    <option>Petrol</option>
               
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker btn-primary btn-lg" data-toggle="dropdown" data-id="d0" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Diesel&lt;/span&gt;"><span class="text">Diesel</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Petrol&lt;/span&gt;"><span class="text">Petrol</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Gas (LPG)&lt;/span&gt;"><span class="text">Gas (LPG)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>
                              
                <div class="form-group col-sm-3">
                  <label for="d1">Gearbox</label>
                  <select class="form-control input-lg selectpicker" id="d1" data-style="btn-primary btn-lg" style="display: none;">
                    <option>All</option>
                    <option>Manual</option>
                    <option>Automatic</option>
                    <option>S-Tronic</option>
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker btn-primary btn-lg" data-toggle="dropdown" data-id="d1" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Automatic&lt;/span&gt;"><span class="text">Automatic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Manula&lt;/span&gt;"><span class="text">Manula</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Hybrid&lt;/span&gt;"><span class="text">Hybrid</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>

                <div class="form-group col-sm-3">
                  <label for="d2">Body type</label>
                  <select class="form-control input-lg selectpicker" id="d2" data-style="btn-primary btn-lg" style="display: none;">
                    <option>All</option>
                    <option>Sports Car</option>
                    <option>SUV</option>
                    <option>Subcompact Car</option>
                    <option>Coupe</option>
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker btn-primary btn-lg" data-toggle="dropdown" data-id="d2" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Sedan&lt;/span&gt;"><span class="text">Sedan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;Hatchback&lt;/span&gt;"><span class="text">Hatchback</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;SUV&lt;/span&gt;"><span class="text">SUV</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>
                              
                <div class="form-group col-sm-3">
                  <label for="d3">Doors</label>
                  <select class="form-control input-lg selectpicker" id="d3" data-style="btn-primary btn-lg" style="display: none;">
                    <option>All</option>
                    <option>2</option>
                    <option>4</option>
                   
                  </select><div class="btn-group bootstrap-select form-control input-lg"><button type="button" class="btn dropdown-toggle selectpicker btn-primary btn-lg" data-toggle="dropdown" data-id="d3" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;All&lt;/span&gt;"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;2&lt;/span&gt;"><span class="text">2</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;3&lt;/span&gt;"><span class="text">3</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="&lt;span class=&quot;text&quot;&gt;5&lt;/span&gt;"><span class="text">5</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div></div>
                </div>
                                
              </div>
              
               
              <div class="spacer20"></div>
              <div class="row">            

                <div class="col-sm-2 col-sm-offset-5">
                  <button type="submit" class="btn btn-default btn-lg btn-big-border col-xs-12">Submit</button>
                </div>
                
               
                
                           
              </div>             

            </form>
          
          </div>
        </div> 
        
      </div>
    </div>
    
        
    <div class="spacer60"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">

          <div class="r-bg">
          <div class="widget">
           <h4>Popular cars</h4>
            <ul class="list-1">
              <li>S.p.A Ferrari</li>
              <li>GT-R Nissan</li>
              <li>Aventador Lamborghini</li>
              <li>V12 Ferrari</li>
            </ul>
          </div>
          </div>
		  
          
         </div>

           <div class="col-sm-8">
          <div class="r-bg">
            <h3>Search results</h3>
              <div class="row">
                <div class="col-sm-12">
                
            
            </div>

           
           </div> 
        <div id="products" class="row">
          <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/audir8.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[0] ; ?>">Audi r8 v10 Spyder</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                    <li><strong>Location:</strong> New Delhi</li>
                    <li><strong>ID:</strong>C0001</li>
                    <li><strong>Body:</strong>Sports Car</li>
                    <li><strong>Year:</strong>2015</li>
                    <li><strong>Engine:</strong> 5.2L, petrol</li>
                    <li><strong>Mileage:</strong>7.8</li>
                    <li><strong>Gear Box:</strong>S-Tronic</li>
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">445.34 lakhs</div>
                  <a href="<?php echo'product-detail.php?car/'.$arr_fetch[0] ; ?>"  class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>
          <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/benzamg.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                  
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[1] ; ?>">SLS AMG Benz</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                    <li><strong>Location:</strong> Banglore</li>
                    <li><strong>ID:</strong>C0002</li>
                    <li><strong>Body:</strong>Coupe</li>
                    <li><strong>Year:</strong>2014</li>
                    <li><strong>Engine:</strong> 6.2L, petrol</li>
                    <li><strong>Mileage:</strong>8</li>
                    <li><strong>Gear Box:</strong>Automatic/Manual</li>
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">678.9 lakhs</div>
                  <a href="<?php echo 'product-detail.php?car/'.$arr_fetch[1] ; ?>" class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>
          <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/ferrarispa.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                 
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[2] ; ?>">S.p.A. Ferrari</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                   <li><strong>Location:</strong> Mumbai</li>
                    <li><strong>ID:</strong>C0003</li>
                    <li><strong>Body:</strong>Sports Car</li>
                    <li><strong>Year:</strong>2016</li>
                    <li><strong>Engine:</strong> 1.5L, petrol</li>
                    <li><strong>Mileage:</strong>7.2</li>
                    <li><strong>Gear Box:</strong>Manual</li> 
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">150 lakhs</div>
                  <a href="<?php echo 'product-detail.php?car/'.$arr_fetch[2] ; ?>" class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>
          
          <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/nissangtr.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[3] ; ?>">GT-R Nissan</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                     <li><strong>Location:</strong> Banglore</li>
                    <li><strong>ID:</strong>C0005</li>
                    <li><strong>Body:</strong>Subcompact Car</li>
                    <li><strong>Year:</strong>2016</li>
                    <li><strong>Engine:</strong> 3.8L, petrol</li>
                    <li><strong>Mileage:</strong>0</li>
                    <li><strong>Gear Box:</strong>Manual</li> 
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">73.37 lakhs</div>
                  <a href="<?php echo 'product-detail.php?car/'.$arr_fetch[3] ; ?>" class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>
          <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/lamborghiniav.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[4] ; ?>">Aventador Lamborghini</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                    <li><strong>Location:</strong> New Delhi</li>
                    <li><strong>ID:</strong>C0006</li>
                    <li><strong>Body:</strong>Sports Cars</li>
                    <li><strong>Year:</strong>2013</li>
                    <li><strong>Engine:</strong> 5.4L, petrol</li>
                    <li><strong>Mileage:</strong>16</li>
                    <li><strong>Gear Box:</strong>Automatic</li> 
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">429 lakhs</div>
                  <a href="<?php echo 'product-detail.php?car/'.$arr_fetch[4] ; ?>" class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>

          <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/ferrariv12.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[5] ; ?>">V12 Ferrari</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                    <li><strong>Location:</strong> Mumbai</li>
                    <li><strong>ID:</strong>C0007</li>
                    <li><strong>Body:</strong>Sports Car</li>
                    <li><strong>Year:</strong>2012</li>
                    <li><strong>Engine:</strong> 6.22L, petrol</li>
                    <li><strong>Mileage:</strong>6.66</li>
                    <li><strong>Gear Box:</strong>Manual</li> 
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">409 lakhs</div>
                  <a href="<?php echo 'product-detail.php?car/'.$arr_fetch[5] ; ?>" class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>
          
          <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/urus.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[6] ; ?>">Urus Lamborghini</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                    <li><strong>Location:</strong> Banglore</li>
                    <li><strong>ID:</strong>C0008</li>
                    <li><strong>Body:</strong>SUV</li>
                    <li><strong>Year:</strong>2012</li>
                    <li><strong>Engine:</strong> 4L, petrol</li>
                    <li><strong>Mileage:</strong>4</li>
                    <li><strong>Gear Box:</strong>Manual</li> 
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">500 lakhs</div>
                  <a href="<?php echo 'product-detail.php?car/'.$arr_fetch[6] ; ?>" class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>
         
          <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/m6.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[7] ; ?>">M6 BMW</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                   <li><strong>Location:</strong> New Delhi</li>
                    <li><strong>ID:</strong>C0009</li>
                    <li><strong>Body:</strong>Coupe</li>
                    <li><strong>Year:</strong>2015</li>
                    <li><strong>Engine:</strong> 0L, petrol</li>
                    <li><strong>Mileage:</strong>7.23</li>
                    <li><strong>Gear Box:</strong>Manual</li> 
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">176.9 lakhs</div>
                  <a href="<?php echo 'product-detail.php?car/'.$arr_fetch[7] ; ?>" class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>
         <div class="item col-xs-6 col-sm-6 col-md-4">
              <div class="search-result-item-container">
                <div class="search-result-item-media">
                  <img src="./img/paganih.jpg" alt="" style="height:140px;"/>
                </div>
                <div class="search-result-item-content">
                  <div class="title"><a href="<?php echo 'product-detail.php?car/'.$arr_fetch[8] ; ?>">Huayra Pagani</a></div>
                  <ul class="tags grid-hidden">
                    <li><a href="index.php">Lpg</a></li>
                    <li><a href="index.php">Used</a></li>
                    <li><a href="index.php">2l</a></li>
                  </ul>
                  <ul class="list-4">
                    <li><strong>Location:</strong> New Delhi</li>
                    <li><strong>ID:</strong>C0004</li>
                    <li><strong>Body:</strong>Sports Car</li>
                    <li><strong>Year:</strong>2012</li>
                    <li><strong>Engine:</strong> 5.98L, petrol</li>
                    <li><strong>Mileage:</strong>5.1</li>
                    <li><strong>Gear Box:</strong>Manual</li> 
                  </ul>                  
                  <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  <div class="price">973.9 lakhs</div>
                  <a href="<?php echo 'product-detail.php?car/'.$arr_fetch[8] ; ?>" class="btn btn-default" role="button">Details</a>
                </div>                          
              </div>
          </div>                    
   </div>            
            

  
        </div>
        <div class="spacer20"></div>
        

          
      </div>



    
      </div>
    </div>
    <div class="spacer60"></div>
    <div class="container">
      <div class="row">
    
        <div class="full-tabs">

          <!-- Navigation Buttons -->
            <div class="col-xs-4 col-sm-3">
              <ul class="nav nav-pills nav-stacked" id="myTabs">
                <li class="active"><a href="index.php#home">Home</a></li>
                <li><a href="index.php#profile">Team Vision</a></li>
                <li><a href="index.php#messages">Popular Cars</a></li>
                <li><a href="index.php#messages1">Queries</a></li>
              </ul>
            </div>

            <!-- Content -->
              <div class="col-xs-8 col-sm-9">
                <div class="tab-content">
                  <div class="tab-pane active" id="home" style="height: 240px;">
                    <div class="overlay">          
                      <div class="title">About Us</div>
                      <p>Motowise is a platform that helps its users in choosing the car that is best suited to their needs. We have an enormous database with detailed specs that helps our users in making the best comparison.</p>
                    </div>
                  </div>
                  <div class="tab-pane" id="profile">
                    <div class="overlay">
                      <div class="title">Team Vision</div>
                      <p>We at Motowise aim to provide our users with the best information that helps them in making the best decision before buying a car.</p>
                    </div>
                  </div>
                  <div class="tab-pane" id="messages">
                    <div class="overlay">
                      <div class="title">GT-R Nissan</div>
                   <p> It was awarded best car </p>
                </div>            
                  </div>
                  <div class="tab-pane" id="messages1">
                    <div class="overlay">
                      <div class="title">Queries</div>
                      <p>You can send in your queries to us at webmotowise@gmail.com <br>We would be glad to answer your queries .</p>
                    </div>      
                  </div>
                </div>
              </div>

          </div>
    
        </div><!-- /row -->    
    </div>
    
    <div class="spacer40"></div>
    
    
	
    <div class="container">
      <div class="row">
        
        <div class="col-md-6 col-sm-6">
          <div class="news-box">
            <img src="./index_files/2(2).jpg" alt="">
            <div class="overlay">
              <div class="table-cont">
                <div class="table-cell">
                  <h4>Best Car Of 2015</h4>
                  <p class="hidden-sm hidden-xs">Huayra Pagani</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>        
        <div class="col-md-6 col-sm-6">
          <div class="news-box">
            <img src="./img/ferrarispa.jpg" alt="">
            <div class="overlay">
              <div class="table-cont">
                <div class="table-cell">
                  <h4>Best Car Of 2016</h4>
                  <p class="hidden-sm hidden-xs">S.p.A. Ferrari</p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="clasic-slider flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
              <li class="flex-active-slide" style="float: left; display: block; width: 1140px;">
                <div class="caption">
                  <div class="table-cont">
                    <div class="table-cell">
                      <h3>Best Seller</h3>
                      <h2>Aventador Lamborghini</h2>
                      <p>Location:New Delhi,5.4L petrol engine,2013.</p>
                      <p>Only: <strong>&#8377;429 lakhs</strong></p>
                      
                    </div>
                  </div>
                </div>
                <img src="./index_files/1(4).jpg" alt="" draggable="false">
              </li>
              <li style="float: left; display: block; width: 1140px;">
                <div class="caption">
                  <div class="table-cont">
                    <div class="table-cell">
                      <h3>Best Seller</h3>
                      <h2>Audi TT</h2>
                      <p>used, 6.5l, 300 000 km, manual.</p>
                      <p>Only: <strong>&#8377;25.000</strong></p>
                      
                    </div>
                  </div>
                </div>
                <img src="./index_files/2(4).jpg" alt="" draggable="false">
              </li>
              <li style="float: left; display: block; width: 1140px;">
                <div class="caption">
                  <div class="table-cont">
                    <div class="table-cell">
                      <h3>Best Seller</h3>
                      <h2>Honda</h2>
                      <p>used, 6.5l, 300 000 km, manual.</p>
                      <p>Only: <strong>$25.000</strong></p>
                   
                    </div>
                  </div>
                </div>
                <img src="./index_files/3(3).jpg" alt="" draggable="false">
              </li>              
            </ul></div><ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="index.php#" tabindex="-1"></a></li><li><a class="flex-next" href="index.php#"></a></li></ul></div>                      
        </div>
      
      </div>
    
    </div>


    
    
    <div class="spacer60"></div>
    </div>
  </section> <!-- section ends -->
         

   <footer class="footer">  <!-- footer -->
    <div class="footer-top">
      <div class="footer-top-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-6">
              <h4>Services</h4>
              <ul class="list-2">
                <li><a href="gallery-4.html">Cars</a></li>
                <li><a href="about-us.html">Services</a></li>
                <li><a href="catalog-left.html">Details</a></li>

              </ul>
            </div>
            <div class="col-sm-3 col-xs-6">
              <h4>About us</h4>
              <ul class="list-2">
                <li><a href="about-us.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="about-us.html">Team</a></li>
              </ul>
            </div>
			<div class="col-sm-3 col-xs-6">
			</div>
            <div class="col-sm-3 col-xs-6">
              <h4>Follow us</h4>
              <ul class="colored-social-icons-2">
               <li><a 

href="https://web.facebook.com/Motowise-best-place-to-purchase-a-car-1200333146700208/?fref=ts" rel="external" class="facebook" target="_blank"><i class="fa fa-facebook"><img 

src=fbsquare.png></i></a></li>
                <li><a href="https://plus.google.com/u/0/109424999340692254679" rel="external" class="google-plus" target="_blank"><i class="fa fa-google-plus"><img 

src=googleplus.png></i></a></li> 
 <li><a href="index.html#" rel="external" class="instagram" target="_blank"><i class="fa fa-instagram"><img src=github.png></i></a></li>  
              </ul
              <div class="spacer25"></div>
            
              
                 
                </div>
  
            </div>
          </div>
        </div>      
      </div>

    
    <div class="footer-bottom">
      <div class="footer-bottom-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p><b>Info</b></p>
              <p>For any further assistance, please don't hesistate to reach out to us </p>
              <div class="spacer50"></div>
              
              <p>© MotoWise – Created by <a href="contact.html#">MW</a>.</p>
            </div>
            <div class="col-sm-3">
             

            </div>
            <div class="col-sm-3">
               
              <ul class="list-3">
			    <li><b>Address</b></li>
                <li>189,J Block</li>
                <li>Motowise office,Sarita Vihar</li>
				<li>New Delhi</li>
                <li>&nbsp;</li>
				<li> </li>
				<li><b>Contact Us</b></li>
				<li>9811828121<li>
				<li>9643054814</li>

              </ul>
              <div class="spacer15"></div>
        
            </div>
          </div>
        </div>
      </div>
    
    </div>
    
  </footer> <!-- Footer ends -->

  <a href="index.html#" class="back-to-top" style="display: none;"><span><img src=gototop.png></span></a>

  <script src="./index_files/jquery.js.download"></script>  
  <script src="./index_files/bootstrap.min.js.download"></script>    
  <script src="./index_files/jquery.easing.js.download"></script>    
  <script src="./index_files/jquery.isotope.min.js.download"></script>   
  <script src="./index_files/jquery.fitvids.js.download"></script>
  <script src="./index_files/jquery.appear.js.download"></script>  
  <script src="./index_files/retina.js.download"></script>
  <script src="./index_files/respond.min.js.download"></script>  
  <script src="./index_files/jquery.parallax-1.1.3.js.download"></script>
  <script src="./index_files/jquery.magnific-popup.min.js.download"></script>
  <script src="./index_files/jquery.sticky.js.download"></script>
  <script src="./index_files/jquery.countTo.js.download"></script>
  <script src="./index_files/owl.carousel.min.js.download"></script>
  <script src="./index_files/jquery.flexslider-min.js.download"></script>
  <script src="./index_files/ion.rangeSlider.min.js.download"></script>    
  <script src="./index_files/selectnav.js.download"></script>
  <script src="./index_files/responsive-tabs.js.download"></script>
  <script src="./index_files/bootstrap-select.min.js.download"></script>   
  <script src="./index_files/functions.js.download"></script>
  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->    
  <script type="text/javascript" src="./index_files/jquery.themepunch.tools.min.js.download"></script>   
  <script type="text/javascript" src="./index_files/jquery.themepunch.revolution.min.js.download"></script>    

  <script type="text/javascript">

				jQuery(document).ready(function() {
				
					
								
					jQuery('.tp-banner').show().revolution(
					{
						dottedOverlay:"none",
						delay:16000,
						startwidth:1920,
						startheight:800,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:5,
						
						navigationType:"none",
						navigationArrows:"solo",
						navigationStyle:"preview1",
						
						touchenabled:"on",
						onHoverStop:"off",
						
						swipe_velocity: 0.7,
						swipe_min_touches: 1,
						swipe_max_touches: 1,
						drag_block_vertical: false,
												
						parallax:"mouse",
						parallaxBgFreeze:"on",
						parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
												
						keyboardNavigation:"off",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						spinner:"spinner4",
						
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						autoHeight:"off",						
						forceFullWidth:"off",						
												
												
												
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,						
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						videoJsPath:"rs-plugin/videojs/",
						fullScreenOffsetContainer: ""	
					});
					
					
					
									
				});	//ready
				
	</script> 
  
  
</body></html>