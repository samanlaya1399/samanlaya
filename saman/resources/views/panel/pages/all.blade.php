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
                                <h3 class="card-title">جدول صفحات</h3>

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
                                        <th>عنوان</th>
                                        <th>کلید</th>
                                        <th>تنظیمات</th>
                                    </tr>
                                    @foreach($articles as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><a target="_blank" href="{{route('page.show.client',['slug'=>$product->slug])}}">{{$product->title}}</a></td>
                                        <td> {{$product->key}}    </td>
                                        <td>
                                            <form action="{{ route('information.destroy'  , ['id' => $product->id]) }}" method="post">
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }}
                                                <div class="btn-group btn-group-xs">
                                                    <a href="{{ route('information.edit' , ['id' => $product->id]) }}"  class="btn btn-primary">ویرایش</a>
                                                    <button type="submit" class="btn btn-danger"  onclick="return confirm('حذف شود؟')">حذف</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach


                                </table>
                                {{$articles->links()}}
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
