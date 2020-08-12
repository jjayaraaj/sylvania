<form action="<?php echo base_url() ?>home/partner_enquiry" method="post" id="partnerForm">
					<div class="row pt-3">
						<div class="col-12 col-md-6 pb-3">
							<input type="text" class="form-control" name="firstName" placeholder="First Name">
						</div>
						<div class="col-12 col-md-6 pb-3">
							<input type="text" class="form-control" name="lastName"  placeholder="Last Name">
						</div>
						<div class="col-12 col-md-6 pb-3">
							<input type="text" class="form-control" name="emailId" placeholder="Email Id">
						</div>
						<div class="col-12 col-md-6 pb-3">
							<input type="text" class="form-control" name="mobileNumber" placeholder="Mobile Number">
						</div>
						<div class="col-12 col-md-6 pb-3">
							<input type="text" class="form-control" name="role" placeholder="Designation">
						</div>
						<div class="col-12 col-md-6 pb-3">
							<input type="text" class="form-control" name="company" placeholder="Company Name">
						</div>
						<div class="col-12 col-md-6 pb-3">
							<select name="" class="form-control" id="">
								<option value="">Country</option>
							</select>
						</div>
<!--
						<div class="col-12 col-md-12 pb-3">
							<input type="text" id="g-recaptcha-response" name="g-recaptcha-response">
						</div>
-->
						<div class="col-12 col-md-6 pb-3">
							<button class="btn btn-primary btn-block bg-primary g-recaptcha"  
        data-sitekey="6LcZ1b0ZAAAAACvmT3CTT2vpnp8kjJtuLkqZfJjA" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>
						</div>
					</div>
				</form>