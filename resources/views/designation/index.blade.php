@extends('../layout/navbar1')
@section('title','Designation List')

@section('content')

<a style="float:right" class="btn-sm btn-success" href="create">Add New Designation</a>

<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Designation List</h3>
    </div>

    <table class="table table-bordered table-striped table-hover">
      <tr>
          <th>ID</th>
          <th>Name</th>
      </tr>
      @foreach ($designation as $d)
          <tr>
              <td>{{$d->id}}</td>
              <td>{{$d->name}}</td>
          </tr>
      @endforeach
  
      
  </table>


</div>


@endsection




