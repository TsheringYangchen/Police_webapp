
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div>
  <h3 class="mt-3 text-center">View License Holders</h3>
</div><br>
<form action="{{URL::to('/search')}}" method="get" role="search" style="width: 43%; margin-left:40%">
  {{ csrf_field() }}
  <div class="input-group">
      
      <input type="text" class="form-control mr-2" name="q" placeholder="Search License Holders">
        <span class="input-group-btn mr-1">
          <button class="btn btn-info" type="submit">
              <span class="fas fa-search mt-1"></span>
          </button>
      </span>
  </div>
</form>
<br>
<div class="row">
    <div class="col-md-8 offset-2">
<table class="table table-responsive table-bordered w-100">
    <thead class="table-dark text-center">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>License Number</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($licenses as $license)
        <tr>
          <td>{{ $license->id }}</td>
          <td>{{ $license->LHname }}</td>
          <td>{{ $license->license }}</td>
          <td class="text-center">
            <a href="/license-edit/{{$license->id}}" class="btn btn-primary">EDIT</a>
          </td>
          <td>  
            <a href="/delete/{{$license->id}}" class="btn btn-danger">DELETE</a>
          </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
 
</div>

</div>




                