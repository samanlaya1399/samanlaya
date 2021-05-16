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


    </script>
    <script>
        $('#category').selectpicker();
        $('#created').selectpicker();
        $('#month').selectpicker();
    </script>
    {{--<script--}}
            {{--src="https://code.jquery.com/jquery-3.3.1.min.js"--}}
            {{--integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="--}}
            {{--crossorigin="anonymous"></script>--}}

    {{--<script>--}}
        {{--$($document).ready(function () {--}}
            {{--$('#formajax').on('submit', function (e) {--}}
              {{--e.preventDefault();--}}

              {{--var name = $('#name').val();--}}
              {{--var pic = $('#pic')[0].files[0];--}}
              {{--var _token = $('input[name="_token"]').val();--}}
              {{--var formData = new FormData();--}}
              {{--formData.append('name', name);--}}
              {{--formData.append('pic',pic);--}}



              {{--$.ajax({--}}
                  {{--method : 'POST',--}}
                  {{--url : '/getData',--}}
                  {{--data : formData,--}}
                  {{--contentType: false,--}}
                  {{--processData : false,--}}
                  {{--headers :{--}}
                      {{--'X-CSRF-TOKEN' : _token--}}
                  {{--}--}}


              {{--}).done(function (msg) {--}}
                  {{--console.log(msg);--}}
              {{--})--}}
            {{--})--}}
        {{--})--}}
    {{--</script>--}}
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>ویرایش مقاله</h2>
        </div>
        <form class="form-horizontal" action="{{ route('articles.update' , ['id' => $article->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            @include('Admin.section.errors')
            <div class="form-group">
                <div class="col-sm-12 col-md-8">
                    <label for="title" class="control-label">عنوان مقاله</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="عنوان را وارد کنید" value="{{ $article->title }}">
                </div>
                <div class="col-sm-12  col-md-4">
                    <label for="category">بخش ها</label>
                    <select name="category[]" id="category" class="form-control" title="بخش مورد نظر را انتخاب کنید" multiple data-live-search="true">
                        @foreach($categories as $id=>$name)
                            <option value="{{$id}}" @if (in_array($id, $current)) selected  @endif>{{$name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 ">
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
                <div class="col-sm-12">
                    <label for="images" class="control-label">تصویر مقاله</label>
                    <input type="file" class="form-control" name="images" id="images" placeholder="تصویر مقاله را وارد کنید">
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
            </div>
            {{--@if(isset($article->galleries['gallery2']))--}}
            {{--@foreach($article->galleries['gallery2'] as $key => $img)--}}
                {{--@endforeach--}}
            {{--<img src="{{$img}}" alt="">--}}
            {{--@endif--}}
            
            @if(in_array(4,$current) && $article->galleries != null)
            
            @for($i=1; $i<13; $i++)

                @if(isset($article->galleries['gallery'.$i]))

            <div class="form-group">
                <div class="col-sm-12 col-md-6">
                    <label for="images" class="control-label">{{'گالری عکس ' . $i}}</label>
                    <input type="file" class="form-control" name="{{'gallery'.$i}}" id="{{'gallery'.$i}}" placeholder="تصویر مقاله را وارد کنید">
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        @foreach($article->galleries['gallery'.$i] as $key => $image)
                            <div class="col-sm-2">
                                <label class="control-label">
                                    {{ $key }}
                                    <input type="radio" name="imagesThumb1" value="{{ $image }}" />
                                    <a href="{{ $image }}" target="_blank"><img src="{{ $image }}" width="100%"></a>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
                    <hr>
                    @else
                        <div class="col-sm-12 col-md-6">
                            <label for="images" class="control-label">{{'گالری عکس ' . $i}}</label>
                            <input type="file" class="form-control" name="{{'gallery'.$i}}" id="{{'gallery'.$i}}" placeholder="تصویر مقاله را وارد کنید">
                        </div>
                @endif

            @endfor
            
            @endif

            <div class="form-group">
                <div class="col-sm-6">
                    <label for="tags" class="control-label">تگ ها</label>
                    <input type="text" class="form-control" name="tags" id="tags" placeholder="تگ ها را وارد کنید" value="{{ $article->tags  }}">
                </div>
            </div>
            {{--<div class="form-group">--}}
                {{--<div class="col-sm-6">--}}
                    {{--<label for="tags" class="control-label">تاریخ</label>--}}
                    {{--{{$article->created_at}}--}}
                    {{--<p>{{jdate($article->created_at)}}</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="form-group">
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
            <div class="form-group">
                <div class="col-sm-4 col-md-2">
                    <label for="created" class="control-label">ساعت </label>
                    <input type="text" class="form-control" pattern="[0-9]{2}" maxlength="2" size="2" name="hour" id="hour" placeholder="ساعت" value="{{ jdate($article->created_at)->format('G')  }}">
                    <label for="created" class="control-label">دقیقه</label>
                    <input type="text" class="form-control" pattern="[0-9]{2}" maxlength="2" size="2" name="min" id="min" placeholder="روز" value="{{ jdate($article->created_at)->format('i')  }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 col-md-2">
                    <button type="submit" class="btn btn-danger">ارسال</button>
                </div>
{{--                {{jdtogregorian(jdate($article->created_at)->format('Y-m-d H:i:s'))}}--}}
{{--                {{\Morilog\Jalali\CalendarUtils::toGregorian(1395, 2, 18) === [2016, 5, 7]}}--}}
            </div>
        </form>
        <p> </p>
{{--{{\Morilog\Jalali\CalendarUtils::toGregorian(1395-4-15)}}--}}
    </div>


@endsection

