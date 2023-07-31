@extends('../layout/navbar1')
@section('title','Customers')

@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Customer</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Customer List</h3>
        </div>
        <div class="card-body">

    <table class="table table-bordered table-striped table-hover">
      <tr>
          <th>ID</th>
          <th>Customer Name</th>
          <th>More</th>
      </tr>
      @foreach ($customers as $c)
          <tr>
           
              <td>{{$c->id}}</td>
              <td>{{$c->name}}</td>
              
              <td><a class="btn-sm btn-info" href="{{route('customer.show',$c->id)}}">Details</a></td>
              
          </tr>
      @endforeach
  
      
  </table>


</div>
</div>

</div>



@endsection




