@extends('Admin.master')
@section('script')
    <script>
        $("#unsuccess-comment").addClass("active");
    </script>
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>نظرات تایید نشده</h2>
        </div>
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
                @foreach($comments as $comment)
                    <tr>
                        <td><a href="{{route('comments.show',['id'=>$comment->id])}}">{{$comment->name}}</a></td>
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
                @endforeach
                </tbody>
            </table>
        </div>
        {{$comments->links()}}
    </div>
@endsection