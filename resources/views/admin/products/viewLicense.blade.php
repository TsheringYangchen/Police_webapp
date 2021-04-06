<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div style="margin-left: 210px">
  <h3 class="mt-3">View License Holders</h3>
</div>
<form  method="GET" style="margin-left:500px">
  <input type="text" name="search" required/>
  <button type="submit">Search</button>
</form>
<br>
<div class="row">
  <div class="col-md-8 offset-2">

<table class="table table-responsive table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th class="w-25">Name</th>
        <th class="w-25">License Number</th>
        <th class="w-50">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($licenses as $license)
        <tr>
          <td>{{ $license->LHname }}</td>
          <td>{{ $license->license }}</td>
          <td class="text-center">
            <a href="/license-edit/{{$license->id}}" class="btn btn-primary">EDIT</a>
            <a href="/delete/{{$license->id}}" class="btn btn-danger">DELETE</a>
          </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>

  <!-- Pagination Links -->
  {{ $licenses->links() }}

</div>

</div>



                