@extends('front.layouts.master1')
@section('content')

<div class="container border text-center mt-2 mb-3" style="background-color: #CAD3C8;"> <img src="{{asset('images/rbp-logo.gif')}}" alt="rbp-logo" width="140" height="140">
	<br>
	<br>
	<h3>ENTERTAINMENT INFRINGEMENT NOTICE (EIN)</h3>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-9 mx-auto">
				<form>
					<div class="form-group row">
						<div class="col-sm-6">
							<label for="license">License No</label>
							<input type="text" class="form-control" id="license" placeholder=""> </div>
						<div class="col-sm-6">
							<label>Date</label>
							<input type="date" class="form-control" name="date" placeholder="dd-mm-yyyy"> </div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label for="inputname">Name of Licensee</label>
							<input type="text" class="form-control" id="inputname"> </div>
						<div class="col-sm-6">
							<label for="inputcid">CID No</label>
							<input type="text" class="form-control" id="inputcid" placeholder=""> </div>
					</div>
					<div class="form-group row">
						<div class="col-sm-6">
							<label for="inputCity">Establishment Name</label>
							<input type="text" class="form-control" id="inputCity" placeholder=""> </div>
						<div class="col-sm-6">
							<label for="inputAddressLine2">Place</label>
							<input type="text" class="form-control" id="inputAddressLine2" placeholder=""> </div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<p class="font-weight-bold" style="font-size: 20px">Nature of Offence/Violations</p>
						</div>
					</div>
					<div class="form-container">
						<div class="form-group row">
							<div class="col-sm-4">
								<label for="dryday">1) Dry Day Violation</label>
							</div>
							<div class="col-sm-4"> </div>
							<div class="col-sm-4">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value=""> </label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-4">
								<label for="before">2) Opening before 5PM</label>
							</div>
							<div class="col-sm-4"> </div>
							<div class="col-sm-4">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value=""> </label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-8">
								<label for="after">3) Open after 11PM/12PM (Monday/Wednesday/Thursday/Sunday)</label>
							</div>
							<div class="col-sm-4">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value=""> </label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-8">
								<label for="underage">4) Open after 12PM/1AM (Friday/Saturday)</label>
							</div>
							<div class="col-sm-4">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value=""> </label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-8">
								<label for="fronting">5) Open on Sunday/Monday/Thursday</label>
							</div>
							<div class="col-sm-4">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value=""> </label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-8 ">
								<label for="underage">6) Selling of alcohol and alcoholic beverages/allowing entrance to underage/Monks/Students</label>
							</div>
							<div class="col-sm-4">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value=""> </label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-8">
								<label for="before">7) Fronting/Leasing of License</label>
							</div>
							<div class="col-sm-4">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value=""> </label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-8">
								<label for="before">8) Selling alcohol to intoxicated person</label>
							</div>
							<div class="col-sm-4">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value=""> </label>
								</div>
							</div>
						</div>
					</div>
				</form>
				<br>
				<hr class="bg-warning">
				<br>
				<h4 class="text-danger font-weight-bold">WHAT YOU MUST DO WHEN YOU ARE ISSUED WITH THIS NOTICE</h4>
				<br>
				<blockquote> After receiving this notice, you are instructed to report to RTIO (Regional Trade and Industry Office) within 7 working days to pay penalty at your convenience. Failure to pay the penalty within the specified time will result in forwarding the case to the revelant agencies to be dealt accordingly. The issue of this notice for three times shall result in revocation of license and same shall be issued to the next law abiding citizen (Future Provision). If you are not issued with license you may be prosecuted to Royal Court of Justice as per sec 390 of Penal Code of Bhutan 2004.
					<hr class="bg-warning"> </blockquote>
				<br>
				<blockquote> The infringement notice has been served as per the provision of "Rules Governing Places and Programmes of Entertainment, Bhutan Infocom and Media Authority 2014. </div>
		</div>
	</div>
	<hr class="bg-warning w-75">
	<div class="container">
		<div class="row">
			<div class="col-md-9 mx-auto">
				<br>
				<form>
					<div class="container btn btn-center">
						<button class="btn btn-success text-white w-25" type="button">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

    <style>
        .form-container
        {
            text-align: left;
        } 
    </style>
@endsection