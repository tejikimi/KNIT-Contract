<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="row pt-0">
			<div class="col-md-8 col-md-offset-2  text-center">
			  <img src="./images/logo.png" alt="">
			  <h3 class="mt-20 line-height-1">Employee Data Sheet</h3>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="container-fluid">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<tbody>
									<tr>
										<th>First Name</th>
										<td> <?php echo $request['first_name']; ?> </td>
										<th>Middle Name</th>
										<td><?php echo $request['middle_name']; ?> </td>
									</tr>
									<tr>
										<th>Last Name</th>
										<td> <?php echo $request['last_name']; ?> </td>
										<th>Job Title</th>
										<td> <?php echo $request['jobtitle']; ?> </td>

									</tr>
									<tr>
										<th>Email Address </th>
										<td> <?php echo $request['email']; ?> </td>
										<th>Alternate Email Address</th>
										<td> <?php echo $request['alternate_email']; ?> </td>

									</tr>
									<tr>
										<th>Contact Number</th>
										<td><?php echo $request['contactnumber']; ?></td>
										<th>Employment Type</th>
										<td><?php echo $request['employment_type']; ?></td>

									</tr>
									<tr>
										
										<th>Department </th>
										<td><?php echo $request['department']; ?> </td>
										<th>Role</th>
										<td><?php echo $request['jobrole']; ?></td>
									</tr>
									<tr>
										
										<th>Reporting Manager</th>
										<td><?php echo $request['reportingmanager']; ?> </td>
										<th>Date Of Joining</th>
										<td><?php echo $request['Doj'] ?></td>
									</tr>
									
									
									<tr>
									    <th>Location </th>
										<td><?php echo $request['location']; ?> </td>
										<th> Work Authorization type </th>
										<td><?php echo $request['work_authorization_type'] ?></td>
										
									</tr>
									<tr>
									    <th>Work ID, exp date </th>
										<td><?php echo $request['wor_id']; ?> </td>
										<th>Passport No </th>
										<td><?php echo $request['passportno'] ?></td>
										
									</tr>
									<tr>
									    <th>Passport Exp </th>
										<td><?php echo $request['passportexp']; ?> </td>
										<th>Date Of Birth </th>
										<td><?php echo $request['Dob'] ?></td>
										
									</tr>
									<tr>
									    <th>Current Address  </th>
										<td><?php echo $request['current_address']; ?> </td>
										<th>Project Location Address  </th>
										<td><?php echo $request['project_address'] ?></td>
										
									</tr>
									<tr>
									    <th> Bank Account No </th>
										<td><?php echo $request['bank_ac']; ?> </td>
										<th>Bank Routing No </th>
										<td><?php echo $request['bank_routing'] ?></td>
										
									</tr>
									<tr>
									    <th>Education Qualification </th>
										<td><?php echo $request['edu_qualification']; ?> </td>
										<th>Emergency Contact Info  </th>
										<td><?php echo $request['Emer_contactno'] ?></td>
										
									</tr>
									<tr>
									    <th>If on Visa, Native country address and contact info </th>
										<td><?php echo $request['nativeadd']; ?> </td>
										<th>Affiliations any organizations, ID no </th>
										<td><?php echo $request['aff_id'] ?></td>
										
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="row">
			<div class="col-md-3 col-md-offset-9">
				<div class="mt-50">
					<table class="table table-bordered table-striped">
						<tbody>
							<tr>
								<th>Signature </th>
								<td><img  src="./signatures/<?php echo $request['file_name'].".png"; ?>"> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>