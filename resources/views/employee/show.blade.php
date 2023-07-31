@extends('../layout/navbar1')
@section('title','Employee Details')

@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Employee</a>
@endsection



@section('content')

{{-- 
<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12">
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Employee Details</h3>
        </div>
        <div class="card-body">

            <table class="table   table-hover">

                <img src="{{ asset('image/' . $employees->image) }}" style="height:200px; width:200px; " />
<br>
<br>




<tr>
    <td>ID</td>
    <td>{{$employees->id}}</td>
</tr>
<tr>
    <td>Name</td>
    <td>{{$employees->name}}</td>
</tr>

<tr>
    <td>Designation</td>
    <td>{{$employees->designation_name}}</td>
</tr>
<tr>
    <td>Phone</td>
    <td>{{$employees->phone}}</td>
</tr>

<tr>
    <td>Join Date</td>
    <td>{{$employees->join_date}}</td>
</tr>




</table>
<a style="float:right" class="btn-sm btn-warning " href="index">Back</a>
<br>



</div>
</div>

</div> --}}
{{-- -------------------------------------------------- --}}


<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Employee Details</h3>
    </div>

    <div class="row">
        <div class="col col-md-3 col-sm-12" style="margin:auto">
            <br>
            <h3>{{$employees->name}} ({{$employees->designation_name}})</h3>
            <img src="{{ asset('image/' . $employees->image) }}" style="height:300px; width:300px; " />
            <br><br><br><br>
        </div>
        <div class="col col-md-6 col-sm-12" style="float:left">

            <table class="table   table-hover">


                <br><br><br><br>




                <tr>
                    <td>ID</td>
                    <td>{{$employees->id}}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{$employees->name}}</td>
                </tr>

                <tr>
                    <td>Designation</td>
                    <td>{{$employees->designation_name}}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><a href="tel:{{$employees->phone}}" class="btn-sm btn-success">{{$employees->phone}}</a></td>
                </tr>

                <tr>
                    <td>Join Date</td>
                    <td>{{$employees->join_date}}</td>
                </tr>




            </table>


        </div>
    </div>



</div>





@endsection
