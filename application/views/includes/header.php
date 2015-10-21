<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url();?>resource/multi/Muli-ExtraLight.ttf' rel='stylesheet' type='text/css'>

	<!-- foundation css-->
	<link rel="stylesheet" href="<?php echo base_url();?>resource/foundation-icons/foundation-icons.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/foundation.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/media.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/font.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/animate.min.css" />
	
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/style.css" />
	
	
	<!-- foundation js-->
	<script src="<?php echo base_url();?>resource/js/foundation.min.js"></script>
	<script src="<?php echo base_url();?>resource/js/blur.js"></script>
    <script src="<?php echo base_url();?>resource/js/vendor/modernizr.js"></script>
	<script src="<?php echo base_url();?>resource/js/vendor/jquery.js"></script>
	<script src="<?php echo base_url();?>resource/js/jquery.scrolly.js"></script>
	<script src="<?php echo base_url();?>resource/js/foundation/foundation.orbit.js"></script>
	
    <script src="<?php echo base_url();?>resource/js/custom.js"></script>



	<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
	</script>

	<script>
		$(document).foundation();
	</script>
	
	<!-- jquery ui script -->
	  <script>
		  $(function() {
			$( "#accordion").accordion();
		  });

	  </script>
	  
	  <style>
          
      </style>
	   

  </head>
  <body>
  
  	
	<div class="row">

			<div class="fixed contain-to-grid">
				<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true">
					<ul class="title-area">
						<li class="sitelogo">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>resource/images/Logo.png"/></a>
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
                                    <li><a href="<?php echo base_url();?>en/regional/"><span><img class="menu_icon" src="<?php echo base_url();?>resource/images/regional.png"></span>Regional</a></li>
                                    <li><a href="<?php echo base_url();?>en/bangladesh/"><span><img class="menu_icon" src="<?php echo base_url();?>resource/images/bangladesh.png"></span>Bangladesh</a>                                       </li>
                                </ul>
                            </li>

                            <li class="divider"></li>
                            <li class="has-dropdown"><a href="#">Development News</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>en/adb_news/">ADB News</a></li>
                                    <li><a href="<?php echo base_url();?>en/seventh_fifth_year_plan/">7th 5 year Plan of Bangladesh</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url();?>en/bangladesh_index/">HDI of Bangladesh</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url();?>en/development_initiative/">Development Initiative</a></li>
                            <li class="divider"></li>
                            <li class="has-dropdown"><a href="#">Success Story</a>
                                <ul class="dropdown">
                                    <li><a href="#"><span><img class="menu_icon" src="<?php echo base_url();?>resource/images/logo_bd.png"></span>Govt</a></li>
                                    <li><a href="#"><span><img class="menu_icon" src="<?php echo base_url();?>resource/images/Private.png"></span>Private</a></li>
                                    <li class="has-dropdown">
                                        <a href="#">Development Partner</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url();?>en/adb_projects/">ADB Projects</a></li>

                                            <li><a href="<?php echo base_url();?>en/world_bank_projects/">World Bank Projects</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="has-dropdown"><a href="#">Development Blog</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>en/blog/">Blog</a></li>
                                    <li class="has-dropdown"><a href="#">Corner</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url();?>en/faq/">FAQ</a></li>

                                            <li><a href="<?php echo base_url();?>en/opinion">Opinion</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">Opportunity/procurement</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>en/job_news/">Job News</a></li>
                                    <li><a href="<?php echo base_url();?>en/tender/">Tender</a></li>
                                </ul>
                            </li>

                            <li data-toggle="modal" data-target="#myModal"><a href="#">Login</a></li>
                        </ul>
					</section>
				</nav>
				<!-- end desktop navigation -->

			</div>	
    </div>
