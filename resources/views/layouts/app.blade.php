<!DOCTYPE html>
<html>

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('layouts.partials.navbar')

    @include('layouts.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.partials.footer')


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>
