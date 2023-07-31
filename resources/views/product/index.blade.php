@extends('../layout/navbar1')
@section('title','Products List')

@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Product</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Product List</h3>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>More</th>

                </tr>
                <tr>
                    <td>1</td>
                    <td>Sweet</td>
                    <td><a class="btn-sm btn-info" href="show">Details</a></td>

                </tr>

            </table>


        </div>


    </div>
</div>
        @endsection
