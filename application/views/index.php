<?php
$feedback="";
if(isset($_POST["btnSubmit"])){
$name=$_POST["txtName"];
$to="tarekraihan@yahoo.com";
$phone=$_POST["txtPhone"];
$email=$_POST["txtEmail"];

$subject=$_POST["txtSubject"];
$message=$_POST["txtMessage"];

$message1 = '
<html>
<head>
  <title>Message from Bangladesh Gateway</title>
</head>
<body>
  <p>Message from '.$name.' </p>
  <p>Message from '.$phone.' </p>
  <p>Message from '.$email.' </p>
  <br/>
  <p>
  Message : '.$message.'
  </p>
</body>
</html>
';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$result=mail($to, $subject, $message, $headers);

if($result)
{
	$feedback="Mail Successfully Send !!!";	
}



}
?>	

	
	<!-- Login sidemenu 
	<a href="login.php" class="login">
	    <p>Login/Register</p>
	</a>
	-->
	<div class="section_01">
		<div class="row fullWidth">
			<div class="small-12 medium-4 large-offset-8 large-4 large-offset-8 columns">
				<div class="row section_01_content_bg animated fadeInUp">
				    <div class="small-12 medium-12 large-12 columns">
				        <div class="orbit-container">
                               <ul class="example-orbit-content" 
                                    data-orbit data-options="animation:slide;
                                    animation_speed:1000;
                                    pause_on_hover:true;
                                    resume_on_mouseout:true;
                                    animation_speed:700;
                                    timer_speed: 4000;
                                    navigation_arrows:false;
                                    slide_number:false;
                                    bullets:true;
                                    timer_progress_class: none;">
                                 
                                  <li data-orbit-slide="headline-1">
                                                                       
                                    <div class="small-12 medium-12 large-12 columns">
                                        <div>
											<h3 class="slider_title">ADB Extends New Loan</h3>
											<p class="copper text-justify">ADB is providing a $45 million loan and the Government of the Netherlands is expected to provide a grant of $7 million, to be administered by ADB, to increase the scope of the Southwest Area Integrated Water Resources Planning and Management Project.  ADB provided $20 million and the Government of the Netherlands provided $12.5 million for the original project, which was approved in 2005 and has renovated dilapidated infrastructure and established water management organizations with broad community participation.
											<br/>ADB is providing a $45 million loan and the Government of the Netherlands is expected to provide a grant of $7 million, to be administered by ADB.</p>
                                        </div>
                                    </div>
                                  </li>
                                  
                                  <li data-orbit-slide="headline-1">
                                                                       
                                    <div class="small-12 medium-12 large-12 columns">
                                        <div>
											<h3 class="slider_title">ADB Extends New Loan</h3>
											<p class="copper text-justify">ADB is providing a $45 million loan and the Government of the Netherlands is expected to provide a grant of $7 million, to be administered by ADB, to increase the scope of the Southwest Area Integrated Water Resources Planning and Management Project.  ADB provided $20 million and the Government of the Netherlands provided $12.5 million for the original project, which was approved in 2005 and has renovated dilapidated infrastructure and established water management organizations with broad community participation.
                                                <br/>ADB is providing a $45 million loan and the Government of the Netherlands is expected to provide a grant of $7 million, to be administered by ADB.
                                        </div>
                                    </div>
                                  </li>
                                  
                                  <li data-orbit-slide="headline-1">
                                                                       
                                    <div class="small-12 medium-12 large-12 columns">
                                        <div>
											<h3 class="slider_title">ADB Extends New Loan</h3>
											<p class="copper text-justify">ADB is providing a $45 million loan and the Government of the Netherlands is expected to provide a grant of $7 million, to be administered by ADB, to increase the scope of the Southwest Area Integrated Water Resources Planning and Management Project.  ADB provided $20 million and the Government of the Netherlands provided $12.5 million for the original project, which was approved in 2005 and has renovated dilapidated infrastructure and established water management organizations with broad community participation.
                                                <br/>ADB is providing a $45 million loan and the Government of the Netherlands is expected to provide a grant of $7 million, to be administered by ADB.
                                        </div>
                                    </div>
                                  </li>
                                </ul>
                        </div>
                    </div>
                    
				<!-- developmentgate way style
					<div class="small-12 medium-8 large-8 columns section_01_content_left">
							<p class="section_title opensans no-margin text-right">empowering practitioners, governments, and citizens with the knowledge they need</p>
							<p class="section_tilte_large opensans no-margin text-right">to improve lives</p>
					</div>
					
					<div class="small-12 medium-4 large-4 columns">
						<img src="images/world-globe.png"/>
						<p class="white_text opensans">Four Regions | One Goal </p>
					</div>
				</div>
				
				-->
			</div>
		</div>
	</div>
    </div> <!-- section01 end -->
	
	<div class="section_02" id="about">
           <p class="section01_tilte_large text-center">Bangladesh Gateway</p>
            <div class="row">
                <div class="small-12 medium-7 large-7 columns">
                    <p class="text-justify padding_14">Bangladesh Gateway is a non-profit, development oriented research institution devoted to speed up the socio-economic development of the country by delivering information to the government & its policy makers, non-government organizations, practitioners, research & development institutions, university researchers and related development entities who wants to contribute in the development process of Bangladesh through extensive research and collaboration.</br>
Whether it is a matter of reaching the Millennium Development Goal (MDG) or increasing the GDP growth today's development progression always requires extensive knowledge, research, innovation, collaboration and cultivation of proper skills of delivering information. Bangladesh Gateway is committed to integrate the development information into a single portal to involve all the development entities in achieving the common goals.
</p>
                </div>
                
                <div class="small-12 medium-5 large-5 columns">
                   <img class="section_02_left_bg" src="<?php echo base_url();?>resource/images/About-BG-Page.png"/>
                </div>
            </div>
	</div>
	
	<div class="section_03">
		
		<div class="row">
			<div class="small-12 medium-10 medium-centered large-10 large-centered columns no-padding white_text">
			    <p class="section_tilte_large text-center">Participate With Us &</br> Execute The Vision of Development Together</p>
		
		        <div class="row" data-equalizer>
                  <div class="large-4 medium-4 small-12 columns panel dark_blue" data-equalizer-watch>
                        <p class="text-center white_text section_03_panel_text">Bangladesh Gateway invites development organizations (both national and international), policy makers, general practitioners, researchers and general people to work with us jointly in the development progression of Bangladesh.
                      </p>
                  </div>
                  
                  <div class="large-4 medium-4 small-12 columns panel dark_orange" data-equalizer-watch>
                        <p class="text-center section_03_panel_text">We encourage sign up engagement as well as the voice of common people who wants to volunteer and speak up in development initiatives.
                      </p>
                  </div>
                  
                  <div class="large-4 medium-4 small-12 columns panel dark_green" data-equalizer-watch>
                        <p class="text-center white_text section_03_panel_text">We believe in team work & mutual acheivement & value every aspect of partcipation. We will truely appreciate your involvement in accomplishing the common goal.
                      </p>
                  </div>
                </div>
			</div>
		</div>
		
		<!-- parners section 
		
		<div class="row">
			<div class="small-12 small-centered medium-10 medium-centered large-10 large-centered columns">
				<ul class="partners inline-list">
					<li class="partners_list"><img src="images/wbg_logo_white.png"/></li>
					<li class="partners_list"><img src="images/adb_logo_small.png"/></li>
					<li class="partners_list"><img src="images/usaid_logo_white.png"/></li>
					<li class="partners_list"><img src="images/esri_logo_white.png"/></li>
				</ul>
			</div>
		</div>
		
		-->
		
	</div>
	
	<div class="section_04">
	    <div class="row">
            <div class="small-12 small-centered medium-10 medium-centered large-10 large-centered columns">
                <span><i class="fa fa-envelope-o frontpage_icon"></i></span><span class="section_tilte_large white_text">Contact Us</span>

                <div class="row" data-equalizer>
                    <div class="small-12 large-7 medium-7 columns">
                        <div data-equalizer-watch>
                        <form action="#" method="post">
                            <div class="row">
                            <div class="small-12 large-6 medium-6 columns padding_right_form_inline">
                                   <?php echo "$feedback"; ?>
                                </div>
                                <div class="small-12 large-6 medium-6 columns padding_right_form_inline">
                                     <input type="text" placeholder="Enter Your Name" name="txtName" />
                                </div>

                                <div class="small-12 large-6 medium-6 columns padding_left_form_inline">
                                     <input type="text" placeholder="Enter Your Phone No." name="txtPhone" />
                                </div>
                            </div>

                            <input type="text" placeholder="Email" name="txtEmail" />

                            <input type="text" placeholder="Subject" name="txtSubject" />

                            <textarea style="min-height:170px;" placeholder="Your Comments" name="txtMessage"></textarea>
                        </div>
                        
                        <input type="submit" class="button tiny success radius margin_top_bottom15" value="Submit" name="btnSubmit">
                        
                    </div>
                    
                    </form>
                    <div class="small-12 large-5 medium-5 columns panel " data-equalizer-watch>
                        <address class="text-left">
							<b>Address : </b><br>
							50, Habib Super Market (3rd Floor)
							Gulshan South Avenue, Gulshan Circle-1<br>
							Dhaka-1212, Bangladesh<br>
							<b>Email : </b><br>
							info@bangladesgagteway.com<br>
							index@indexbd.org<br>
							
							<b>Phone: </b><br>
							+88 (02) 9850847- 49, 9850856<br>

						</address>
                    </div>
                </div>
            </div>
        </div>
	</div>

	