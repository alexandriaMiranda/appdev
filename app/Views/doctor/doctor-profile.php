<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
                            <?php include(APPPATH.'views/doctor/doctor-slider.php');?>
							<!-- /Profile Sidebar -->
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
						
							<!-- Basic Information -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Basic Information</h4>
									<div class="row form-row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="change-avatar">
													<div class="profile-img">
														<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
													</div>
													<div class="upload-img">
														<div class="change-photo-btn">
															<span><i class="fa fa-upload"></i> Upload Photo</span>
															<input type="file" class="upload">
														</div>
														<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Username <span class="text-danger">*</span></label>
												<input type="text" class="form-control" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email <span class="text-danger">*</span></label>
												<input type="email" class="form-control" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>First Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Last Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Gender</label>
												<select class="form-control select">
													<option>Select</option>
													<option>Male</option>
													<option>Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group mb-0">
												<label>Date of Birth</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Basic Information -->
							
							<!-- About Me -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">About Me</h4>
									<div class="form-group mb-0">
										<label>Biography</label>
										<textarea class="form-control" rows="5"></textarea>
									</div>
								</div>
							</div>
							<!-- /About Me -->
							
							<!-- Clinic Info -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Clinic Info</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Clinic Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Clinic Address</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Clinic Info -->

							<!-- Contact Details -->
							<div class="card contact-card">
								<div class="card-body">
									<h4 class="card-title">Contact Details</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Address Line 1</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Address Line 2</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">City</label>
												<input type="text" class="form-control">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">State / Province</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Country</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Postal Code</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Contact Details -->
							
							
							<!-- Services and Specialization -->
							<div class="card services-card">
								<div class="card-body">
									<h4 class="card-title">Services and Specialization</h4>
									<div class="form-group">
										<label>Services</label>
										<input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Services" name="services" value="Tooth cleaning " id="services">
										<small class="form-text text-muted">Note : Type & Press enter to add new services</small>
									</div> 
									<div class="form-group mb-0">
										<label>Specialization </label>
										<input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="specialist" value="Children Care,Dental Care" id="specialist">
										<small class="form-text text-muted">Note : Type & Press  enter to add new specialization</small>
									</div> 
								</div>              
							</div>
							<!-- /Services and Specialization -->
						 
							<!-- Education -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Education</h4>
									<div class="education-info">
										<div class="row form-row education-cont">
											<div class="col-12 col-md-10 col-lg-11">
												<div class="row form-row">
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>Degree</label>
															<input type="text" class="form-control">
														</div> 
													</div>
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>College/Institute</label>
															<input type="text" class="form-control">
														</div> 
													</div>
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>Year of Completion</label>
															<input type="text" class="form-control">
														</div> 
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="add-more">
										<a href="javascript:void(0);" class="add-education"><i class="fa fa-plus-circle"></i> Add More</a>
									</div>
								</div>
							</div>
							<!-- /Education -->
						
							<!-- Experience -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Experience</h4>
									<div class="experience-info">
										<div class="row form-row experience-cont">
											<div class="col-12 col-md-10 col-lg-11">
												<div class="row form-row">
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>Hospital Name</label>
															<input type="text" class="form-control">
														</div> 
													</div>
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>From</label>
															<input type="text" class="form-control">
														</div> 
													</div>
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>To</label>
															<input type="text" class="form-control">
														</div> 
													</div>
													<div class="col-12 col-md-6 col-lg-4">
														<div class="form-group">
															<label>Designation</label>
															<input type="text" class="form-control">
														</div> 
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="add-more">
										<a href="javascript:void(0);" class="add-experience"><i class="fa fa-plus-circle"></i> Add More</a>
									</div>
								</div>
							</div>
							<!-- /Experience -->
							
							<div class="submit-section submit-btn-bottom">
								<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
							</div>
							
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
</body>
</html>