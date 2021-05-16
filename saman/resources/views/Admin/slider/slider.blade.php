@extends('Admin.master')
@section('script')
    <script>
        $("#slideshow").addClass("active");
    </script>
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <form class="form-horizontal" action="{{ route('main.admin.slidenum') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('Admin.section.errors')
            <div class="form-group">
                <div class="col-sm-12 col-md-3">
                    <label for="title" class="control-label">تعداد پست های صفحه اصلی</label>
                    <input type="number" class="form-control" name="slidernum" max="9" min="1" id="slidernum" placeholder="عنوان را وارد کنید" value="{{ $currentnum[0]}}">
                    <br>
                    <button type="submit" class="btn btn-danger">ثبت</button>
                </div>
            </div>
        </form>
        <div class="page-header head-section">






            <h2>مطالب اسلایدر</h2>
            <a href="{{ route('articles.create') }}" class="btn btn-sm btn-primary">ارسال مطلب</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>عنوان مطلب</th>
                    <th>بخش ها</th>
                    {{--<th>مقدار بازدید</th>--}}
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><a href="{{ $post->path() }}">{{ str_limit($post->title,$limit=62,$end='...') }}</a></td>
                        <td>
                            @foreach($post->categories->pluck('name') as $key=>$name )
                                {{$name.' - '}}
                            @endforeach
                        </td>
                        {{--                        <td>{{ $post->viewCount }}</td>--}}
                        <td>
                            {{--$post->categories->pluck('id')--}}
                            <form action="{{ route('articles.destroy'  , ['id' => $post->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-xs">
                                    <a href="{{ route('articles.edit' , ['id' => $post->id]) }}"  class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$posts->links()}}
    </div>
@endsection