@extends('../layout/navbar1')
@section('title','Customer Details')

@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Customer</a>
@endsection
@section('content')



@section('content')


<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12">
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Customers</h3>
        </div>
        <div class="card-body">

    <table class="table table-bordered table-striped table-hover" border="1px">
        
        <tr>
            <td>ID</td>
            <td>{{$customers->id}}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{$customers->name}}</td>
        </tr>
       
        <tr>
            <td>Phone 1</td>
            <td>{{$customers->phone1}}</td>
        </tr>
        <tr>
            <td>Phone 2</td>
            <td>{{$customers->phone2}}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{$customers->address}}</td>
        </tr>
        

       
       
    </table>


</div>


@endsection
