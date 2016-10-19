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
  <link href="./product-detail_files/bootstrap.min.css" rel="stylesheet" media="screen">
  <!-- Font Awesome Style -->
  <link href="./product-detail_files/font-awesome.min.css" rel="stylesheet" media="screen">
  <!-- Animate Style -->
  <link href="./product-detail_files/animate.css" rel="stylesheet" media="screen">
  <!-- Flexslider Style -->
  <link href="./product-detail_files/flexslider.css" rel="stylesheet" media="screen">       
  <!-- Lightbox -->
  <link href="./product-detail_files/magnific-popup.css" rel="stylesheet" media="screen">     
	<!-- Style css -->
  <link href="./product-detail_files/style.css" rel="stylesheet" media="screen"> 
	<!-- Components css -->
  <link href="./product-detail_files/components.css" rel="stylesheet" media="screen"> 
	<!-- Color style css -->
  <link href="./product-detail_files/color-1.css" rel="stylesheet" media="screen" id="color"> 
	<!-- Responsive css -->
  <link href="./product-detail_files/responsive.css" rel="stylesheet" media="screen">
  <!-- Google Web Fonts -->
  <link href="./product-detail_files/css" rel="stylesheet" type="text/css">
  <link href="./product-detail_files/css(1)" rel="stylesheet" type="text/css"> 
  <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!-- Modernizr js -->        
	<div class="fit-vids-style" id="fit-vids-style" style="display: none;">&#65533;<style>                 .fluid-width-video-wrapper {                   width: 100%;                                position: relative;                         padding: 0;                              }                                                                                       .fluid-width-video-wrapper iframe,          .fluid-width-video-wrapper object,          .fluid-width-video-wrapper embed {             position: absolute;                         top: 0;                                     left: 0;                                    width: 100%;                                height: 100%;                            }                                         </style></div><script src="./product-detail_files/modernizr.js.download"></script>
</head>
<?php
include 'php/classes/Dbase.php';
$url = $_SERVER['REQUEST_URI'];
if(sizeof(explode('?',$url))<1)
{
 die('Not sufficient parameters');
}
else
{
  $car_id = explode('?',$url);
  $car_id = $car_id[1];
  $car_id = explode('/',$car_id);
  $car_id = $car_id[1];
}
$arr_card= array();

$objd  =new Dbase();
$query = "SELECT * FROM `car_details` WHERE `ID`='{$car_id}'";
$check = $objd->fetchAll($query);
$arr_card= mysqli_fetch_assoc($check);
?>
<body class="no-main-slider">

  
  
	<div id="loading-wrap" style="display: none;">
		<div id="loading">
      <i class="fa fa-cog fa-spin"></i>
    </div>
	</div>

  <header class="home-header" style="background-color:black;" position="fixed"> <!-- header -->
    
    <nav class="navbar navbar-default" role="navigation">
	    <div class="container">
        <div class="navbar-inner">          
          <!-- logo-->                       
					<a href="index.php" title="Home" class="logo pull-left"><img src="./index_files/logo.png" alt="logo"></a>
          <!-- logo ends -->         
          
          <!-- Menu --> 
          <ul class="nav pull-left" id="nav">
            <li><a href="index.php" title="">Home</a></li>
              <li><a href="catalog-left.html">Catalog</a></li>
                <li class="selected"><a href="product-detail.php">Product detail</a></li>
            
                <li><a href="about-us.html" title="">About us</a></li>
                <li  ><a href="gallery-4.html" title="">Gallery</a></li>                

                       
            
            <li ><a href="contact.html" title="">Contact</a></li>                         
          </ul><select class="selectnav" id="selectnav1"><option value="">Navigation</option><option value="index.php" selected="">HOME</option><option value="catalog-left.html">Catalog</option><option value="product-detail.php"> Product detail</option><option value="about-us.html"> About us</option><option value="gallery-4.html"> Gallery</option><option value="contact.html">CONTACT</option></select>
          <!-- Menu ends -->
          
        </div>  
      </div>           
    </nav></header>
  <section>
    

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
    
    
          
    <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="page-title">Details</div>
            <ol class="breadcrumb">
              <li><a href="<?php echo 'index.php' ;?>">Home</a></li>
             
              <li class="active">Product detail</li>
            </ol>            
          </div>
        </div>
      </div>    
    </div> 
        
    <div class="container">
      <div class="row">
        <div class="col-sm-8 car-detail-container">
          
          <div class="slider-carousel flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
              <li class="flex-active-slide" style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2><?php echo $arr_card['BRAND'].$arr_card['MODEL']; ?></h2>
                  <p> <?php echo $arr_card['TYPE'].", ".$arr_card['ENGINE_SIZE']."L ".$arr_card['GEARBOX'].""?>,Only: <span class="highlite">Rs.<?php echo $arr_card['PRICE']; ?></span>.</p>
                </div>  
                <a href="<?php echo 'product-detail.php?car/'.$arr_card['ID']; ?>" class="popup-link"><img src="img/<?php echo $arr_card['IMG_ID']?>" alt="" draggable="false"></a>
              </li>  
              <li style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2>Pagani Huayra</h2>
                  <p>Sports Car ,5.98 l engine, petrol,manual gearbox ,Only: <span class="highlite">&#8377; 973.9 lakhs</span>.</p>
                </div>               
                <a href="./product-detail_files/2.jpg" class="popup-link"><img src="img/paganih.jpg" alt="" draggable="false"></a>
              </li> 
              <li style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2>Nissan GT-R</h2>
                  <p>Subcompact Car ,3.88 l engine, petrol,manual gearbox ,Only:<span class="highlite">&#8377; 73.7 lakhs</span>.</p>
                </div>               
                <a href="img/nissangtr.jpg" class="popup-link"><img src="img/nissangtr.jpg" alt="" draggable="false"></a>
              </li> 
              <li style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2>BMW M6</h2>
                  <p>Coupe ,5 l engine, petrol,manual gearbox ,Only: <span class="highlite">&#8377; 176.9 lakhs</span>.</p>
                </div>               
                <a href="img/m6.jpg" class="popup-link"><img src="img/m6.jpg" alt="" draggable="false"></a>
              </li> 
              <li style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2>Lamborghini Aventador</h2>
                  <p>Sports Car, 5.4 l engine, petrol,automatic gearbox, Only: <span class="highlite">&#8377;429 lakhs</span>.</p>
                </div>               
                <a href="img/lamborghiniav.jpg" class="popup-link"><img src="img/lamborghiniav.jpg" alt="" draggable="false"></a>
              </li> 
              <li style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2>Ferrari V12</h2>
                  <p>Sports Car, 6.22 l engine, petrol,manual gearbox, Only: <span class="highlite">&#8377;409 lakhs</span>.</p>
                </div>               
                <a href="img/ferrariv12.jpg" class="popup-link"><img src="img/ferrariv12.jpg" alt="" draggable="false"></a>
              </li> 
              <li style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2>Ferrari S.p.A</h2>
                  <p>Sports Car ,1.5 l engine, petrol,manual gearbox ,Only: <span class="highlite">&#8377; 150 lakhs</span>.</p>
                </div>               
                <a href="img/ferrarispa.jpg" class="popup-link"><img src="img/ferrarispa.jpg" alt="" draggable="false"></a>
              </li> 
              <li style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2>Mercedes-Benz SLS-AMG</h2>
                  <p>Coupe Car ,6.2 l engine, diesel,automatic and manual gearbox ,Only: <span class="highlite">&#8377; 678.9 lakhs</span>.</p>
                </div>               
                <a href="img/benzamg.jpg" class="popup-link"><img src="img/benzamg.jpg" alt="" draggable="false"></a>
              </li> 
			  <li style="float: left; display: block; width: 750px;">
                <div class="caption">
                  <h2>Audi r8 v10 Spyder</h2>
                  <p>Sports Car ,5.2 l engine, petrol,s-tronic gearbox ,Only: <span class="highlite">&#8377;445.34 lakhs</span>.</p>
                </div>               
                <a href="img/audir8.jpg" class="popup-link"><img src="img/audir8.jpg" alt="" draggable="false"></a>
              </li> 
			  
            </ul></div><ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="product-detail.php#" tabindex="-1"></a></li><li><a class="flex-next" href="product-detail.php#"></a></li></ul></div>
          <div class="carousel-slider flexslider">
            
          <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
              <li class="flex-active-slide" style="float: left; display: block; width: 230px;">
                <img src="img/urus.jpg" alt="" draggable="false">
              </li>
              <li style="float: left; display: block; width: 230px;">
                <img src="img/paganih.jpg" alt="" draggable="false">
              </li>
              <li style="float: left; display: block; width: 230px;">
                <img src="img/nissangtr.jpg" alt="" draggable="false">
              </li>
              <li style="float: left; display: block; width: 230px;">
                <img src="img/m6.jpg" alt="" draggable="false">
              </li>
              <li style="float: left; display: block; width: 230px;">
                <img src="img/lamborghiniav.jpg" alt="" draggable="false">
              </li>
              <li style="float: left; display: block; width: 230px;">
                <img src="img/ferrariv12.jpg" alt="" draggable="false">
              </li> 
               <li style="float: left; display: block; width: 230px;">
                <img src="img/ferrarispa.jpg" alt="" draggable="false">
              </li>
 			  <li style="float: left; display: block; width: 230px;">
                <img src="img/benzamg.jpg" alt="" draggable="false">
              </li>
              <li style="float: left; display: block; width: 230px;">
                <img src="img/audir8.jpg" alt="" draggable="false">
              </li>
              
            </ul></div><ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="product-detail.php#" tabindex="-1"></a></li><li><a class="flex-next" href="product-detail.php#"></a></li></ul></div>
          
          <div class="title">
            Additional Info
          </div>
          <p class="info-text">
                   <?php echo $arr_card['ADD_INFO']; ?>
		  </p>
          
     
          <ul class="nav nav-tabs responsive hidden-xs hidden-sm" id="myTab">
            <li class="active"><a href="product-detail.php#tab1" data-toggle="tab">Tech. info</a></li>
           </ul>      
          <div class="tab-content responsive hidden-xs hidden-sm">
            <div class="tab-pane fade in active" id="tab1">
              <div class="row">
                <div class="col-sm-6">
                  <ul class="list-3">
				   <li><strong>Engine:</strong> 4</li>
                   <li><strong>Gear:</strong> manual</li>
                    <li><strong>Doors:</strong> 4</li>
                    <li><strong>Type:</strong> SUV</li>
                    <li><strong>Id:</strong>C0008</li>
                 
				    </ul>                                   
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab2">
              <div class="row">
                <div class="col-sm-6">
                  <ul class="list-3">
                        <p>The Lamborghini Urus SUV concept would be much lighter than some other SUVs because of extensive usage of carbon-fiber-reinforced polymer, although it is based on the same platform as the Audi Q7, Bentley Bentayga, Porsche Cayenne, and Volkswagen Touareg. </p>
					<p>The Urus Super SUV will feature a 584 bhp (435 kW; 592 PS) turbocharged 5.2 liter V10 engine by Audi that includes an electric motor with plug-in capability.</p>
					<p>The Urus has a front-engine, all-wheel-drive layout.</p>
                   
                  </ul>                                   
                </div>
                <div class="col-sm-6">
                  <ul class="list-3">
                   
                  </ul>
                </div>
              </div>            
            
            </div>
            <div class="tab-pane fade" id="tab3">
              <div class="row">
                <div class="col-sm-6">
                  <ul class="list-3">
                    <p>The Urus is approximately 16 feet (4.9 m) long, but only about 5.5 feet (1.7 m) high. </p>
					<p>The Urus will have a top speed of 205 mph (328 kph), making it the world's fastest SUV. Lamborghini is still considering this a concept car and are making decisions about tire size and engine type. The Urus seats four people.</p>
               
                  </ul>                                   
                </div>
               
              </div>            
            </div>
          </div><div class="panel-group responsive visible-xs visible-sm" id="collapse-myTab"><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-myTab" href="product-detail.php#collapse-tab1" aria-expanded="true">Tech. info</a></h4></div><div id="collapse-tab1" class="panel-collapse collapse in" aria-expanded="true" style=""></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-myTab" href="product-detail.php#collapse-tab2">Interior</a></h4></div><div id="collapse-tab2" class="panel-collapse collapse"></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-myTab" href="product-detail.php#collapse-tab3">Extras</a></h4></div><div id="collapse-tab3" class="panel-collapse collapse"></div></div></div>
                 
    
          <div class="r-bg">
            <h3>Comments</h3>
            <div class="comments-container">
              <ul class="blog-post-comments">
                  <li>                    
                    <span class="user-image"><i class="fa fa-user"><image src=femaleuser.png></i></span>
                    <span class="user-name">Sonali</span>
                    <span class="date"><i class="fa fa-clock-o"></i>01.09.2016</span>
                    <span class="comment">Pretty good for family use..</span>
                    
                    </li>
                  <li>                    
                    <span class="user-image"><i class="fa fa-user"><img src=maleuser.png></i></span>
                    <span class="user-name">Rohan</span>
                    <span class="date"><i class="fa fa-clock-o"></i>07.09.2016</span>
                    <span class="comment">Ride, control, driving comfort,Same mileage I got continuously with AC, one of the excellent things is ECO light follow it perfectly ..</span>
                    
                    </li>                  
                    <li><ul><li>
                    <span class="user-image"><i class="fa fa-user"><img src=maleuser.png></i></span>
                    <span class="user-name">Rishabh</span>
                    <span class="date"><i class="fa fa-clock-o"></i>17.09.2016</span>
                    <span class="comment">Its build up on brio platform ,  it should be on JAZZ platform, gear shifting required to improve as it's  not comfortable.</span>
                                     
                    </li></ul></li>
                  
                    <li><ul><li><ul><li>
                    <span class="user-image"><i class="fa fa-user"><img src=femaleuser.png></i></span>
                    <span class="user-name">Manjot</span>
                    <span class="date"><i class="fa fa-clock-o"></i>18.09.2016</span>
                    <span class="comment">Seating comfort is good enough, headrest is lacking, CD player is not avail initially feel bed but after using found very well with pendrive, Remote is necessary with driver. Sound quality so accoustic.</span>
                    
                    </li></ul></li></ul></li>
                    <li>                    
                    <span class="user-image"><i class="fa fa-user"><img src=femaleuser.png></i></span>
                    <span class="user-name">Simran</span>
                    <span class="date"><i class="fa fa-clock-o"></i>18.09.2016</span>
                    <span class="comment">Good enough..</span>
                                     
                    </li>
                </ul>
                
                                  
            </div>
          </div>
    
    </div>
        
    <div class="col-sm-4">
          <div class="r-bg">
          <div class="widget">
            <h3><?php echo $arr_card['BRAND'].$arr_card['MODEL']; ?></h3>
            <div class="car-detail-info">
              <div class="title">Price: Rs.<?php echo $arr_card['PRICE']; ?>Lc</div>
              <ul class="car-detail-info-list">
                <li><strong>ID:</strong><?php echo $arr_card['ID']; ?></li>
                <li><strong>Engine Size:</strong> <?php echo $arr_card['ENGINE_SIZE']; ?></li>
                <li><strong>Fuel:</strong> <?php echo $arr_card['FUEL']; ?></li>
                <li><strong>Doors:</strong> <?php echo $arr_card['DOORS']; ?></li>
                <li><strong>Mileage:</strong> <?php echo $arr_card['MILEAGE']; ?></li>
                <li><strong>Gearbox:</strong> <?php echo $arr_card['GEARBOX']; ?></li>
                <li><strong>Location:</strong> <?php echo $arr_card['CITY']; ?></li>
                <li><strong>Year:</strong> <?php echo $arr_card['YEAR']; ?></li>
              </ul>  
            </div>
          </div>
          </div>
          
          <div class="r-bg">
            <div class="widget">
            <h3>Private Message to Dealer</h3>
			<h6>(Message will be sent by us)</h6>
            <form role="form" id="ajax-form" action="php/dealer_contact.php" method="post">
              <div class="row">
                <div class="form-group form-group-small col-xs-12 col-sm-12 col-md-12">
                  <label for="name11" class="label-small">Name</label>
                  <input  name = "name" type="text" class="form-control" id="name" placeholder="Enter name">
<div class="error" id="err-name" style="display: none;">Please enter name</div>
              </div>
                </div>
                <div class="form-group form-group-small col-xs-12 col-sm-12 col-md-12">
                  <label for="email11" class="label-small">E-mail</label>
                  <input name = "email" type="email" class="form-control" id="email" placeholder="Enter email">
<div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
              </div>
                </div>          
                    
                <div class="form-group form-group-small col-xs-12 col-sm-12 col-md-12">
                  <label for="message22" class="label-small">Message</label>
                  <textarea name = "message" class="form-control" id="message" name="message" onblur="if(this.value == &#39;&#39;) this.value=&#39;Message&#39;" onfocus="if(this.value == &#39;Message&#39;) this.value=&#39;&#39;">Message</textarea>
                 <div class="error" id="err-message" style="display: none;">Please enter message</div>
</div>
<div class="row">            
              <div class="col-xs-12">
            <div id="ajaxsuccess">E-mail was successfully sent.</div>
            <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
            <div class="error" id="err-timedout">The connection to the server timed out!</div>
            <div class="error" id="err-state"></div>           
 

                <div class="form-group form-group-small col-xs-12 col-sm-12 col-md-12">
                  <button type="submit" class="btn btn-default col-xs-12" id="send">Submit</button>
                </div>
              </div>            
            </form>

          </div>
          </div>
          
          
          
          
          <div class="r-bg">
          <div class="widget">
            <h3>Share</h3>
            <ul class="colored-social-icons">
              <li><a href="https://web.facebook.com/Motowise-best-place-to-purchase-a-car-1200333146700208/?fref=ts" rel="external" class="facebook" target="_blank"><i class="fa fa-facebook"></i><img src=fbsquare.png></a></li>
              <li><a href="https://plus.google.com/u/0/109424999340692254679" rel="external" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i><img src=googleplus.png></a></li>
              <li><a href="index.php#" rel="external" class="google-plus" target="_blank"><i class="fa fa-google-plus"><img src=github.png></i></a></li>  
             
          </div>
          </div>
          

          
          <div class="r-bg">
            <div class="widget">
            <h3>Private Message to Dealer</h3>
			<h6>(Message will be sent by us)</h6>
            <form role="form" id="ajax-form" action="php/mail-it.php" method="post">
              <div class="row">
                <div class="form-group form-group-small col-xs-12 col-sm-12 col-md-12">
                  <label for="name11" class="label-small">Name</label>
                <input class="form-control input-lg" id="name11" name="name" onblur="if(this.value == &#39;&#39;) this.value=&#39;Name&#39;" onfocus="if(this.value == &#39;Name&#39;) this.value=&#39;&#39;" type="text" value="Name">
<div class="error" id="err-name			