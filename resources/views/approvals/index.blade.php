@extends('../layout/navbar1')
@section('title','Approvals')
@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Approval</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Approvals</h3>
        </div>
        <div class="card-body">

    <table class="table table-bordered table-striped table-hover">
      <tr>
          <th>ID</th>
          <th>Employee Name</th>
          <th>Approval</th>
      </tr>
      @foreach ($approvals as $a)
          <tr>
              <td>{{$a->id}}</td>
              <td>{{$a->emp_id}}</td>
              <td>{{$a->emp_name}}</td>
              <td>{{$a->approval}}</td>
          </tr>
      @endforeach
  
      
  </table>


</div>


@endsection




