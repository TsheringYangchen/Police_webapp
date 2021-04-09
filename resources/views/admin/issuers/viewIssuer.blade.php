
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<h3 style="text-align: center; margin-top:10px">View BIN/EIN Providers</h3>
<br>
<div class="row">
  <div class="col-md-8 offset-2">
    <table class="table table-responsive table-bordered">
      <thead class="table-dark text-center">
        <tr>
        
        <th scope="col">ID</th>
        <th scope="col">CID Number</th>
        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Phone #</th>
        <th scope="col">Email Address</th>
        <th scope="col">Action</th>
      </tr>
      </tr>
    </thead>
    <tbody>
        @foreach ($issuers as $issuer)
        <tr>
        <td>{{ $issuer->id }}</td>
        <td>{{ $issuer->cid }}</td>
        <td>{{ $issuer->Issuername }}</td>
        <td>{{ $issuer->designation }}</td>
        <td>{{ $issuer->pno }}</td>
        <td>{{ $issuer->email }}</td>
        <td>
          <a href="#" class="btn btn-primary">EDIT</a>
          <a href="#" class="btn btn-danger">DELETE</a>
        </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
</div>

</div>


                



                