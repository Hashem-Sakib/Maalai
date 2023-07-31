@extends('../layout/navbar1')
@section('title','Employees')
@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Employee</a>
@endsection

@section('scripts')

<link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Employee List</h3>
        </div>
        <div class="card-body">
              
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <br>

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Employee</th>
                            <th>Phone</th>
                            <th>Designation</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>


                </table>
            </div>
        </div>



    </section>




    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>



    {{-- table --}}

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // --

                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                // --
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });

    </script>

</body>
    </div>

</div>



        @endsection
