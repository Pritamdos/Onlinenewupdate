<?php
/*  Comment Added
	session_start();
	if($_SESSION['email']){
	}
	else{
	  header("location: login.php");
    }

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "oah";
   
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$temp_email = $_SESSION['email'];
	
	$ord_sql = "SELECT * FROM `order_form_data` where email = '$temp_email';";
	$ord_result = $conn->query($ord_sql);

	
	$sql = "SELECT * FROM `register_form_data` WHERE email = '$temp_email';";
   $result = $conn->query($sql);
   
	   if ($result->num_rows > 0){
		  $row = mysqli_fetch_array($result);
			  $name = $row['name'];
			  $email = $row['email'];
			  $phone = $row['phone'];
			  $education = $row['education'];   
	   }
	
	if(!$ord_result || !$result){
		die ('SQL Error: ' . mysql_error($conn));
	}
Comment Ended */
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Global Essay, Dissertation and Assignment Help </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta title="Looking for online essay, thesis or dissertation help? OnlineAssignmenthelp.com is your destination. We offer global assignment help service for all subjects at unbelievably cheap price.
         ">
      <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/font.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/animated.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/scrollanimations.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   
   <body class="users">
   
      <!--- Header --->
      <div class="onl-header-section userpages-headers" id="top">
			<div class="nav-headers userpages">
      	   <div class="logo-onli">
               <a href="index.php">
                  <img src="./assets/images/OAH-newLogo.png" class="logg" />
               </a>
            </div>
          
				<a href="#" class="nav-button">
				 <i class="fa fa-bars" aria-hidden="true"></i>
			   </a>
			   
			   <div class="nav-order">
				   <nav class="nav">
						<ul>
							<li class="nav-submenu">	
							   <a href="#">
								   Services
								   <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
								   <i class="material-icons drop-arrow">expand_more</i>
								</a>
								
								<ul class="mega-menus">
								
								</ul>
				         </li>
						   
						   <li>
								<a href="order.php"> Order Now </a>
							</li>
							
							<li>
								<a href="experts.php">Experts</a>
							</li>
							
							<li>
							  <?php /* echo $_SESSION['email']; */ ?>
							</li>
							
							<li>
								<button type="submit" onclick="window.location.href='logout.php'" class="order-now-users">
									Logout
								</button>
							</li>
				      <ul>
			      </nav>
				</div>
         </div>
		</div>
	   <!--- Header Ended --->
	   
	   <!--- Notification Started --->
	   
	   <div class="onl-banner-sections">
         <div class="onl-inrs-banner-sections-login-signups">
				<?php include './notification.php'?>
         </div>
      </div>
	   
	   <!--- Notification Ended ---> 

	   
	   <!--- Dashboard Started --->  

      <div class="user-dashboard-sections">
         
		   <div class="left-uer-sectionss">
             <ul class="tab__head">
					<li rel="tab1"  class="ecg-list active">
					   <a href="javascript:void(0);" class="linl">
							Personal Informations
                   </a>
					</li>
					
					<li rel="tab2"  class="ecg-list">
					   <a href="javascript:void(0);"  class="linl">
							History Details
					   </a>
					</li>
					   
					<li rel="tab3"  class="ecg-list">
						<a href="javascript:void(0);" class="linl">
								Change Password
						</a>
					</li>
             </ul>
         </div>

         <div class="right-uer-sections">
            <div class="tab__container">
                <div id="tab1" class="tab__content">
					   <div class="tab-content-profile">
						   <div class="profile-user-details-info">
								<span class="usser-profiles-details-items">
								  <span class="usr-info-icons">
									   <img src="./assets/images/users.jpg" />
										<span class="changes-profiles-sec">
										  <i aria-hidden="true" class="fa fa-pencil edd"></i>Change
										</span>
								  </span>
								</span>
							   
							   <div class="form-sections-profiles">
									<form action="connection.php" method="post">
									   <div class="form-inner-sections-profiles">
											
											<div class="each-rows-inputs">
											   <input type="text" id="pname" name="pname" />
												<span class="users-pp">
													<i class="fa fa-user" aria-hidden="true"></i>
												</span>
												<span class="edit-data">
													<i class="fa fa-pencil" onclick="checkname()" value="disable/enable" aria-hidden="true"></i>
												</span>
										   </div>
										
											<div class="each-rows-inputs">
												<input type="email" id="pemail" name="pemail" disabled />
												<span class="users-pp">
													<i class="fa fa-envelope" aria-hidden="true" ></i>
												</span>
												<span class="edit-data">
													<i class="fa fa-pencil" onclick="checkemail()" value="disable/enable" aria-hidden="true"></i>
												</span>
											</div>
											
										   <div class="each-rows-inputs">
												<input type="text" id="pphone" name="pphone" />
												<span class="users-pp">
													<i class="fa fa-mobile" aria-hidden="true"></i>
												</span>
												<span class="edit-data">
													<i class="fa fa-pencil" onclick="checkphone()" value="disable/enable" aria-hidden="true"></i>
												</span>
										   </div>
										  
											<div class="each-rows-inputs">
												<input type="text" id="peducation" name="peducation" />
												<span class="users-pp">
													<i class="fa fa-map-marker" aria-hidden="true"></i>
												</span>
												<span class="edit-data">
													<i class="fa fa-pencil" onclick="checkeducation()" value="disable/enable" aria-hidden="true"></i>
												</span>
											</div>
											
											<input type = "hidden" id="pvalidate" name="pvalidate" value = "<?php /* echo $_SESSION['email']; */ ?>" /> 
										  
											<div class="submit-buttin-sections">
												<button type="submit" id="updateprofile" name="updateprofile" class="save">
													Save
												</button>
											</div>
									   </div>
									</form>   
							   </div>
                            </div> 
					   </div>					  
                </div>
				   
					<div id="tab2" class="tab__content">
					   <div class="table-users">
						   <table cellspacing="0">
								<tr class="table-headins">
								   <th>Unique Id</th>
								   <th>Name</th>
								   <th>Email</th>
								   <th>Phone</th>
								   <th>Number of Pages</th>
								   <th>Deadline</th>
								   <th>Higher Education</th>
								   <th>Style</th>
								   <th width="230">Description</th>
								   <th >File Uploaded</th>
								   <th >Created On</th>
								</tr>
								<tbody>	
								   <?php
								    /*  Comment Added 
									  while ($row = mysqli_fetch_array($ord_result))
									  {
										$files_field= $row['filepath'];
										$files_show= "Uploads/$files_field";	
										echo '<tr class="each-rows-secss">
													<td>'.$row['orderid'].'</td>
													<td>'.$row['name'].'</td>
													<td>'.$row['email'].'</td>
													<td>'.$row['phone'].'</td>
													<td>'.$row['page_count'].'</td>
													<td>'.date('F d, Y',strtotime($row['deadline'])).'</td>
													<td>'.$row['study_level'].'</td>
													<td>'.$row['style'].'</td>
													<td>'.$row['description'].'</td>
													<td><a href='.$files_show.'>'.$files_field.'</td>
													<td>'.$row['timestamp'].'</td>
											   </tr>';
									  }
									Comment Ended */ 
								   ?>
								</tbody>
						   </table>
					   </div>
				   </div>
				   
				   <div id="tab3" class="tab__content">
					   <div class="tab-content-profile">
							<div class="profile-user-details-info">
								<div class="change-pass chg-d">
								   <span class="history-details">Change Password</span>
								</div>
							   
							    <form action="connection.php" method="post"> 
								    <div class="form-sections-profiles">
									   <div class="form-inner-sections-profiles">
										   <div class="each-rows-inputs">
												<input type="password" id="old_pass" name="old_pass" placeholder="Enter Old Password" required="true" />
												<span class="users-pp">
													<i class="fa fa-unlock-alt" aria-hidden="true"></i>
												</span>
										   </div>
										  
											<div class="each-rows-inputs">
												<input type="password" id="new_pass" name="new_pass" placeholder="Enter New Password" required="true" />
												<span class="users-pp">
													<i class="fa fa-unlock-alt" aria-hidden="true"></i>
												</span>
											</div>
										  
										   <div class="each-rows-inputs">
												<input type="password" id="conf_pass" name="conf_pass" oninput="checkPasscode();" placeholder="Re-Type Password" required="true" />
												<span class="users-pp">
													<i class="fa fa-unlock-alt" aria-hidden="true"></i>
												</span>
										   </div>
										   
										   <input type = "hidden" id="passvalidate" name="passvalidate" value = "<?php /* echo $_SESSION['email']; */ ?>" /> 
										  
											<div class="submit-buttin-sections">
												<button type="submit" id="updatepassword" name="updatepassword" class="save">
													Change Password
												</button>
											</div>
									   </div>
									</div>
							    </form>	
								
							</div>
					   </div>
					</div>
		      </div>
			</div>
      </div>		  
   
      <!--- Footer--->
		<div class="onl-fotter-sections user-pagess">
		   <div class="fott-containers">
			  <!--- footer left --->
			   <div class="only-fotter-sectios-left">
					<div class="only-footer-sub-inners-sec">
					   <span class="ft-f1-headers">
							Get to know us-
						</span>
						<ul class="f1-ul">
							<li class="ft-list">
								<a href="aboutUs.php" class="at">About us</a>
							</li>
							<li class="ft-list">
								<a href="howItWorks.php" class="at">How it works</a>
							</li>
							<li class="ft-list">
								<a href="jobs.php" class="at">Jobs</a>
							</li>
						</ul>
					</div>
			   </div>
			   
			   <!--- footer middle ---> 
			   <div class="only-fotter-sectios-middle">
					<div class="only-footer-sub-inners-sec">
						<span class="ft-f1-headers">
							Let us help
						</span>
						<ul class="f1-ul">
							<li class="ft-list">
								<a href="javascript:void(0)" class="at">My Account</a>
							 </li>
							 <li class="ft-list">
								<a href="FAQ.php" class="at">FAQs</a>
							 </li>
							 <li class="ft-list">
								<a href="resources.php" class="at">Resources</a>
							 </li>
							 <li class="ft-list">
								<a href="premium.php" class="at">Premium</a>
							 </li>
							 <li class="ft-list">
								<a href="privacy.php" class="at">Privacy Policy</a>
							 </li>
							 <li class="ft-list">
							   <a href="termsofuse.php" class="at">Terms of use</a>
							 </li>
							 <li class="ft-list">
							   <a href="revisionandrefund.php" class="at">Revision and Refund policy</a>
							 </li>
						</ul>
					</div>
			   </div>
			  
			  <!--- footer right --->   

			   <div class="only-fotter-sectios-right">
				   <div class="only-footer-sub-inners-sec">
						<span class="ft-f1-headers">
							Contact us
						</span>
						<div class="footer-address">
						 <ul class="list-details">
							 <li class="contact-details">
									  <i class="fa fa-map-marker" aria-hidden="true"></i>
										 <span>
									  Suite 516 377 Kent Street Seabridge House, sydney NSW 2000, Australia
								   </span>
							 </li>
									<li class="contact-details">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<span class="details-phone">
											+91 8787887808
										</span>
									</li>
						  </ul>
						</div>
						<div>
							<ul class="f1-ul">
								<li class="socials-icons">
									<a href="javascript:void(0)" class="at-s">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li class="socials-icons">
									<a href="javascript:void(0)" class="at-s">
										<i class="fa fa-google" aria-hidden="true"></i>
									</a>
								</li>
								<li class="socials-icons">
									<a href="javascript:void(0)" class="at-s">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li class="socials-icons">
									<a href="javascript:void(0)" class="at-s">
										<i class="fa fa-youtube" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
				   </div>
			   </div>	
			  
		      <form action="connection.php" method="post">
					<div class="only-fotter-sectios-corners">
						<div class="only-footer-sub-inners-sec">
						   <span class="ft-f1-headers">
							  Special Offers
						   </span>
							<span class="special-offers">
								Sign Up to access our special offers
							</span>
						   <div class="each-rows-inputs">
								<input type="email" name="sub_email" id="sub_email" placeholder="Enter your email" required />
								<span class="users-pp">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
						   </div>
						   <div class="each-rows-inputs">
								<button type="submit" class="subscribe" name="subscribesubmit">
									SUBSCRIBE
								</button>
							</div>
						</div>
					</div>
			   </form>
			   <a class="scroll_To_Top top-to-bottom-se" class="">
					<span class="tp-p">
						<i class="fa fa-arrow-up" aria-hidden="true"></i>
					</span>
			   </a>  
		   </div>
		</div> 
		
		<!--- Footer Ended-->

   </body>
   
   <!--- script for jquery --->
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
   <script src="./assets/js/scrollanimations.js"></script>
   <script src="./assets/js/style.js"></script>
   <script>
		  $(".tab__content").hide();
		  $(".tab__content:first").show();
		  $(".tab__head li").click(function() {
			$(".tab__content").hide();
			var activeTab = $(this).attr("rel"); 
			$("#"+activeTab).fadeIn();		
			$(".tab__head li").removeClass("active");
			$(this).addClass("active");
		  });
		  
		function checkname(){
		  $("#pname").attr('disabled', !$("#pname").attr('disabled'));
		}
		  
		function checkemail(){
		  $("#pemail").attr('disabled', !$("#pemail").attr('disabled'));
	    }
		  
		function checkphone(){
		  $("#pphone").attr('disabled', !$("#pphone").attr('disabled'));
		}
		  
	    function checkeducation(){
		  $("#peducation").attr('disabled', !$("#peducation").attr('disabled'));
		}
    </script>
</html>

<script>

function checkPasscode() {
	var con_pass = document.querySelector("#conf_pass");
	var new_pass = document.getElementById("new_pass").value;
	
	if (con_pass.value != new_pass ) {
		con_pass.setCustomValidity("Password didn't match");
	} 
	else {
		con_pass.setCustomValidity(""); // be sure to leave this empty!
	}
}

</script>

<script>
   document.getElementById("pname").value = "<?php /* echo $name; */ ?>";
   document.getElementById("pemail").value = "<?php /* echo $email; */ ?>";
   document.getElementById("pphone").value = "<?php /* echo $phone; */ ?>";
   document.getElementById("peducation").value = "<?php /* echo $education; */ ?>";
</script>