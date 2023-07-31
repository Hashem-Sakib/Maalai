@extends('../layout/navbar1')
@section('title','Transactions')
@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Transaction</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Transaction List</h3>
        </div>
        <div class="card-body">
    
  <table class="table table-bordered  table-hover">
    <br>
    <tr>
        <th>ID</th>
        <th>Customer</th>
       
        <th>More</th>
    </tr>
    @foreach ($transactions as $t)
        <tr>
       
            <td>{{$t->id}}</td>
            <td>{{$t->c_name}}</td>
            
            <td><a class="btn-sm btn-info" href="{{route('transaction.show',$t->id)}}">Details</a></td>
            
        </tr>
    @endforeach

    
</table>




</div>


@endsection




