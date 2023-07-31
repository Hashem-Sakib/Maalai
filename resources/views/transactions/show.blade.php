@extends('../layout/navbar1')
@section('title','Transaction Details')

@section('content')

<a style="float:right" class="btn-sm btn-success" href="create">Add New Transaction</a>

<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Transaction Details</h3>
    </div>

    <table class="table table-bordered table-striped table-hover" border="1px">
        <tr>
            <td>ID</td>
            <td>{{$transactions->id}}</td>
        </tr>
        <tr>
            <td>Customer ID</td>
            {{-- <td>{{$transactions->c_id}}</td> --}}
            <td><a href="{{route('customer.show',$transactions->c_id)}}">{{$transactions->c_name}}</a></td>
        </tr>
       
        <tr>
            <td>Date-Time</td>
            <td>{{$transactions->date_time}}</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td>{{$transactions->amount}}</td>
        </tr>
        <tr>
            <td>Paid</td>
            {{-- <td>{{$transactions->emp_id}}</td> --}}
            <td><a href="{{route('employee.show',$transactions->emp_id)}}">{{$transactions->emp_name}}</a></td>
        </tr>
        <tr>
            <td>Employee ID</td>
            <td>{{$transactions->used_amount}}</td>
            
        </tr>
       
    </table>


</div>


@endsection
