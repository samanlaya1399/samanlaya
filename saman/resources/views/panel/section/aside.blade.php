<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('main.admin.panel')}}" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    @if(isset(auth()->user()->avatar))
                        <img src="{{auth()->user()->avatar['images']['100']}}" class="img-circle elevation-2" alt="User Image">
                    @else
                        <img src="/dist/img/user-admin.png" class="img-circle elevation-2" alt="User Image">
                    @endif
                </div>
                <div class="info">
                    <a href="{{route('user.edit',['user'=>auth()->id()])}}" class="d-block">{{auth()->user()->first_name .' '.auth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2" id="nav">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('main.admin.panel')}}" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                داشبورد
                                <span class="right badge badge-danger">جدید</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-product-hunt"></i>
                            <p>
                                محصول
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('product.index')}}" class="nav-link" id="">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست محصولات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('product.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>درج محصول</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-first-order"></i>
                            <p>
                                سفارشات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('factor.all')}}" class="nav-link" id="">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست فاکتورها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('factor.process')}}" class="nav-link">
                                    <i class="fa fa-handshake-o nav-icon"></i>
                                    <p>در حال تکمیل</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('factor.canceled')}}" class="nav-link">
                                    <i class="fa fa-hand-paper-o nav-icon"></i>
                                    <p>لغو شده</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('factor.success')}}" class="nav-link">
                                    <i class="fa fa-hand-peace-o nav-icon"></i>
                                    <p>موفق</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-ticket"></i>
                            <p>
                                کد تخفیف
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('discount.index')}}" class="nav-link" id="">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست کدهای تخفیف</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('discount.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت کد تخفیف</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-ticket"></i>
                            <p>
                                پیشنهاد ویژه
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('offer.index')}}" class="nav-link" id="">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست پیشنهادات ویژه</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('offer.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت پیشنهاد ویژه</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-diamond"></i>
                            <p>
                                برند
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('brand.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست برندها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('brand.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت برند </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-sitemap"></i>
                            <p>
                               دسته بندی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('grouping.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست بخش ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('grouping.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت بخش جدید </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-linode"></i>
                            <p>
                                نوع محصول
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('type.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست نوع محصولات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('type.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت نوع جدید </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-paint-brush"></i>
                            <p>
                               رنگ محصولات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('color.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست رنگ محصولات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('color.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت رنگ جدید </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-arrows"></i>
                            <p>
                               سایز محصولات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('size.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست سایز محصولات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('size.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت سایز جدید </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-map-signs"></i>
                            <p>
                               ویژگی محصولات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('property.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست ویژگی محصولات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('property.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت ویژگی جدید </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-building"></i>
                            <p>
                              انبارداری
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('price.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست موجودی انبار</p>
                                </a>
                            </li>
                            {{--<li class="nav-item">--}}
                                {{--<a href="{{route('property.create')}}" class="nav-link">--}}
                                    {{--<i class="fa fa-edit nav-icon"></i>--}}
                                    {{--<p>ثبت ویژگی جدید </p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('users.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users.month')}}" class="nav-link">
                                    <i class="fa fa-sort-numeric-desc nav-icon"></i>
                                    <p>فعالان ماه اخیر </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users.week')}}" class="nav-link">
                                    <i class="fa fa-sort-amount-desc nav-icon"></i>
                                    <p>فعالان هفته اخیر </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-newspaper-o"></i>
                            <p>
                                بلاگ
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('articles.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست مطالب</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('articles.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت مطلب جدید </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-newspaper-o"></i>
                            <p>
                                صفحات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('information.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>لیست صفحات ثابت</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('information.create')}}" class="nav-link">
                                    <i class="fa fa-edit nav-icon"></i>
                                    <p>ثبت صفحه جدید </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-comments"></i>
                            <p>
                                نظرات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('comments.index')}}" class="nav-link">
                                    <i class="fa fa-comments-o nav-icon"></i>
                                    <p>آخرین نظرات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('unsaccess.comment.admin')}}" class="nav-link">
                                    <i class="fa fa-commenting nav-icon"></i>
                                    <p>نظرات تایید نشده </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-comments"></i>
                            <p>
                                پیام ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('message.index')}}" class="nav-link">
                                    <i class="fa fa-comments-o nav-icon"></i>
                                    <p>آخرین پیام ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('unsaccess.message.admin')}}" class="nav-link">
                                    <i class="fa fa-commenting nav-icon"></i>
                                    <p>پیام‌های تایید نشده </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-cogs"></i>
                            <p>
                                تنظیمات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('user.edit',['user'=>auth()->id()])}}" class="nav-link">
                                    <i class="fa fa-address-card nav-icon"></i>
                                    <p>ویرایش حساب کاربری </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pass.edit',['user'=>auth()->id()])}}" class="nav-link">
                                    <i class="fa fa-unlock-alt nav-icon"></i>
                                    <p>تغییر رمز عبور </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-universal-access"></i>
                            <p>
                                سطوح دسترسی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('roles.index')}}" class="nav-link">
                                    <i class="fa fa-object-ungroup nav-icon"></i>
                                    <p>لیست نقش ها </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('roles.create')}}" class="nav-link">
                                    <i class="fa fa-key nav-icon"></i>
                                    <p>ثبت نقش جدید </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('level.index')}}" class="nav-link">
                                    <i class="fa fa-user-secret nav-icon"></i>
                                    <p> لیست مدیران </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('level.create')}}" class="nav-link">
                                    <i class="fa fa-user-plus nav-icon"></i>
                                    <p> ثبت نقش مدیر </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>