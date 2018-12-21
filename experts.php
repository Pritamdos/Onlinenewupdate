<?php
/*  Comment Added 
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

    $sql = "SELECT * FROM `expert_data`;";
	 $result = $conn->query($sql);
	
	
	if(!$result){
		die ('SQL Error: ' . mysql_error($conn));
	}
Comment Ended */
?>

<!DOCTYPE html>
<html>
<head>
    <title>OnlinAssignmenthelp.com - About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="We are the leading assignment help provider in Australia. We have the best assignment experts on board who provide top notch essay, dissertation and assignment help. ">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animated.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/scrollanimations.css">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php include './header.php'?>
    <div class="experts-online-centers">
         <div class="experts-online-inner-sections animated zoomIn">
              <div class="connect-width-experts">
                <span class="connect-head">
                    Connect with our Experts Available 24x7
                </span>
				    
						<div class="select-experts-outers">
							<div class="selec-inner-sec">
								<select class="select-experts" name="exp_select">
									<option disabled selected>Select Experts</option>
									<option value="Maths">Maths</option>
									<option value="History">History</option>
								</select>
							</div>
							<span class="find-experts">
								<button type="submit" class="expertss" name="exp_submit">
									Find Experts
								</button>
							<span>
						</div>
				    
              </div>
         </div>
         <?php include './notification.php'?>
    </div>
    <div class="experts-details-overview">
        <div class="experts-heading-sections">
             <span class="experts-abouts">
             Why Our Experts Are The Best
             </span>
        </div>
        <div class="experts-inner-views animatable zoomIn">
           <div class="left-top-sections">
               <span class="left-top-section-contains">
                   <span class="lef-ft-tp animatable fadeInLeft">
                       Commitment
                   </span>
               </span>
               <span class="left-bottm-section-contains">
                   <span class="lt-ft-bt animatable  fadeInLeft">
                       On-time delivery is the prime commitment of our writers. This is one aspect where they’re never willing to compromise.
                   </span>
               </span>
           </div>
           <div class="right-top-sections">
               <span class="right-top-section-contains">
                   <span class="rig-ft-tp animatable  fadeInRight">
                      Quality
                   </span>
               </span>
               <span class="right-tp-section-contains">
                   <span class="rt-ft-bt animatable fadeInRight">
                      The ability to craft quality solutions with flawless structure and impeccable language is one of the hallmarks of our experts.
                   </span>
               </span>
           </div>
           <div class="left-bottoms-sections">
               <span class="lefts-bottms-section-contains">
                   <span class="lt-btm-ft-tp animatable fadeInLeft">
                       Qualification
                   </span>
               </span>
               <span class="left-botts-section-contains">
                   <span class="lt-bt-ft-bt animatable fadeInLeft">
                       With degrees obtained from reputed universities worldwide, our writers match their expertise to their intellect.
                   </span>
               </span>
           </div>
           <div class="right-bottoms-sections">
               <span class="rights-botttms-section-contains">
                   <span class="rt-bttmm-ft-tp animatable fadeInRight">
                      Originality
                   </span>
               </span>
               <span class="rt-bottss-section-contains">
                   <span class="rts-rt-ft-bt animatable fadeInRight">
                   Each carefully crafted assignment is infused with unique inputs by our experts that put our solutions in a league of their own. 
                   </span>
               </span>
           </div>
        </div>
    </div>
    <div class="experts-details-overview-mobile-view">
        <div class="experts-heading-sections-mobile-view">
             <span class="experts-abouts">
             Why Our Experts Are The Best
             </span>
        </div>
        <div class="dashboard-inner-wraper">
                <div class="card-outer-experts bounceInLeft animatable">
                    <div class="card-inner-section-experts">
                        <div class="card-logo-outers-experts">
                            <span class="card-logos commit pulse">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="experts-detsl">
                             <span class="experts-details-hed">
                                 Commitment
                             </span>
                             <span class="experts-details-subhed">
                             On-time delivery is the prime commitment of our writers. This is one aspect where they’re never willing to compromise.
                             </span>
                        </div>
                    </div>
                </div>
                <div class="card-outer-experts bounceInRight animatable">
                    <div class="card-inner-section-experts">
                        <div class="card-logo-outers-experts">
                            <span class="card-logos quality pulse">
                            <i class="fa fa-wpexplorer" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="experts-detsl">
                             <span class="experts-details-hed">
                                 Quality
                             </span>
                             <span class="experts-details-subhed">
                             The ability to craft quality solutions with flawless structure and impeccable language is one of the hallmarks of our experts.
                             </span>
                        </div>
                    </div>
                </div>
                <div class="card-outer-experts bounceInLeft animatable">
                    <div class="card-inner-section-experts">
                        <div class="card-logo-outers-experts">
                            <span class="card-logos qualifications pulse">
                               <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="experts-detsl">
                             <span class="experts-details-hed">
                                  Qualification

                             </span>
                             <span class="experts-details-subhed">
                             With degrees obtained from reputed universities worldwide, our writers match their expertise to their intellect.
                             </span>
                        </div>
                    </div>
                </div>
                <div class="card-outer-experts bounceInRight animatable">
                    <div class="card-inner-section-experts">
                        <div class="card-logo-outers-experts">
                            <span class="card-logos orignt pulse">
                               <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="experts-detsl">
                             <span class="experts-details-hed">
                                 Originality
                             </span>
                             <span class="experts-details-subhed">
                             Each carefully crafted assignment is infused with unique inputs by our experts that put our solutions in a league of their own. 
                             </span>
                        </div>
                    </div>
                </div>
            </div> 
    </div>
    <div class="experts-details-lists">
         <span class="experts-details-heads">
            Our  Best Expert Reviews
         </span>
         <div class="experts-details-items">
                <div class="common-table-details-sections">
                    <table cellspacing="0" class="deatils-tables-experts ">
                        <tr class="table-headings-experts">
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Experts</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Client Rating</th>
                            <th>Location</th>
                            <th>Completed Order</th>
                            <th>Processing Order</th>
                            <th>Hire Status</th>
                        </tr>
                         <tbody class="tbodys experts">
							<?php
							/*  Comment Added
							    if(isset($_POST["exp_submit"])){	
									$exp_select = $_POST["exp_select"];
									while ($row = mysqli_fetch_array($result)){
										if($exp_select = $row['specialization']){
											echo    '<tr class="experts-rows-secss">
														<td>
															<span class="experts-images">
																<img src="./assets/images/profile-pic.jpg" alt="" />
															</span>
														</td>
														<td>'.$row['name'].'</td>
														<td>
															<span class="experts-dd">
															   '.$row['qualification'].'
															</span>
														</td>
														<td>'.$row['specialization'].'</td>
														<td>'.$row['email'].'</td>
														<td>
															<ul class="lead-tstmnl-nm-dsg-rating">';
																for($scount = 1; $scount <= $row['client_rating']; $scount++){	
																	echo	'<li>
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</li>';
																};
													echo	'</ul>';
													echo	'<span class="rat">
															  '.$row['client_rating'].'/5
															 </span>
														</td>
														
														<td>'.$row['location'].'</td>
														<td>'.$row['order_c'].'</td>
														<td>'.$row['order_p'].'</td>';
														
														if($row['status'] == 1){
														echo	'<td>
																	<button type="submit" class="experts-submit">
																		Open
																	</button>
																</td>';
														}
														else{
															echo    '<td>
																		<button type="submit" class="experts-submit closed">
																			Closed
																		</button>
																	</td>';
														}
													echo '</tr>';
										}
								    }
								}
								else{
									while ($row = mysqli_fetch_array($result)){
										echo    '<tr class="experts-rows-secss">
													<td>
														<span class="experts-images">
															<img src="./assets/images/profile-pic.jpg" alt="" />
														</span>
													</td>
													<td>'.$row['name'].'</td>
													<td>
														<span class="experts-dd">
														   '.$row['qualification'].'
														</span>
													</td>
													<td>'.$row['specialization'].'</td>
													<td>'.$row['email'].'</td>
													<td>
														<ul class="lead-tstmnl-nm-dsg-rating">';
															for($scount = 1; $scount <= $row['client_rating']; $scount++){	
																echo	'<li>
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</li>';
															};
												echo	'</ul>';
												echo	'<span class="rat">
														  '.$row['client_rating'].'/5
														  </span>
													</td>
													
													<td>'.$row['location'].'</td>
													<td>'.$row['order_c'].'</td>
													<td>'.$row['order_p'].'</td>';
													
													if($row['status'] == 1){
													echo	'<td>
																<button type="submit" class="experts-submit">
																	Open
																</button>
															</td>';
													}
													else{
														echo    '<td>
																	<button type="submit" class="experts-submit closed">
																		Closed
																	</button>
																</td>';
													}
												echo '</tr>';
									}							    
								}
							Comment Ended */ 
							?>
                        </tbody>
                    </table>
                </div>
         </div>
    </div>
    <?php include './footer.php'?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./assets/js/scrollanimations.js"></script>
<script src="./assets/js/style.js"></script>
</html>