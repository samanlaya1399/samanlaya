@extends('Admin.master')
@section('script')
    {{--<script>--}}
{{--//        $("").addClass("active");--}}
    {{--</script>--}}
@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>پیام</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام کاربر</th>
                    <th>متن پیام</th>
                    <th>ip</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$message->name}}</td>
                        <td>{{$message->body}}</td>
                        <td>{{$message->ip}}</td>
                        <td>
                            {{--$article->categories->pluck('id')--}}
                            <div style="display: flex">
                                <form action="{{ route('comments.destroy'  , ['id' => $message->id]) }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <div class="btn-group btn-group-xs">
                                        <button type="submit" class="btn btn-danger">حذف</button>
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
                    <th>زمان</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$message->email}}</td>
                    <td><a href="{{'http://'. $message->website}}" target="_blank">{{$message->website}}</a></td>
                    <td>{{jdate($message->created_at)->format('%d %B ، %Y')}}</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection