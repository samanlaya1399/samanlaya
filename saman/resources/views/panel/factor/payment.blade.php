@include('panel.section.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('panel.section.nav')

@include('panel.section.aside')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('panel.section.header')
    <!-- /.content-header -->
    @include('panel.section.reporter')

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <!-- /.row -->
                <!-- Main row -->
                <!-- /.row (main row) -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"> جزئیات پرداخت سفارش  {{$factor->id}}</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover table-bordered table-striped">
                                    <tr>
                                        <th>نام کاربر</th>
                                        <th>شماره فاکتور </th>
                                        <th>مبلغ </th>

                                        <th>وضعیت </th>
                                        <th>زمان </th>
                                        <th>کد یکتا </th>


                                        <th>توضیحات </th>
                                    </tr>
                                    @foreach($factor->payment as $payment)
                                    <tr>
                                        <td>{{$factor->user->name}}</td>
                                        <td>{{$factor->id}}</td>
                                        <td>{{$payment->price}}</td>
                                        <td>
                                            @if($payment->status == 1)
                                            <span class="info-box-icon bg-success">
                                                <i class="fa fa-hand-peace-o"></i>
                                            </span>
                                                @else
                                                    <span class="info-box-icon bg-danger">
                                                        <i class="fa fa-hand-paper-o"></i>
                                                    </span>

                                                @endif
                                        </td>
                                        <td>
                                            {{jdate($payment->created_at)->format(' H:i:s - Y/m/d')}}
                                        </td>
                                        <td>{{$payment->resnumber}}</td>
                                        <td>
                                            {{$payment->result}}
                                        </td>
                                    </tr>
                                        @endforeach


                                </table>

                            </div>
                            <!-- /.card-body -->
                        <!-- /.card -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>copyright &copy; 2019 <a href="http://mobtakerapp.ir/">مبتکر اپ</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('panel.section.script')

</body>
</html>
