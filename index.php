<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Page Title -->
<title>Employee Data Sheet</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css">
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/json2.min.js"></script>
<script src="js/flashcanvas.js"></script>
<link href="css/jquery.signaturepad.css" rel="stylesheet">
<script src="js/jquery.signaturepad.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
                $(document).ready(function() {
                    $('.sigPad').signaturePad({drawOnly: true});
                });				
    </script>
</head>
<body>
<div id="wrapper" class="clearfix">
 
	<section class="divider bg-silver-light">
		<div class="container pt-sm-10 pb-sm-30">
			<div class="row pt-0">
			    <div class="col-md-8 col-md-offset-2  text-center">
				  <img class="mt-5 mb-5" src="images/logo.png" alt="">
				  
				</div>
			    <div class="col-md-12">
					<div class="z-depth">
						<form  name="contact_form" id="commentForm" action="generate.php" method="post">
							<div class="p-30">
							    <div class="row">
							      <div class="col-md-8 col-md-offset-2  text-center">
										<h2 class="mt-0 line-height-1">Employee Data Sheet</h2>
									</div>
								</div>
								<div class="border-3px">
								    <div class="p-30">
										<div class="row">
										  
										    
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_fname">First Name<small>*</small></label>
												<input id="form_name" name="form_fname" class="form-control" type="text" placeholder="Enter First Name" data-rule-required="true" data-msg-required="Please Enter First Name" >
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_mname">Middle Name<small>*</small></label>
												<input id="form_mname" name="form_mname" class="form-control" type="text" placeholder="Enter Middle Name" data-rule-required="true" data-msg-required="Please Enter Middle Name">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_lname">Last Name<small>*</small></label>
												<input id="form_lname" name="form_lname" class="form-control" type="text" placeholder="Enter Last Name" data-rule-required="true"   data-msg-required="Please Enter Last Name">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_jobtitle">Job Title <small>*</small></label>
												<input id="form_jobtitle" name="form_jobtitle" class="form-control" type="text" placeholder="Enter Job Title" data-rule-required="true"  data-msg-required="Please Enter Job Title">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_email">Email Address <small>*</small></label>
												<input id="form_email" name="form_email" class="form-control" type="email" placeholder="Enter State" data-rule-required="true"   data-msg-required="Please Enter Email Address">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_aemail">Alternate Email Address <small>*</small></label>
												<input id="form_aemail" name="form_aemail" class="form-control" type="email" placeholder="Enter Alternate Email Address" data-rule-required="true"  data-msg-required="Please Alternate Email Address">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_cnumber">Contact Number<small>*</small></label>
												<input id="form_cnumber" name="form_cnumber" class="form-control" type="number" placeholder="Enter Contact Number" data-rule-required="true"   data-msg-required="Please Enter Contact Number">
											  </div>
											</div>
											
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_emp_type">Employment Type  <small>*</small></label>
												<input id="form_emp_type" name="form_emp_type" class="form-control" type="text" placeholder="Enter Employment Type" data-rule-required="true"  data-msg-required="Please Enter Employment Type">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_department">Department  <small>*</small></label>
												<input id="form_department" name="form_department" class="form-control" type="text" placeholder="Enter Department" data-rule-required="true"   data-msg-required="Please Enter Department">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_role">Role  <small>*</small></label>
												<input id="form_role" name="form_role" class="form-control" type="text" placeholder="Enter County" data-rule-required="true"  data-msg-required="Please Enter County">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_rep_man">Reporting Manager Of SRI<small>*</small></label>
												<input id="form_rep_man" name="form_rep_man" class="form-control" type="text" placeholder="Enter Reporting Manager" data-rule-required="true"   data-msg-required="Please Enter Reporting Manager">
											  </div>
											</div>
											
											<div class="col-sm-4">
											  <div class="form-group">
													<label for="form_doj">Date Of Joining <small>*</small></label>
													<div class='input-group date' id='datetimepicker2'>
														<input type='text'  name="form_doj" class="form-control" placeholder="Enter Date Of Joining">
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
												</div>
											 
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_loc">Location <small>*</small></label>
												<input id="form_loc" name="form_loc" class="form-control" type="text" placeholder="Enter Location" data-rule-required="true"   data-msg-required="Please Enter Location">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_wor_aut">Work Authorization type <small>*</small></label>
												<input id="form_wor_aut" name="form_wor_aut" class="form-control" type="text" placeholder="Enter Work Authorization type" data-rule-required="true"   data-msg-required="Please Enter Work Authorization type">
											  </div>
											</div>
											<div class="col-sm-6">
											  <div class="form-group">
												<label for="form_wor_id">Work ID, exp date (Incase of F/H Visa)- others Please Enter 'NA' </label>
												<input id="form_wor_id" name="form_wor_id" class="form-control" type="text" placeholder="Enter Work ID">
											  </div>
											</div>
											<div class="col-sm-3">
											  <div class="form-group">
												<label for="form_passport">Passport No <small>*</small></label>
												<input id="form_passport" name="form_passport" class="form-control" type="text" placeholder="Enter Passport No" data-rule-required="true"   data-msg-required="Please Enter Passport No">
											  </div>
											</div>
											<div class="col-sm-3">
											  <div class="form-group">
												<label for="form_passport_exp">Passport Exp  <small>*</small></label>
												<input id="form_passport_exp" name="form_passport_exp" class="form-control" type="text" placeholder="Enter Passport Exp" data-rule-required="true"   data-msg-required="Please Enter Passport Exp">
											  </div>
											</div>
											<div class="col-sm-4">
											    <div class="form-group">
													<label for="form_dob">Date Of Birth <small>*</small></label>
													<div class='input-group date' id='datetimepicker1'>
														<input type='text'  name="form_dob" placeholder="Enter Date Of Birth" class="form-control">
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
												</div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_cur_add">Current Address <small>*</small></label>
												<input id="form_cur_add" name="form_cur_add" class="form-control" type="text" placeholder="Enter Current Address " data-rule-required="true"   data-msg-required="Please Enter Current Address ">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_pro_add">Project Location Address <small>*</small></label>
												<input id="form_pro_add" name="form_pro_add" class="form-control" type="text" placeholder="Enter Project Location Address" data-rule-required="true"   data-msg-required="Please Enter Project Location Address">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_bnk_acc">Bank Account No <small>*</small></label>
												<input id="form_bnk_acc" name="form_bnk_acc" class="form-control" type="text" placeholder="Enter Bank Account No " data-rule-required="true"   data-msg-required="Please Enter Bank Account No ">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_bnk_rou">Bank Routing No <small>*</small></label>
												<input id="form_bnk_rou" name="form_bnk_rou" class="form-control" type="text" placeholder="Enter Bank Routing No" data-rule-required="true"   data-msg-required="Please Enter Bank Routing No">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_edu_qua">Education Qualification <small>*</small></label>
												<input id="form_edu_qua" name="form_edu_qua" class="form-control" type="text" placeholder="Enter Education Qualification" data-rule-required="true"   data-msg-required="Please Enter Education Qualification">
											  </div>
											</div>
											<div class="col-sm-6">
											  <div class="form-group">
												<label for="form_eme_con">Emergency Contact Info <small>*</small></label>
												<input id="form_eme_con" name="form_eme_con" class="form-control" type="text" placeholder="Enter Emergency Contact Info " data-rule-required="true"   data-msg-required="Please Enter Emergency Contact Info ">
											  </div>
											</div>
											<div class="col-sm-6">
											  <div class="form-group">
												<label for="form_nati_add"> If on Visa, Native country address and contact info<small>*</small></label>
												<input id="form_nati_add" name="form_nati_add" class="form-control" type="text" placeholder="Enter Native country address and contact info">
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="form_aff_id">Affiliations any organizations, ID no <small>*</small></label>
												<input id="form_aff_id" name="form_aff_id" class="form-control" type="text" placeholder="Enter Affiliations any organizations, ID no">
											  </div>
											</div>
											
											
											
										</div>	
									</div>	
								</div>	
							    
								
								<div class="p-30">
									<div class="row">
										<div class="col-md-4 col-md-offset-9">
										  <div class="form-group">
											<label for="form_name">Employee Name:</label>
												<div class="sigPad">
													<ul class="sigNav" style="display: block;">
														<li class="drawIt"><a href="#draw-it">Draw It</a></li>
														<li class="clearButton" style="display: list-item;"><a href="#clear">Clear</a></li>
													</ul>
													<div class="sig sigWrapper" style="display: block;">
														<div class="typed"></div>
														<canvas class="pad" width="198" height="55"></canvas>
														<input type="hidden" name="output" id="sign" class="output">
													</div>
												</div> 
										  </div>
										</div>
									</div>
								</div>
							    <div class="p-30">
									<div class="row">
										<div class="col-md-6 col-md-offset-4">
										  <div class="form-group">
											<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
											<button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Submit</button>
											<button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</form>

						<!-- Contact Form Validation-->
						
					</div>
			    </div>
			</div>
	  </div>
	</section>
</div>
  <!-- end main-content -->

<script >
    $(function () {
        $('#datetimepicker1').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>
<script >
    $(function () {
        $('#datetimepicker2').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>
</body>
</html>