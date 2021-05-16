@extends('Admin.master')

@section('script')
    <script>
        $("#dashboard").addClass("active");
    </script>
    @endsection

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">پنل مدیریت</h1>

        <div class="row placeholders">
            @foreach($picpost as $pic)
            <div class="col-xs-6 col-sm-3 placeholder">
                <a href="{{route('article.show.client',['article'=>$pic->slug])}}">
                <img src="{{$pic->images['thumb']}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                </a>

                <h4>تصاویر</h4>
                <a href="{{route('article.show.client',['article'=>$pic->slug])}}">
                    <span class="text-muted">{{$pic->title}}</span></a>
            </div>
                @endforeach
        </div>

        <h2 class="sub-header">آخرین مطالب</h2>
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
    </div>
@endsection