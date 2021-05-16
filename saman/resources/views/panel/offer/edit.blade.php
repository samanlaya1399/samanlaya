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
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"> ثبت کد تخفیف</h3>
                            </div>

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('offer.update', ['id' => $offer->id]) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="card-body">
                                
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="category">انتخاب محصول</label>
                                            <select name="product_id" id="category" class="form-control select" title="محصول مورد نظر را انتخاب کنید"  data-live-search="true" >
                                                <option value="" disabled selected>بدون انتخاب</option>
                                            @foreach($products as $user)
                                                    <option value="{{$user->id}}" @if($offer->product_id == $user->id) selected @endif >{{$user->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">درصد تخفیف </label>
                                        <input type="number" name="discount" class="form-control" id="exampleInputEmail1" placeholder="عدد وارد کنید" value="{{$offer->discount}}">
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            @foreach( $offer->images['images'] as $key => $image)
                                                <div class="col-sm-2">
                                                    <label class="control-label">
                                                        {{ $key }}
                                                        <input type="radio" name="imagesThumb" value="{{ $image }}" {{ $offer->images['thumb'] == $image ? 'checked' : '' }} />
                                                        <a href="{{ $image }}" target="_blank"><img src="{{ $image }}" width="100%"></a>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-5">
                                            <label for="exampleInputFile">انتخاب تصویر</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="images" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">درج تصویر</label>
                                                </div>
                                                {{--<div class="input-group-append">--}}
                                                {{--<span class="input-group-text" id="">Upload</span>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>


                                        </div>

                                    <label for="category">زمان انقضاء </label>

                                    <div class="form-group" style="display: flex;">
                                        <div class="col-sm-4 col-md-2">
                                            <label for="created" class="control-label">روز </label>
                                            <input type="text" class="form-control" pattern="[0-9]{2}" maxlength="2" size="2" name="day" id="day" placeholder="روز" value="{{jdate($offer->expire)->format('d')}}">
                                        </div>
                                        <div class="col-sm-4 col-md-2">
                                            <label for="created">ماه</label>
                                            <select name="month" id="month" class="form-control" title="زمان ثبت خبر"  data-live-search="true">
                                                @foreach($month_array as $i => $month)
                                                    <option value="{{$month_num[$i]}}" @if($month_num[$i] == jdate($offer->expire)->format('m')) selected @endif >{{$month}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-sm-4 col-md-2">
                                            <label for="created" class="control-label">سال</label>
                                            <input type="text" class="form-control" name="year" id="year" size="4" maxlength="4" placeholder="سال" value="{{jdate($offer->expire)->format('Y')}}" >
                                        </div>

                                    </div>
                                    <div class="form-group" style="display: flex;">
                                        <div class="col-sm-4 col-md-2">
                                            <label for="created" class="control-label">ساعت </label>
                                            <input type="text" class="form-control" pattern="[0-9]{2}" maxlength="2"  name="hour" id="hour" placeholder="ساعت" value="{{jdate($offer->expire)->format('H')}}">
                                        </div>
                                        <div class="col-sm-4 col-md-2">
                                            <label for="created" class="control-label">دقیقه</label>
                                            <input type="text" class="form-control" pattern="[0-9]{2}" maxlength="2" size="2" name="min" id="min" placeholder="دقیقه" value="{{jdate($offer->expire)->format('i')}}">
                                        </div>
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
