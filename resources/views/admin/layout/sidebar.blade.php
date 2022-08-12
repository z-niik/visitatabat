<div class="sidebar__nav">
    <span class="bars d-none px-4"></span>
    <div class="navbar-brand d-flex justify-content-center">
        <a class=" d-inline-block my-2" href="">
            <img class="img-fluid" src="{{ asset('/assets/images/logo2400 1.png') }}" height="50px" alt="">
        </a>
    </div>
    <ul>
        <li class="item-li i-dashboard"><a href="{{ route('admin.panel') }}">پیشخوان</a></li>

        <li class="item-li i-users has-sub-ui"><a class="has-arrow-ui" href="#">درخواست های ثبت نام</a>
            <ul class="collapse show">
                <li><a href="{{ route('userrequest') }}">لیست درخواست ها</a></li>
                <li><a href="{{ route('list.doc') }}"> مدارک</a></li>
            </ul>
        </li>
        <li class="item-li i-users has-sub-ui"><a class="has-arrow-ui" href="#">تسهیلات</a>
            <ul class="collapse show">
                <li class="item-li i-categories"><a href="{{ Route('loan.list') }}">لیست تسهیلات بدون تاریخ</a></li>
                <li class="item-li i-categories"><a href="{{ Route('loan.list.date') }}">لیست تسهیلات با تاریخ</a></li>
            </ul>
        </li>

        <li class="item-li i-users has-sub-ui"><a class="has-arrow-ui" href="#">تور</a>
            <ul class="collapse show">
                <li class="item-li i-categories"><a href="{{ Route('list.tours') }}">لیست تور ها</a></li>
                <li class="item-li i-categories"><a href="{{ Route('add.tour') }}">ثبت مشخصات تور</a></li>
                <li class="item-li i-categories"><a href="{{ Route('add.day') }}">ثبت روزهای اعزام</a></li>
            </ul>
        </li>

        <li class="item-li i-categories"><a href="{{ Route('period.panel') }}">دوره های اعزام</a></li>
        <li class="item-li i-slideshow"><a href="{{ Route('price.panel') }}">پلن های قیمتی</a></li>
        <li class="item-li i-banners"><a href="{{ route('state.list') }}"> لیست استان ها</a></li>
        <li class="item-li i-transactions"><a href="#">تراکنش ها</a></li>
        </li>
        <li class="item-li i-setting"><a href="#">تنظیمات</a>
        </li>
        <li class="item-li i-user__inforamtion"><a href="#">اطلاعات کاربری</a></li>

    </ul>
</div>
