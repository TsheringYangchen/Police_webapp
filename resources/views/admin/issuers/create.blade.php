@extends('admin.layouts.master')

@section('page')
    Add BIN/EIN Providers
@endsection

@section('content')

<main class="py-4">
	<div class="container" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
		<div class="row justify-content-center">
			<div class="col-md-8" id="add">
				<div class="card">
					<div class="card-header font-weight-bold bg-success">Create BIN/EIN Providers</div>
					<div class="card-body">
                        @if ( $errors->any() )

							<div class="alert alert-success">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>

               			 @endif
							@if ( session()->has('msg') )
								<div class="alert alert-success">{{ session()->get('msg') }}</div>
							@endif

						<form  action="admin/issuers" method="post">
							@csrf

							<input type="hidden" name="_token">
							<div class="form-group row">
								<label for="cid" class="col-md-4 col-form-label text-md-right">CID Number:</label>
								<div class="col-md-6">
									<input id="cid" type="text" class="form-control " name="cid"> </div>
							</div>
							<div class="form-group row">
								<label for="pname" class="col-md-4 col-form-label text-md-right">Name:</label>
								<div class="col-md-6">
									<input id="pname" type="text" class="form-control " name="pname"> </div>
							</div>
							<div class="form-group row">
								<label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number :</label>
								<div class="col-md-6">
									<input id="phone" type="text" class="form-control " name="phone"> </div>
							</div>
							<div class="form-group row">
								<label for="desig" class="col-md-4 col-form-label text-md-right">Designation:</label>
								<div class="col-md-6">
									<input id="desig" type="text" class="form-control " name="desig"> </div>
							</div>
							<div class="form-group row">
								<label for="email" class="col-md-4 col-form-label text-md-right">Email Address:</label>
								<div class="col-md-6">
									<input id="email" type="text" class="form-control " name="email"> </div>
							</div>
							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
								<div class="col-md-6">
									<input id="password" type="password" class="form-control " name="password"> </div>
							</div>
							<div class="form-group row">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation"> </div>
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