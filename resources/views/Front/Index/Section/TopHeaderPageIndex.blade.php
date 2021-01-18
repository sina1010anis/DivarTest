<header id="TopHeaderPageIndex">
    <span id="Part1RightHeader">
        <a href="{{route('SelectCity' , $CityA)}}">
            <img src="{{url('style/Image/Icon/download.svg')}}" alt="">
        </a>
        <a href="{{route('HomePage')}}" id="btn_Select_City">{{$CityA}}</a>
    </span>
    <span id="Part1LeftHeader">

        <span id="ItemTopHeaderPageIndex">
            <a href="#" >تماسی با ما</a>
            <a href="#" >پشتیبانی و قوانین</a>
            <a href="#" >بلاگ</a>
            <a href="#" >درباره ما</a>
            <a href="{{route('ViewChat' , $CityA)}}" >چت</a>
            <a href="#" >دیوار من</a>

        </span>
        <a href="{{route('NewNewsUser' , $CityA)}}" class="btn_back_red_dirk_bg btn_new_news_free">ثبت اگهی رایگان</a>
        <button id="btn_menu_phone" class="fas fa-bars"></button>
    </span>
</header>
<div id="ViewMenuItemTopHeaderPageIndexPhone">
        <span id="ItemTopHeaderPageIndexPhone">
            <a href="#" >تماسی با ما</a>
            <a href="#" >پشتیبانی و قوانین</a>
            <a href="#" >بلاگ</a>
            <a href="#" >درباره ما</a>
            <a href="#" >چت</a>
            <a href="#" >دیوار من</a>
        </span>
</div>
