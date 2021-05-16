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

                    @if (\Session::has('success'))
                        <div class="col-md-12">
                    <div class="callout callout-info">
                        <h5><i class="fa fa-info"></i> وضعیت: </h5>
                        <span class="card-title text-success">
                                              {!! \Session::get('success')[0] !!}

                        </span>
                    </div>
                    </div>
                    @endif

                    <div class="col-md-12">
                        <form action="{{route('user.update',['user'=>auth()->id()])}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">

                        <div class="card-header">
                            <h3 class="card-title"> اطلاعات کاربر</h3>


                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>نام</label>
                                        <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}" placeholder="اسم را وارد نمایید">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>نام خانوادگی</label>
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="نام خانوادگی را وارد نمایید">
                                    </div>

                                    <div class="form-group">
                                        <label>ایمیل </label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="ایمیل را وارد نمایید">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="gender" class="minimal" value="1" @if($user->gender == 1) checked @endif>
                                            مرد
                                        </label>
                                        <label>
                                            <input type="radio" name="gender" class="minimal" value="2" @if($user->gender == 2) checked @endif>
                                            زن
                                        </label>
                                    </div>

                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>کدملی</label>
                                        <input type="number" name="national_code" class="form-control" value="{{$user->national_code}}" placeholder="کدملی را وارد نمایید">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>تلفن ثابت</label>
                                        <input type="number" name="phone" class="form-control" value="{{$user->phone}}" placeholder="شماره تلفن را وارد نمایید">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="exampleInputFile">تصویر پروفایل</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="avatar" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">انتخاب عکس</label>
                                            </div>
{{--                                            <div class="input-group-append">--}}
{{--                                                <span class="input-group-text" id="">Upload</span>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">ذخیره</button>
                        </div>
                    </div>
                    <!-- /.card -->
                        </form>

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
//    $('.select').selectpicker();
</script>
<script>
//    var id;
    $(document).ready(function () {
        $(document).on('change','#grouping',function () {
            var id = $(this).val();
            var link ="{{asset('admin/get/grouping')}}";

            var div = $(this).parent();
            var op = " ";
           $.ajax({
               type: 'get',
               url: '{{asset('admin/get/grouping')}}',
               data:{'id':id},
               success:function (data) {
                   console.log("success");
                   console.log(data);

                   op += '<option value="0" selected disabled>نوع محصول را انتخاب کنید</option>';
                   for (var i=0; i<data.length;i++){
                       op += '<option value="'+data[i].id+'">'+data[i].title+'</option>';

                   }

                   div.find('#category1').html(" ");
                   div.find('#category1').append(op);


               },
               error:function () {
                   
               }
           })
       });
    });
</script>
<script>
//    var id;
    $(document).ready(function () {
        $(document).on('change','#category1',function () {
            var id = $(this).val();
            var link ="{{asset('admin/get/property')}}";

            var div = $('#property').parent();
            var op = " ";
           $.ajax({
               type: 'get',
               url: '{{asset('admin/get/property')}}',
               data:{'id':id},
               success:function (data) {
                   console.log("ok");
                   console.log(data);

//                   op += '<option value="0" selected disabled>نوع محصول را انتخاب کنید</option>';
                   for (var i=0; i<data.length;i++){
                       op += '<input type="hidden" name="'+'property'+i+'" class="form-control" placeholder="مقدار را وارد کنید" value="'+data[i].id+'">';
                       op += '<label for="exampleInputEmail1">'+data[i].title+'</label>'+
                       '<input type="text" name="'+'value'+i+'" class="form-control" id="exampleInputEmail1" placeholder="مقدار را وارد کنید">';

                   }
//
                   div.find('#property').html(" ");
                   div.find('#property').append(op);


               },
               error:function () {

               }
           })
       });
    });
</script>
</body>
</html>
