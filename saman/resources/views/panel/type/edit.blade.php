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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"> ویرایش بخش</h3>
                            </div>

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('type.update',['id'=>$type->id]) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان بخش</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید" value="{{$type->title}}">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="category">بخش ها</label>
                                            <select name="group_id" id="category" class="form-control select" title="بخش مورد نظر را انتخاب کنید"  data-live-search="true" >
                                                @foreach($groups as $group)
                                                    <option value="{{$group->id}}" @if($group->id == $type->group_id) selected @endif >{{$group->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">توضیحات بخش</label>
                                        <textarea rows="5" class="form-control" name="description" id="description" placeholder="توضیحات را وارد کنید">{{ $type->description }}</textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
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
<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/js/bootstrap-select.min.js')}}"></script>
<script>
    CKEDITOR.replace('body',{
        language: 'fa',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl : '/admin/panel/upload-image',
        filebrowserImageUploadUrl : '/admin/panel/upload-image',
        font_defaultLabel:'Sahel',
        font_names: "ساحل/Sahel;یکان/yekan;Arial/Arial, Helvetica, sans-serif;Comic Sans MS/Comic Sans MS, cursive;Courier New/Courier New, Courier, monospace;Georgia/Georgia, serif;Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;Tahoma/Tahoma, Geneva, sans-serif;Times New Roman/Times New Roman, Times, serif;Trebuchet MS/Trebuchet MS, Helvetica, sans-serif;Verdana/Verdana, Geneva, sans-serif",
    });
    CKEDITOR.config.pasteFromWordRemoveFontStyles = true;
</script>
<script>
    $('.select').selectpicker();
</script>

</body>
</html>
