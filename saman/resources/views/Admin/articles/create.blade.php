@extends('Admin.master')

@section('script')
   <script src="/ckeditor/ckeditor.js"></script>
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
       $('#category').selectpicker();
   </script>
    @endsection

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>ایجاد مقاله</h2>
        </div>
        <form class="form-horizontal" action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('Admin.section.errors')
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="title" class="control-label">عنوان مقاله</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="عنوان را وارد کنید" value="{{ old('title') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="category">بخش ها</label>
                    <select name="category[]" id="category" class="form-control" title="بخش مورد نظر را انتخاب کنید" multiple data-live-search="true" >
                        @foreach($categories as $id=>$name)
                        <option value="{{$id}}" {{ $id == 9 ? 'selected' : '' }}>{{$name}}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="description" class="control-label">توضیحات کوتاه</label>
                    <textarea rows="5" class="form-control" name="description" id="description" placeholder="توضیحات را وارد کنید">{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="body" class="control-label">متن</label>
                    <textarea rows="5" class="form-control" name="body" id="body" placeholder="متن مقاله را وارد کنید">{{ old('body') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="images" class="control-label">تصویر مقاله</label>
                    <input type="file" class="form-control" name="images" id="images" placeholder="تصویر مقاله را وارد کنید" value="{{ old('imageUrl') }}">
                </div>
                <div class="col-sm-6">
                    <label for="tags" class="control-label">تگ ها</label>
                    <input type="text" class="form-control" name="tags" id="tags" placeholder="تگ ها را وارد کنید" value="{{ old('tags') }}">
                </div>
            </div>
            <div class="form-group">
                @for($i=1; $i<13; $i++)
                <div class="col-sm-6">
                    <label for="images" class="control-label">{{' گالری عکس '.$i}}</label>
                    <input type="file" class="form-control" name="{{'gallery'.$i}}" id="gallery" placeholder="تصویر مقاله را وارد کنید" value="{{ old('gallery'.$i) }}">
                </div>
                    @endfor
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ارسال</button>
                </div>
            </div>
        </form>
    </div>
@endsection
