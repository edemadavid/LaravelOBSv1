@extends('layouts.admin')

@php
    $userid = Auth::user()->id
@endphp
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @if (!auth()->user()->is_admin)
        <!-- Main content -->
        <section class="content">


        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            <div class="col-lg-6  col-12">
                <!-- small box -->
                <a href="{{ route ('create') }}">Open a New Account</a>
                <div class="small-box bg-secondary">

                <div class="inner">
                    <p>Account Balance</p>
                    <div class="d-flex row">
                        <!-- <ion-icon name="cash-outline" size="large" class="ml-5"></ion-icon> -->

                        @foreach ($accounts as $account)
                        <div class="col-2 col-sm-4 col-xs-12">
                            <h3 class="mr-2" >

                                <p>{{$account->getAccountsTypes[0]->name}}</p>
                                <p>{{$account->account_balance}}</p>
                                <p>{{$account->getCurrency[0]->name}}</p>

                            </h3>
                        </div>
                        @endforeach
                    </div>
                </div>
                <a href="#" class="small-box-footer">History <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>Deposit</h3>
                </div>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>Transfer</h3>
                </div>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-3 col-sm-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Recharge</h3>
                </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-3 col-sm-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Pay Bills</h3>
                </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-3 col-sm-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Investments</h3>
                </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-3 col-sm-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Quick Loans</h3>
                </div>
                </div>
            </div>
            <!-- ./col -->


            <div class="col-12">

                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Transaction</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Account</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>000111222</td>
                        <td>00125689</td>
                        <td>Jon Josh</td>
                        <td>20000</td>
                        <td>Sent</td>
                        <td>21/08/2022 10:21am</td>
                    </tr>
                    <tr>
                        <td>000111222</td>
                        <td>00125689</td>
                        <td>Jon Josh</td>
                        <td>20000</td>
                        <td>Sent</td>
                        <td>21/08/2022 10:21am</td>
                    </tr>
                    <tr>
                        <td>000111222</td>
                        <td>00125689</td>
                        <td>Jon Josh</td>
                        <td>20000</td>
                        <td>Sent</td>
                        <td>21/08/2022 10:21am</td>
                    </tr>
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
            <!-- Main row -->

        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        @endif


        @if (auth()->user()->is_admin)
        <section class="content">

            <div class="container-fluid">
                Admin page
            </div>
        </section>

        @endif
    </div>
  <!-- /.content-wrapper -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
