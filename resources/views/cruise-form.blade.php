@extends('layouts.home-layout')

@section('content')
	<div class="row justify-content-center">
		<div class="col-lg-9">
			<div class="form-container">
				<div class="site-logo">
					<img src="{{ asset('image/cruise-planner-logo.jpg') }}" width="400">
				</div>

				<p class="form-note">Thank you for your interest in our "<em><strong>CP CONNECT</strong></em>"! Please fill out the form to sign up for promotional alerts.</p>
				<form method="POST" action="{{ route('cruisehome.store') }}">
					{{ csrf_field() }}
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>First Name</label>
				      <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label>Last Name</label>
				      <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Birth Day</label>
						<input id="bday-picker" class="form-control" name="birth_date" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label>Anniversary Date</label>
						<input id="anniv-picker" class="form-control" name="anniv_date">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Gender</label>
				      <div>
				      	  <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="gender" value="option1" checked>
							  <label class="form-check-label">Male</label>
						  </div>
						  <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="gender" value="option2">
							  <label class="form-check-label">Female</label>
						  </div>
				      </div>
				      
				    </div>
				    <div class="form-group col-md-6">
				      <label>Mobile Number</label>
				      <div data-tip="Format: (123)123-1234">
					    <input type="tel" class="form-control" name="mobile_no" placeholder="Mobile Number" pattern="[\(]\d{3}[\)]\d{3}[\-]\d{4}">
					</div>
				      
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label>How did you hear about "<em><strong>CP CONNECT</strong></em>"?</label>
				    <select class="form-control" name="cpconnect_question" required>
				      <option value="website">Website</option>
				      <option value="email">Email</option>
				      <option value="facebook">Facebook</option>
				      <option value="instagram">Instagram</option>
				      <option value="twitter">Twitter</option>
				      <option value="direct-mail">Direct Mail</option>
				      <option value="show">Show</option>
				      <option value="print-ads">Print Ads</option>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-success">Submit</button>

					</br>
					</br>
					<p class="form-note">
						<span>Terms and Privacy can be found at</span>
						<span>NEED page (cruisetheworldvacations.com)</span>
					</p>	
					<p class="form-note">
						<span>You may revieve up to (4) msgs per month</span>
						<span>You will receive an enrollment confirmation text.</span>
						<span>Reply "STOP" to end or "HELP" for help to any message.</span>
					</p>
					<p class="form-note">Enrollment is not required for purchase of any product or service.</p>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('head-custom')

	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/gijgo/css/gijgo.min.css') }}">
	<script type="text/javascript" src="{{ asset('vendor/gijgo/js/gijgo.min.js') }}"></script>
@endsection

@section('footer-custom')
	<script>
        $('#bday-picker').datepicker({
        	uiLibrary: 'bootstrap4'
        });

        $('#anniv-picker').datepicker({
        	uiLibrary: 'bootstrap4'
        });
    </script>
@endsection