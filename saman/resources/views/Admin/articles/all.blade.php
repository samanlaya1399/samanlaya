@extends('Admin.master')
@section('script')
    <script>
        $("#allposts").addClass("active");
    </script>
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>مطالب</h2>
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
                @foreach($articles as $article)
                    <tr>
                        <td><a href="{{ $article->path() }}">{{ str_limit($article->title,$limit=62,$end='...') }}</a></td>
                        <td>
                            @foreach($article->categories->pluck('name') as $key=>$name )
                                {{$name.' - '}}
                                @endforeach
                        </td>
{{--                        <td>{{ $article->viewCount }}</td>--}}
                        <td>
                            {{--$article->categories->pluck('id')--}}
                            <form action="{{ route('articles.destroy'  , ['id' => $article->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-xs">
                                    <a href="{{ route('articles.edit' , ['id' => $article->id]) }}"  class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$articles->links()}}
    </div>
@endsection