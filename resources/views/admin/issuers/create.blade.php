@extends('admin.layouts.master')

@section('page')
    Add BIN/EIN Providers
@endsection

@section('content')

<main class="py-4">
	<div class="container" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header  bg-success">Create BIN/EIN Providers</div>
					<br>
					<div class="card-body">
						<form method="POST" action="/provider/register">
							@csrf
							
							<div class="form-group row">
								<label for="Issuername" class="col-md-4 col-form-label text-md-right">Provider Name:</label>
								<div class="col-md-6">
									<input id="Issuername" type="text" class="form-control " name="Issuername"> </div>
							</div>
							<div class="form-group row">
								<label for="cid" class="col-md-4 col-form-label text-md-right">CID Number:</label>
								<div class="col-md-6">
									<input id="cid" type="text" class="form-control " name="cid"> </div>
							</div>
							<div class="form-group row">
								<label for="desig" class="col-md-4 col-form-label text-md-right">Designation:</label>
								<div class="col-md-6">
									<input id="desig" type="text" class="form-control " name="designation"> </div>
							</div>
							<div class="form-group row">
								<label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number :</label>
								<div class="col-md-6">
									<input id="phone" type="text" class="form-control " name="pno"> </div>
							</div>
							<div class="form-group row">
								<label for="email" class="col-md-4 col-form-label text-md-right">Email Address :</label>
								<div class="col-md-6">
									<input id="email" type="email" class="form-control " name="email"> </div>
							</div>
							
							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
								<div class="col-md-6">
									<input id="password" type="password" class="form-control " name="password"> </div>
							</div>
							<div class="form-group row">
								<label for="confirm_password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
								<div class="col-md-6">
									<input id="confirm_password" type="password" class="form-control" name="confirm_password"> </div>
							</div>
							<div class="form-group row mb-0">
								<div class="col-md-12 offset-md-4">
									<button type="submit" class="btn btn-primary"> Create </button>
									<button type="submit" class="btn btn-danger mx-3"> Cancel </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main> 


@endsection