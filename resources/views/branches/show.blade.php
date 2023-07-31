@extends('../layout/navbar1')
@section('title','Branch Details')


@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Branch</a>
@endsection




@section('content')


<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12">
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Branches</h3>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover" border="1px">

                <tr>
                    <td>ID</td>
                    <td>{{$branches->id}}</td>
                </tr>

                <tr>
                    <td>Phone 1</td>
                    <td>{{$branches->phone1}}</td>
                </tr>
                <tr>
                    <td>Phone 2</td>
                    <td>{{$branches->phone2}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{$branches->address}}</td>
                </tr>




            </table>
            <br>
            <a class="btn-sm btn-warning" href="index" style="float:right">Back</a>

        </div>
    </div>

</div>




        @endsection
