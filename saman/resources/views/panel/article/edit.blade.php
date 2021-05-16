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
                                <h3 class="card-title"> ویرایش محتوا</h3>
                            </div>

                              
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{ route('articles.update', ['id' => $article->id]) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">عنوان مطلب</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید" value="{{$article->title}}">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="grouping">بخش ها</label>
                                            <select name="category[]" id="grouping"  class="form-control select" title="بخش مورد نظر را انتخاب کنید"  data-live-search="true" >
                                                {{--<option disabled selected > انتخاب کنید </option>--}}
                                             @foreach($categories as $grouping)

                                                <option value="{{$grouping->id}}" @if (in_array($grouping->id, $current)) selected  @endif>{{$grouping->name}}</option>
                                             @endforeach
                                                {{--@foreach($categories as $id=>$name)--}}
                                                    {{--<option value="{{$id}}" {{ $id == 9 ? 'selected' : '' }}>{{$name}}</option>--}}
                                                {{--@endforeach--}}
                                            </select>
                                        
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="description" class="control-label">توضیحات کوتاه</label>
                                            <textarea rows="5" class="form-control" name="description" id="description" placeholder="توضیحات را وارد کنید">{{ $article->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="body" class="control-label">متن</label>
                                            <textarea rows="5" class="form-control" name="body" id="body" placeholder="متن مقاله را وارد کنید">{{ $article->body }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-8">
                                        <label for="exampleInputEmail1">تگ </label>
                                        <input name="tags" type="text" class="tagator" data-tagator-use-dimmer="true" data-tagator-autocomplete="['لباس']" value="{{$article->tags}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            @foreach( $article->images['images'] as $key => $image)
                                                <div class="col-sm-2">
                                                    <label class="control-label">
                                                        {{ $key }}
                                                        <input type="radio" name="imagesThumb" value="{{ $image }}" {{ $article->images['thumb'] == $image ? 'checked' : '' }} />
                                                        <a href="{{ $image }}" target="_blank"><img src="{{ $image }}" width="100%"></a>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
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



                                    <div class="form-group" style="display: flex;">
                                        <div class="col-sm-4 col-md-2">
                                            <label for="created" class="control-label">روز </label>
                                            <input type="text" class="form-control" pattern="[0-9]{2}" maxlength="2" size="2" name="day" id="day" placeholder="روز" value="{{ jdate($article->created_at)->format('%d')  }}">
                                        </div>
                                        <div class="col-sm-4 col-md-2">
                                            <label for="created">ماه</label>
                                            <select name="month" id="month" class="form-control" title="زمان ثبت خبر"  data-live-search="true">
                                                @foreach($month_array as $i => $month)
                                                    <option value="{{$month_num[$i]}}" @if ($month===jdate($article->created_at)->format('%B')) selected  @endif>{{$month}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-sm-4 col-md-2">
                                            <label for="created" class="control-label">سال</label>
                                            <input type="text" class="form-control" name="year" id="year" size="4" maxlength="4" placeholder="سال" value="{{ jdate($article->created_at)->format('%Y')  }}">
                                        </div>

                                    </div>
                                    <div class="form-group" style="display: flex;">
                                        <div class="col-sm-4 col-md-2">
                                            <label for="created" class="control-label">ساعت </label>
                                            <input type="text" class="form-control" pattern="[0-9]{2}" maxlength="2"  name="hour" id="hour" placeholder="ساعت" value="{{ jdate($article->created_at)->format('H')  }}">
                                        </div>
                                        <div class="col-sm-4 col-md-2">
                                            <label for="created" class="control-label">دقیقه</label>
                                            <input type="text" class="form-control" pattern="[0-9]{2}" maxlength="2" size="2" name="min" id="min" placeholder="دقیقه" value="{{ jdate($article->created_at)->format('i')  }}">
                                        </div>
                                    </div>




                                    <div class="col-md-6">

                                        <!-- /.card-header -->

                                        <!-- /.card-body -->
                                        <!-- /.card -->
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
        filebrowserUploadMethod : 'form',
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
    $(window).on('load', function() {
        {{--$(document).on('load','#grouping',function () {--}}
            {{--var id = $(this).val();--}}
            {{--var link ="{{asset('admin/get/grouping')}}";--}}

            {{--var div = $(this).parent();--}}
            {{--var op = " ";--}}
            {{--$.ajax({--}}
                {{--type: 'get',--}}
                {{--url: '{{asset('admin/get/grouping')}}',--}}
                {{--data:{'id':id},--}}
                {{--success:function (data) {--}}
                    {{--console.log("success");--}}
                    {{--console.log(data);--}}

                    {{--op += '<option value="0" selected disabled>نوع محصول را انتخاب کنید</option>';--}}
                    {{--for (var i=0; i<data.length;i++){--}}
                        {{--op += '<option value="'+data[i].id+'">'+data[i].title+'</option>';--}}

                    {{--}--}}

                    {{--div.find('#category1').html(" ");--}}
                    {{--div.find('#category1').append(op);--}}


                {{--},--}}
                {{--error:function () {--}}

                {{--}--}}
            {{--})--}}
        {{--});--}}
    });
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
//                   console.log("ok");
//                   console.log(data);

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
<script>
    $(document).ready(function () {
        var num = $('#num-pric').val();
        num = parseInt(num);
        if (num == 0){
            num+=1;
        }
        $('#num-pric').val(num);
//        console.log(num);

        $(document).on('click','#new-stock',function () {
            var id = $(this).val();
            var link ="{{asset('admin/get/price')}}";

            var div = $('#place').parent();
            var op = " ";
            $.ajax({
                type: 'get',
                url: '{{asset('admin/get/price')}}',
                data:'',
                success:function (data) {
//                    console.log("ok");
//                    console.log(data);
//                    console.log(data.colors);

                    num +=1;
//                    console.log(num);
                    $('#num-pric').val(num);

                    op += '<div class="card card-danger"><div class="card-header"><h4 class="card-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'+num;
                    op += '">';
                    op += 'قیمت/موجودی ';
                    op += '</a> </h4> </div> <div id="collapse'+num;
                    op += '" class="panel-collapse collapse in"> <div class="card-body"> <div class="form-group" > <label for="grouping">رنگ </label> <select name="color_id' +num;
                    op +=    '" id="brand" class="form-control select" title="برند را انتخاب کنید" data-live-search="true" > <option disabled selected > انتخاب رنگ </option>';
                    for (var i=0; i<data.colors.length;i++) {
//                        console.log( data.colors[i].title);
                        op += '<option value="'+ data.colors[i].id +'" > '+ data.colors[i].title +' </option>';
                    }
                    op += '</select> <label for="grouping">سایز </label> <select name="size_id' +num;
                    op += '" id="brand" class="form-control select" title="برند را انتخاب کنید" data-live-search="true" > <option disabled selected > انتخاب سایز </option>' ;
                    for (var i=0; i<data.sizes.length;i++) {
//                        console.log( data.sizes[i].title );
                        op += '<option  value="'+ data.sizes[i].id +'" > '+ data.sizes[i].title +' </option>';
                    }
                    op +=   ' </select> <label for="exampleInputEmail1">موجودی</label> <input type="number" name="stock' + num;
                    op +=   '" class="form-control" id="exampleInputEmail1" placeholder="عدد وارد کنید"> <label for="exampleInputEmail1">قیمت</label> <input type="number" name="price' + num;
                    op +=  '" class="form-control" id="exampleInputEmail1" placeholder="قیمت به تومان"> ';
                    op += ' <label for="exampleInputEmail1">حداقل خرید</label> <input type="number" name="minimum'+num;
                    op += '" class="form-control" id="exampleInputEmail1" placeholder="عدد وارد کنید"><label for="exampleInputEmail1"> تعداد عمده</label><input type="number" name="major'+num;
                    op += '" class="form-control" id="exampleInputEmail1" placeholder="عدد وارد کنید"><label for="exampleInputEmail1"> تخفیف </label><input type="number" name="discount'+num;
                    op += '" class="form-control" id="exampleInputEmail1" placeholder="تخفیف را وارد کنید"></div></div></div></div>';


//
//                    div.find('#property').html(" ");
                    div.find('#place').append(op);


                },
                error:function () {

                }
            })
        });
    });
</script>
</body>
</html>
