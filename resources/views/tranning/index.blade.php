@extends('layouts.app')

@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Danh sách kế hoạch huấn luyện</h3>

                    <a type="button" href="{{route('tranning.create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tạo kế hoạch mới</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Tên kế hoạch</th>
                            <th>Số người</th>
                            <th>Số lớp</th>
                            <th>Tổng tiền</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>
                            <th>Quản lý review</th>
                            <th>Công ty</th>
                            <th>Trạng thái</th>
                            <th>Mô tả</th>
                            <th>Người tạo</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trannings as $tranning)
                            <tr>
                                <td>{{$tranning->name}}</td>
                                <td>{{$tranning->people_total}}</td>
                                <td>{{$tranning->class_total}}</td>
                                <td>{{$tranning->cost}} triệu</td>
                                <td>{{$tranning->start_date}}</td>
                                <td>{{$tranning->end_date}}</td>
                                <td>{{$tranning->getAssignTo()}}</td>
                                <td>{{$tranning->company->name}}</td>
                                <td>
                                    <span class="float-right badge bg-{{config('constants.TRANNING_STATUS_COLOR')[$tranning->status]}}">
                                        {{$tranning->getStatus()}}
                                    </span>
                                </td>
                                <td>{{$tranning->description}}</td>
                                <td>{{$tranning->user->name}}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @if(Auth::user()->id == $tranning->user_id ||  Auth::user()->hasRole('admin'))
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    @endif
                                    @if(Auth::user()->id == $tranning->assign_to ||  Auth::user()->hasRole('admin'))
                                        <a class="btn btn-success btn-sm" href="#">
                                            <i class="fas fa-check-circle"></i>
                                        </a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection
@section('end_scripts')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection