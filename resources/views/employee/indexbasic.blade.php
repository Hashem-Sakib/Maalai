@extends('../layout/navbar1')
@section('title','Employees')
@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Employee</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Employee List</h3>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">
                <br>
                <tr>
                    <th>ID</th>
                    <th>Employee</th>
                    <th>Phone</th>
                    <th>Designation</th>

                    <th>More</th>
                </tr>
                @foreach ($employees as $e)
                <tr>

                    <td>{{$e->id}}</td>
                    <td><a href="{{route('employee.show',$e->id)}}"><img src="{{ asset('image/' . $e->image) }}"
                                style="height:50px; width:50px; " /> {{$e->name}}</a></td>
                    <td><a href="tel:{{$e->phone}}" class="btn-sm btn-success">{{$e->phone}}</a></td>
                    <td>{{$e->designation_name}}</td>
                    

                    <td><a class="btn-sm btn-info" href="{{route('employee.show',$e->id)}}">Details</a></td>

                </tr>
                @endforeach


            </table>




        </div>
    </div>

</div>



        @endsection
