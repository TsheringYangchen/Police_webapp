@extends('admin.layouts.master')

@section('page')
    Add License Holder
@endsection

@section('content')

<div class="row">

    <div class="col-md-12" id="register">

        <div class="card col-md-8">
            <div class="card-body">

                @include('admin.layouts.message')

                <h2 class="card-title">Add License Holder</h2>
                <hr>
                
                @if ( $errors->any() )

                    <div class="alert alert-success">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                <form action="/license/register" method="post">

                    @csrf
                    <div class="form-group">
                        <label for="name">License Holder Name:</label>
                        <input type="text" name="LHname" placeholder="Name" id="LHname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">License Number:</label>
                        <input type="text" name="license" placeholder="License Number" id="license" class="form-control">
                    </div>

                    <div class="form-group mb-5">
                        <button class="btn btn-outline-info col-md-2" style="margin-bottom: 20px"> Register</button>
                    </div>

                </form>

            </div>
        </div>

    </div>

</div>


@endsection