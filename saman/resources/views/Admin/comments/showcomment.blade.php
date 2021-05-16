@extends('Admin.master')
@section('script')
    {{--<script>--}}
{{--//        $("").addClass("active");--}}
    {{--</script>--}}
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>نظر</h2>
\        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام کاربر</th>
                    <th>متن کامنت</th>
                    <th>مطلب مربوطه</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->body}}</td>
                        <td>
                            <a href=" {{$comment->commentable->path()}}">{{$comment->commentable->title}}</a>
                        </td>
                        <td>
                            {{--$article->categories->pluck('id')--}}
                            <div style="display: flex">
                                <form action="{{ route('comments.destroy'  , ['id' => $comment->id]) }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <div class="btn-group btn-group-xs">
                                        <button type="submit" class="btn btn-danger">حذف</button>
                                    </div>
                                </form>
                                <form action="{{ route('comments.update'  , ['id' => $comment->id]) }}" method="post">
                                    {{ method_field('patch') }}
                                    {{ csrf_field() }}
                                    <div class="btn-group btn-group-xs">
                                        <button type="submit" class="btn btn-success">تایید</button>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ایمیل</th>
                    <th>آدرس وبسایت</th>
                    <th>IP</th>
                    <th>زمان</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$comment->email}}</td>
                    <td><a href="{{'http://'.$comment->website}}" target="_blank">{{$comment->website}}</a></td>
                    <td>{{$comment->ip}}</td>
                    <td>{{jdate($comment->created_at)->format('%d %B ، %Y')}}</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection