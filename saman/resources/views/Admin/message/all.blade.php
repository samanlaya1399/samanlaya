@extends('Admin.master')
@section('script')
    <script>
        $("#messages").addClass("active");
    </script>
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>پیام ها</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام کاربر</th>
                    <th>متن پیام</th>
                    <th>IP</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td><a href="{{route('message.show',['id'=>$comment->id])}}">{{$comment->name}}</a></td>
                        <td>{!! $comment->body !!}</td>
                      <td>
                        {{$comment->ip}}
                      </td>
                        <td>
                            {{--$article->categories->pluck('id')--}}
                            <form action="{{ route('message.destroy'  , ['id' => $comment->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-xs">
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$comments->links()}}
    </div>
@endsection