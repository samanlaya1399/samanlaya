<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index.main')}}">پژوهشکده مجمع الفکر الاسلامی</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li><a href="#">Dashboard</a></li>--}}
                {{--<li><a href="#">Settings</a></li>--}}
                {{--<li><a href="#">Profile</a></li>--}}
                {{--<li><a href="#">Help</a></li>--}}
            {{--</ul>--}}
            {{--<form class="navbar-form navbar-right">--}}
                {{--<input type="text" class="form-control" placeholder="Search...">--}}
            {{--</form>--}}

            <div class="navbar-left">
                <a href="/logout" class="btn btn-sm btn-warning" style="margin: 15px">خروج از پنل کاربری</a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li id="dashboard"><a href="/admin/panel" >داشبورد</a></li>
                <li id="allposts"><a href="/admin/articles">مطالب</a></li>
                <li id="slideshow"><a href="{{route('main.admin.slider')}}">اسلایدر</a></li>

            </ul>
            <ul class="nav nav-sidebar">
{{--                @can('users-management')--}}
                <li><a href="/admin/users">کاربران <span class="badge"></span></a></li>
                {{--@endcan--}}
                {{--<li><a href="">پرداختی های موفق <span class="badge"></span></a></li>--}}
                {{--<li><a href="">پرداختی های ناموفق <span class="badge"></span></a></li>--}}
            </ul>
            <ul class="nav nav-sidebar">
                @can('show-comment')
                <li id="all-comments"><a href="{{route('comments.index')}}">همه نظرات</a></li>
                <li id="unsuccess-comment"><a href="{{route('unsaccess.comment.admin')}}">نظرات تایید نشده <span class="badge">{{$unsaccesfulCount}}</span></a></li>
                <li id="messages"><a href="{{route('message.index')}}">پیام ها<span class="badge"></span></a></li>
                {{--<li><a href="">Another nav item</a></li>--}}
                    @endcan
            </ul>
        </div>
    </div>
</div>