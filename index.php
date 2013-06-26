<?php
include ("includes/db.php");
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
  	<meta name="viewport" content="width=device-width" />

	<title>Locals Breaking News!</title>
	
  	<link rel="stylesheet" href="css/foundation.css" />
  	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/style.css" />
	<link href='css/mapbox.css' rel='stylesheet' />
	
  	<script src="js/custom.js"></script>
  	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="js/pinterest.js"></script>
	<script type="text/javascript" src="js/jquery.form.js"></script>
	<script type="text/javascript" src='js/mapbox.js'></script>

	<script type="text/javascript" >
	$(document).ready(function() { 
		
		$('#photoimg').live('change', function(){ 
			
			$("#preview").html('');
			$("#current").hide();
			$("#preview").html('<img src="css/ajax-loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
				
				target: '#preview'
				
			}).submit();
		
		});
	}); 
	</script>
</head>

<body>

	<div style="position:fixed; top:75px; left:15px;"><img align=absmiddle width=120 src=./img/icon.png></div>
	
  	<nav class="top-bar"><!-- Header and Nav -->
  	
    	<ul class="title-area"><!-- Title Area -->
    	
      		<li class="name">
        		<h1><a href="http://QuickAsian.com">QuickAsian.com</a></h1>
      		</li>
      		<li class="toggle-topbar menu-icon">
      			<a href="#"><span>Menu</span></a>
      		</li>
      		
    	</ul>

  		<section class="top-bar-section"><!-- Right Nav Section -->
  		
      		<ul class="right">
        		<li class="divider"></li>
        		<li class="has-dropdown"><a href="#">Wawan B. Setyawan </a>
          			<ul class="dropdown">
          				<li class="title back js-generated">
          					<h5><a href="#">« Back</a></h5>
          				</li>
            			<li><label>Login</label></li>
            			<li><a href="#">Change Password</a>
                		<li><a href="#">Logout</a></li> 
            			<li class="divider"></li>
            			<li><label>Preferences</label></li>
            			<li><a href="#">Edit Profile</a>
                		<li><a href="#">Statistics</a></li> 
          			</ul>
        		</li>
      		</ul>
      		
    	</section>
    	
    </nav>
  
	<div class="row"><!-- Start Maps Section -->
	
		<div class="large-12 columns">
			<div id='map' style="border-radius: 10px; border:1px solid #becede; width:100%; height:220px;"></div>
		</div>
		
	</div>

	<br>
	
	<div class="row"><!-- Start Grid Section -->
		
		<div class="large-4 columns" style="text-align:right;"><img src=img/arrow.png> Point at place on maps then.. </div>
		<div class="large-6 columns">
			<input type='text' id='pin_update' class='textbox' name='pin_update' placeholder='Type your story here...' maxlength='1000'/>
		</div>
				
		<div id='button_area' class="large-2 columns">
			<input type='submit' id='pin_submit' class='pin_button' value="Post!"/>
		</div>
	
	</div>
	
	<div class="row">		
					
		<div class="large-12 columns">
			<?php include ("load_pin.php"); ?>
		</div>

		<!--<div class="large-4 columns" style="text-align:center;">
		
			<div class="orbit-container orbit-stack-on-small">
    
    			<ul style="width: 600%; height: 388px; margin-left: -300%;" class="orbit-slides-container" data-orbit="">
    				<li data-orbit-slide="">
    					<iframe src="http://www.indiegogo.com/project/440096/widget/3343761" width="224px" height="486px" frameborder="0" scrolling="no"></iframe>
    				</li>
      				<li class="">
      					<img src="orbithome_files/1000x400text%2520img%25201.gif">
      				</li>
      				<li class="">
      					<img src="orbithome_files/1000x400text%2520img%25202.gif">
      				</li>
    			</ul>
    	
    		</div>
		
		</div> <!--end 4column-->
		
	</div><!-- End Grid Section -->

  	<footer class="row"><!-- Footer -->
  	
    	<div class="large-12 columns">
      		<hr>
      		<div class="row">
      		
        		<div class="large-6 columns">
          			<p>&copy; QuickAsian Breaking News, 2013</p>
        		</div>
        		
        		<div class="large-6 columns">
          			<ul class="inline-list right">
            			<li><a href="#">Career</a></li>
            			<li><a href="#">Contact</a></li>
          			</ul>
        		</div>
        		
      		</div>
    	</div>
    	
  	</footer>
  
  <script>
  document.write('<script src=' +('__proto__' in {} ? 'js/zepto' : 'js/jquery') +'.js><\/script>')
  </script>
  
  <script src="js/foundation.js"></script>
  
  <script>
    $(document).foundation();
  </script>
  
  <script type='text/javascript'>
	var map = L.mapbox.map('map', 'quickasian.map-w48td9qo').setView( [3.64, 114], 3 );
  </script>

</body>
</html>
