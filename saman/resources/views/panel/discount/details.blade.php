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
                                <h3 class="card-title"> جزئیات کدتخفیف {{$discount->id}}</h3>

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
                                        <th>کد تخفیف</th>
                                        <th>مقدار تخفیف </th>
                                        <th>وضعیت </th>
                                        <th>زمان ثبت </th>
                                        <th>ثبت کننده </th>

                                        <th>محدودیت استفاده </th>
                                    </tr>
                                    <tr>
                                        <td>{{$discount->code}}</td>
                                        <td>{{$discount->amount}}</td>
                                        <td>
                                            @if($discount->status == 0)
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
                                            {{jdate($discount->created_at)->format(' H:i:s - Y/m/d')}}
                                        </td>
                                        <td>{{$discount->user->name}}</td>
                                        <td>
                                            {{$discount->max}}
                                        </td>

                                    </tr>

                                </table>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover table-bordered table-striped">

                                </tr>
                            <tr>
                                <th>توضیحات </th>
                                <th>زمان انقضا </th>
                                <th>کاربر اختصاصی </th>

                            </tr>
                            <tr>
                                    <td>
                                        {{$discount->description }}
                                    </td>

                                    <td>
                                        @if($discount->expire != null)
                                        {{jdate($discount->expire)->format(' H:i:s - Y/m/d')}}
                                            @endif
                                    </td>

                                    <td>
                                        @if($discount->client_id != null)
                                        {{$discount->client->name }}
                                            @endif
                                    </td>

                            </tr>


                        </table>

                    </div>
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
