<div class="notifiicons">
                <div class="notif-flex">
                    <div class="notif-btn">
                        <span class="call-iconss swing">
                            <i class="fa fa-phone calls" aria-hidden="true"></i>
                        </span>
                        <span class="call-nows">
                            Call
                            <br> Back
                        </span>
                    </div>
                </div>
                <div class="notify-outer-poposs">
                    <div class="notif-item notif-item-items animated slideInUp slideInDown hide">
                        <div class="notify-inners-sec">
                             <div class="cross-ss">
                                <span class="closed-iconss" id="slide-down">
                                <i class="fa fa-times  drop-arrow" aria-hidden="true"></i>
                                </span>
                             </div>
                            
                             <div class="notify-inner-sectionss">
                                  <div class="lt-sec">
                                       <div class="lt-inner-secs">
                                          <div class="lt-headers">
                                              <span class="hds">
                                                Online Assignment Help
                                              </span>
                                                <span class="thumb-sc">
                                                    <span class="thumb-iconss animated zoomIn  swing">
                                                       <i class="fa fa-phone calls" aria-hidden="true"></i>
                                                    </span>

                                                </span>
                                                <span class="sub-hds">
                                                    24*7 Call & Support Services
                                                </span>                                           
                                          </div>
                                          <div class="sub-text-notify">
                                               <span class="sb-text">
                                               Stuck in traffic, went offline or over occupied with other chores? 
											   Request a call back now. We have a dedicated cell of customer 
											   relationship managers available 24/7. Specify a convenient time, 
											   and we will get back to you shortly. 
                                               </span>
                                          </div>
                                       </div>
                                  </div>
                               
                               <form action="connection.php" method="post">							   
          								<div class="rt-sec">
                                    <div class="rt-inner-secs">
                                           <div class="hurry-call-back">
															  <div class="hurry-inner-sect">
																   <span class="hurry">
																	 In a Hurry?
																   </span>
																   <span class="get-call">
																	  Get a callback
																   </span>
															  </div>
																   
												            <div class="hurry-inner-sc">
                                                     <div class="get-each-sec">
                                                           <div class="left-s-get">
                                                                 <select class="selects-drop">
                                                                       <option>IN (+91)</option>
                                                                       <option>PAK(+93)</option>
                                                                       <option>AUS(+91)</option>
                                                                </select>
                                                           </div>
                                                           <div class="right-s-get">
														                    <input type="text" name="call_phone" id="call_phone" onkeyup="checkphone();" placeholder="Enter Phone Number" required="true" />
                                                                <span style="color:red" id="phone_status"></span>
               														  </div>
                                                      </div>
                                                      <div class="get-each-sec">
                                                          <ul>
                                                               <li> 
                                                                   <div class="radio">
                                                                        <input id="radio-1" name="call_type" value="NEW ORDER" type="radio">
                                                                        <label for="radio-1" class="radio-label">NEW ORDER</label>
                                                                    </div>
                                                                </li>
                                                                <li> 
                                                                   <div class="radio">
                                                                        <input id="radio-2" name="call_type" value="EXISTING ORDER" type="radio">
                                                                        <label for="radio-2" class="radio-label">EXISTING ORDER</label>
                                                                    </div>
                                                                </li>                                                           
                                                          <ul>
                                                      </div>
                                                      <div class="get-each-sec">
                                                         <span class="reason-for-callback">
                                                           REASON FOR CALLBACK
                                                         </span>
                                                         <div class="text-reason">
                                                             <textarea placeholder="Type your Query..." name="call_reason" id="call_reason" class="textareas" required="true" ></textarea>
                                                         </div>
                                                      </div>
                                                      <div class="get-each-sec">
                                                         <span class="reason-for-callback">
                                                             SUITABLE TIME FOR CONTACT
                                                         </span>
                                                        <input type="time" name="call_time" id="call_time" required="true" required="true" />
                                                      </div>
                                                  </div>
                                                   <div class="call-back-submit">
                                                        <button type="submit" class="only-submit" name="callsubmit">
                                                            Submit
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
		   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function checkphone(){
	var phone=document.getElementById( "call_phone" ).value;
	 if(phone){
	  $.ajax({
	  type: 'post',
	  url: 'connection.php',
	  data: {
	   user_phone:phone,
	  },
	  success: function (response) {
	   $( '#phone_status' ).html(response);
	   if(response=="OK")	
	   {
		return true;	
	   }
	   else
	   {
		return false;	
	   }
	  }
	  });
	 }
	 else
	 {
	  $( '#phone_status' ).html("");
	  return false;
	 }
	}
</script>