@extends('../layout/navbar1')
@section('title','Invoices')
@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Invoice</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Invoice List</h3>
        </div>
        <div class="card-body">

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Invoice ID</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>More</th>
        </tr>
        @foreach ($invoices as $i)
        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->c_id}}</td>
            <td>{{$i->c_name}}</td>
            <td><a class="btn-sm btn-info" href="{{route('invoice.show',$i->id)}}">Details</a></td>
        </tr>
        @endforeach


    </table>


</div>


@endsection
