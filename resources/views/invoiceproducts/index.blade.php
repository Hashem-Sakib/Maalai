@extends('../layout/navbar1')
@section('title','Invoice Products')
@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Invoice Products</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Invoice  Product List</h3>
        </div>
        <div class="card-body">
    <table class="table table-bordered table-striped table-hover">
      <tr>
        
          <th>ID</th>
          <th>Product Name</th>
          <th>More</th>
      </tr>
      @foreach ($invoiceproducts as $ip)
          <tr>
           
              <td>{{$ip->id}}</td>
              <td>{{$ip->name}}</td>
              
              
              <td><a class="btn-sm btn-info" href="{{route('invoiceproduct.show',$ip->id)}}">Details</a></td>
              
          </tr>
      @endforeach
  
      
  </table>


</div>


@endsection




