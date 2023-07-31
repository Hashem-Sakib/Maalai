@extends('../layout/navbar1')
@section('title','Invoice Details')

@section('content')

<a style="float:right" class="btn-sm btn-success" href="create">Add New Invoice</a>

<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Invoice Details</h3>
    </div>

    <table class="table table-bordered table-striped table-hover" border="1px">
        <tr>
            <td>ID</td>
            <td>{{$invoices->id}}</td>
        </tr>
        <tr>
            <td>Customer ID</td>
            <td>{{$invoices->c_id}}</td>
            {{-- <td><a href="{{route('customer.show',$invoices->c_id)}}">Details</a></td> --}}
        </tr>
       
        <tr>
            <td>Date-Time</td>
            <td>{{$invoices->date_time}}</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td>{{$invoices->total_amount}}</td>
        </tr>
        <tr>
            <td>Paid</td>
            <td>{{$invoices->paid_amount}}</td>
        </tr>
        <tr>
            <td>Employee ID</td>
            <td>{{$invoices->emp_id}}</td>
            {{-- <td><a href="{{route('employee.show',$invoices->emp_id)}}">Details</a></td> --}}
        </tr>
        <tr>
            <td>Approval</td>
            <td>{{$invoices->approval_status}}</td>
        </tr>
        <tr>
            <td>Approved By</td>
            <td>{{$invoices->approved_by}}</td>
        </tr>
    </table>


</div>


@endsection
