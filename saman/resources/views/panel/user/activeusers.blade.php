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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">جدول کاربران</h3>

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
                                        <th>شماره</th>
                                        <th>نام</th>
                                        <th>تعداد خرید</th>
                                        <th>موبایل</th>
                                        <th>پیامک</th>
                                        <th>ID تخفیف</th>
                                        <th>تخفیف</th>
                                    </tr>
                                    @foreach($users as $i=> $product)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{\App\User::find($product->user_id)->name}}</td>
                                        <td>{{$product->totalCount}}</td>
                                        <td>{{\App\User::find($product->user_id)->mobile}}</td>
                                        <td>

                                                <form action="{{route('users.sms.create')}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" value="{{\App\User::find($product->user_id)->mobile}}" name="number">
                                                    <button type="submit" class="btn btn-block btn-outline-success">   <i class="right fa fa-envelope "></i></button>
                                                </form>

                                        </td>
                                        <td>
                                            <form action="{{route('discount.action.simple')}}" method="post">
                                            {{csrf_field()}}
                                                <input type="number" name="code" >

                                        </td>
                                        <td>

                                                <input type="hidden" value="{{\App\User::find($product->user_id)->mobile}}" name="number">
                                                <button type="submit" class="btn btn-block btn-outline-success">

                                                    <i class="right fa fa-star-half-o"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach


                                </table>
{{--                                {{$users->links()}}--}}
                            </div>
                            <!-- /.card-body -->
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
