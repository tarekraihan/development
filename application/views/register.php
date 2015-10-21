<?php include 'header_register_form.php'; ?>
<?php 
	if(isset($_POST["btnRegister"])){
	  $registration_type=$_POST["registration_type"];
	  $organization_name=$_POST["txtOrgnizationName"];
	  $organization_type=$_POST["txtOrganizationType"];
	  $your_name=$_POST["txtYourName"];
	  $email=$_POST["txtEmail"];
	  $phone=$_POST["txtPhone"];
	  $password=$_POST["txtPassword"];
	  $confirm_password=$_POST["txtConfirmPassword"];
	  $first_name=$_POST["txtFirstName"];
	  $last_name=$_POST["txtLastName"];
	  $student_name=$_POST["txtStudentName"];
	  $db=new mysqli("localhost","root","","bangladeshgateway");
	  $db->query("insert into registration(type_name,your_name,organization_name,organization_type,student_name,first_name,last_name,email,phone,password,comfirm_password)
	  values('$registration_type','$your_name','$organization_name','$organization_type','$student_name','$first_name','$last_name','$email','$phone','$password','$confirm_password')");
		//echo $db->error;

		 echo "Successfull Saved!";
	}
?>

         <div class="row">
            <div class="large-12 large-centered medium-12 medium-centered small-12 columns" style="min-height: 600px; margin-top: 20px;">
            <form action="#" method="POST">
              Registration Please: 
        <select name="registration_type" id="type" style="margin-left:57px; width:153px;">
                <option value="select">Select Please</option>
                <option value="Organization">Organization</option>
                <option value="Individual">Individual</option>
				<option value="Student">Student</option>
        </select>                    
		<br/> <br/>
	
    <div class="row" id="row_dim">
		
		  <fieldset>
			<legend>Organization Registration</legend>
				 <div class="row">
						<div class="medium-8 medium-centered small-8 small-centered columns">
							  <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Organization Name</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtOrgnizationName" placeholder="Organization Name">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Organization Type</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtOrganizationType" placeholder="Organization Type">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Your Name</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtYourName" placeholder="Your Name">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Email</label>
									</div>
									<div class="small-9 columns">
									  <input type="email" id="right-label" name="txtEmail" placeholder="Email">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Phone</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtPhone" placeholder="Phone">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Password</label>
									</div>
									<div class="small-9 columns">
									  <input type="password" id="right-label" name="txtPassword" placeholder="Password">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Confirm Password</label>
									</div>
									<div class="small-9 columns">
									  <input type="password" id="right-label" name="txtConfirmPassword" placeholder="Confirm Password">
									</div>
							  </div>
							   <input type="submit" value="Register" name="btnRegister" class="button small button right" />
						</div>
				  </div>
		  </fieldset>
    </div>
    
	<div class="row" id="row_dim1">
		  <fieldset>
			<legend>Individual Registration</legend>
				 <div class="row">
						<div class="medium-8 medium-centered small-8 small-centered columns">
							  <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">First Name</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtFirstName" placeholder="First Name">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Last Name</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtLastName" placeholder="Last Name">
									</div>
							  </div>
							    <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Email</label>
									</div>
									<div class="small-9 columns">
									  <input type="email" id="right-label" name="txtEmail" placeholder="Email">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Phone</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtPhone" placeholder="Phone">
									</div>
							  </div>
							 
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Password</label>
									</div>
									<div class="small-9 columns">
									  <input type="password" id="right-label" name="txtPassword" placeholder="Password">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Confirm Password</label>
									</div>
									<div class="small-9 columns">
									  <input type="password" id="right-label" name="txtConfirmPassword" placeholder="Confirm Password">
									</div>
							  </div>
							   <input type="submit" value="Register" name="btnRegister" class="button small button right" />
						</div>
				  </div>
		  </fieldset>
    </div>
	
	<div class="row" id="row_dim2">
		  <fieldset>
			<legend>Student Registration</legend>
				 <div class="row">
						<div class="medium-8 medium-centered small-8 small-centered columns">							
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Student Name</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtStudentName" placeholder="Student Name">
									</div>
							  </div>
							 
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Email</label>
									</div>
									<div class="small-9 columns">
									  <input type="email" id="right-label" name="txtEmail" placeholder="Email">
									</div>
							  </div>
							    <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Phone</label>
									</div>
									<div class="small-9 columns">
									  <input type="text" id="right-label" name="txtPhone" placeholder="Phone">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Password</label>
									</div>
									<div class="small-9 columns">
									  <input type="password" id="right-label" name="txtPassword" placeholder="Password">
									</div>
							  </div>
							   <div class="row">
									<div class="small-3 columns">
									  <label for="right-label" class="right inline">Confirm Password</label>
									</div>
									<div class="small-9 columns">
									  <input type="password" id="right-label" name="txtConfirmPassword" placeholder="Confirm Password">
									</div>
							  </div>
							  <input type="submit" value="Register" name="btnRegister" class="button small button right" />
						</div>
				  </div>
		  </fieldset>
		</form>
    </div>

             
            
            </div>
         </div>


<?php include 'footer.php'; ?>