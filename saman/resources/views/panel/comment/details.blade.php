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
                                <h3 class="card-title"> جزئیات نظر </h3>

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
                                        <th>ایمیل </th>
                                        <th>وضعیت </th>
                                        <th> ip </th>

                                        <th>وبسایت </th>
                                    </tr>
                                    <tr>
                                        <td>{{$comment->name}}</td>
                                        <td>{{$comment->email}}</td>
                                        <td>
                                            @if($comment->approved == 1)
                                                <span class="info-box-icon bg-success">
                                                <i class="fa fa-check"></i>
                                            </span>
                                            @else
                                                <span class="info-box-icon bg-info">
                                                        <i class="fa fa-times "></i>
                                                    </span>
                                            @endif
                                        </td>
                                        <td>{{$comment->ip}}</td>

                                        <td><a href="{{$comment->website}}" target="_blank">{{$comment->website}}</a></td>

                                    </tr>

                                </table>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover table-bordered table-striped">

                                </tr>
                            <tr>
                                <th>متن نظر </th>
                                <th> زمان </th>
                                <th>تنظیمات </th>

                            </tr>
                            <tr>
                                    <td>
                                        {{$comment->body }}
                                    </td>
                                <td>
                                    {{jdate($comment->created_at)->format(' H:i:s - Y/m/d')}}
                                </td>
                                    <td>
                                        <form action="{{ route('comments.destroy'  , ['id' => $comment->id]) }}" method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <div class="btn-group btn-group-xs">
                                                <a href="{{ route('comment.set.approved' , ['id' => $comment->id]) }}"  class="btn btn-success">تایید</a>
                                                <button type="submit" class="btn btn-danger"  onclick="return confirm('حذف شود؟')">حذف</button>
                                            </div>
                                        </form>
                                    </td>

                            </tr>


                        </table>

                    </div>
                        <!-- /.card -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
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
