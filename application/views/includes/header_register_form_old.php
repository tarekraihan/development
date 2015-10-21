<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<link href='multi/Muli-ExtraLight.ttf' rel='stylesheet' type='text/css'>

	<!-- foundation css-->
	<link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/media.css" />
	
	<link rel="stylesheet" href="css/animate.min.css" />
	
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css" />
	
	
	<!-- foundation js-->
	<script src="js/foundation.min.js"></script>
	<script src="js/blur.js"></script>
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/jquery.js"></script>
	<script src="js/jquery.scrolly.js"></script>
	<script src="js/foundation/foundation.orbit.js"></script>
	
	<script type="text/javascript" src ="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6v5-2uaq_wusHDktM9ILcqIrlPtnZgEk&sensor=false">         </script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
    <script src="js/custom.js"></script>

    <script>
							$(function() {
					$('#row_dim').hide(); 
					$('#row_dim1').hide(); 
				    $('#row_dim2').hide(); 
					
					$('#type').change(function(){
						if($('#type').val() == 'Organization') {
							<!-- $('#row_dim').show(); -->
							$("#row_dim").slideToggle("slow");						
						} else {
							$('#row_dim').hide();
													
						} 
					});
					
					
					$('#type').change(function(){
						if($('#type').val() == 'Individual') {
							$('#row_dim1').slideToggle("slow");
						} else {
							$('#row_dim1').hide(); 
						} 
					});
					
						$('#type').change(function(){
						if($('#type').val() == 'Student') {
							$('#row_dim2').slideToggle("slow");
						} else {
							$('#row_dim2').hide(); 
						} 
					});
				});
		</script>
	   

  </head>
  <body>
  
  	
	<div class="row">

			<div class="fixed contain-to-grid">
				<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true">
					<ul class="title-area">
						<li class="sitelogo">
							<a href="../index.php"><img src="images/Logo.png"/></a>
						</li>  
						
						<li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
						</li>
					</ul>

					<section class="top-bar-section">
						<!-- Right Nav Section -->
						<ul class="right">
							<li class="divider"></li>
							
							<li class="has-dropdown"><a href="#">Development Gateway</a>
								<ul class="dropdown">
									<li><a href="../regional.php"><span><img class="menu_icon" src="images/regional.png"></span>Regional</a></li>
									<li class="divider"></li>
									<li><a href="../bangladesh.php"><span><img class="menu_icon" src="images/bangladesh.png"></span>Bangladesh</a>                                       </li>
								</ul>
							</li>
							
							<li class="divider"></li>
							<li class="has-dropdown"><a href="#">Development News</a>
								<ul class="dropdown">
									<li><a href="../adbnews.php">ADB News</a></li>
									<li class="divider"></li>
									<li><a href="../7th5thyear.php">7th 5 year Plan of Bangladesh</a></li>
								</ul>
							</li>
							<li class="divider"></li>
							<li><a href="../bangladesh_index.php">HDI of Bangladesh</a></li>
							<li class="divider"></li>
							<li><a href="../blog.php">Development Initiative</a></li>
							<li class="divider"></li>
							<li class="has-dropdown"><a href="#">Success Story</a>
								<ul class="dropdown">
									<li><a href="#"><span><img class="menu_icon" src="images/logo_bd.png"></span>Govt</a></li>
									<li class="divider"></li>
									<li class="has-dropdown">
                                        <a href="#"><span><img class="menu_icon" src="images/Private.png"></span>Private</a>
									    <ul class="dropdown">
                                            <li><a href="../adb_projects.php">ADB Projects</a></li>
							                <li class="divider"></li>
                                            <li><a href="../worldbank_project.php">World Bank Projects</a></li>
                                        </ul>
									</li>
								</ul>
							</li>
							<li class="divider"></li>
							<li class="has-dropdown"><a href="#">Development Blog</a>
                                <ul class="dropdown">
							        <li><a href="../blog.php">Blog</a></li>
									<li class="divider"></li>
									<li class="has-dropdown"><a href="#">Corner</a>
									    <ul class="dropdown">
									        <li><a href="#">FAQ</a></li>
							                <li class="divider"></li>
                                            <li><a href="#">Opinion</a></li>
									    </ul>
									</li>
								</ul>
							</li>
							<li><a href="../login.php">Login</a></li>
						</ul>
					</section>
				</nav>
			<!-- end desktop navigation -->

	</div>	
      </div>
