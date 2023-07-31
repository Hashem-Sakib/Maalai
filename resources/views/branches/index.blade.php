@extends('../layout/navbar1')
@section('title','Branch List')
@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Branch</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Branch List</h3>
        </div>
        <div class="card-body">

    <table class="table table-bordered table-striped table-hover">
      <tr>
          <th>ID</th>
          <th>Address</th>
          <th>More</th>
      </tr>
      @foreach ($branches as $d)
          <tr>
              <td>{{$d->id}}</td>
              <td>{{$d->address}}</td>
              <td><a class="btn-sm btn-info" href="{{route('branch.show',$d->id)}}">Details</a></td>
          </tr>
      @endforeach
  </table>


</div>
</div>

</div>



@endsection




