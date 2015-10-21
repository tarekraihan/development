<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url();?>resource/multi/Muli-ExtraLight.ttf' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	
	
	<!-- foundation css-->
	<link rel="stylesheet" href="<?php echo base_url();?>resource/foundation-icons/foundation-icons.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/foundation.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/media.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/animate.min.css">
		
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/jquery-ui.css">
	
	<link rel="stylesheet" href="<?php echo base_url();?>resource/css/style.css" />

	
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
   
	<!-- foundation js-->
	<script src="<?php echo base_url();?>resource/js/blur.js"></script>
    <script src="<?php echo base_url();?>resource/js/vendor/modernizr.js"></script>
	
	<script src="<?php echo base_url();?>resource/js/foundation.min.js"></script>

	
	<style>
    .canvasjs-chart-credit {
	                       display: none;
                            }  
    </style>
	
	<script>
	  $(function() {
		$(".accordion li").on("click", "a:eq(0)", function (event) {
			var li_parent = $(this).parent();

				if (li_parent.hasClass('active')) {
					$(".accordion li div.content:visible").slideToggle("normal");
				} else {
					$(".accordion li div.content:visible").slideToggle("normal");
					$(this).parent().find(".content").slideToggle("normal");
				}
			});
	  }); 
	  
  </script>

	<script>
		$(document).ready(function(){
			$("top-bar-section ul li a").click(function(){
				$(this).toggleClass( "active" );	
			});
		});
		

	</script>
	
	<script>
		$(document).foundation();
	</script>
	
	<!-- js for chart/graph in index page -->
	
	<script type="text/javascript">
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer",
        {
            animationEnabled: true,
            title:{
                text: "Trends 1980 - Present",
                fontFamily: "open sans",
                fontSize: 14,
                fontweight: "normal",
                fontColor: "orange"
            },
            data: [
            {
                type: "pie", //change type to bar, line, area, pie,doughnut etc
                showInLegend: false,        
                dataPoints: [
                    { label: "1980", y: 0.336 },
                    { label: "1990", y: 0.382},
                    { label: "2000", y: 0.453 },
                    { label: "2005", y: 0.492 },
                    { label: "2008", y: 0.515 },
                    { label: "2010", y: 0.539 },
                    { label: "2011", y: 0.549},
                    { label: "2012", y: 0.554},
                    { label: "2013", y: 0.558}
                ]
                },

            ],
            legend: {
                cursor: "pointer",
                itemclick: function (e) {
                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                }
                chart.render();
                }
            }
        });

        chart.render();
    }
    </script>
	

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

                            <li><a href="#">Login</a></li>
                        </ul>
					</section>
				</nav>
				<!-- end desktop navigation -->

			</div>	
    </div>