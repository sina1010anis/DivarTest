@extends('Front.Index.ViewOneNew')

@section('OneNew')

    <div class="object_center_span PageNewNews PageNewNews1">
        <h4>ثبت دسته</h4>
        <br>
        <label for="SelectSubMenu">انتخاب دسته اصلی</label>
        <select name="SelectSubMenu" id="SelectSubMenu">
            @foreach($menu as $i)
                <option value="{{$i->id}}">{{$i->Name}}</option>
            @endforeach
        </select>
        <br><br>
        <button class="btn_set_sub_menu">ثبت دسته</button>
        <br>
        <br>
        <label for="SelectMenu">زیر دسته</label>
        <select name="SelectMenu" id="SelectMenu"></select>
        <br>
        <br>
        <button class="btn_border_bg_red btn_border_bg_red1">مرحله بعدی</button>
    </div>

    <div class="object_center_span PageNewNews PageNewNews2">
        <h4>مشخصات</h4>
        <br>
        <form class="Form_News_L2" action="" method="post" enctype="multipart/form-data">
            @csrf
            <label for="SetTitle">موضوع اگهی</label>
            <input name="SetTitle" id="SetTitle" placeholder="موضوع اگهی">
            <br><br>
            <textarea name="SetDesc" id="SetDesc" placeholder="توضیحات"></textarea>
            <br><br>
            <label for="SetPrice">قیمت</label>
            <input type="number" name="SetPrice" id="SetPrice" placeholder="قیمت">
            <br>
            <label for="SetImage">اپلود عکس</label>
            <input type="file" name="SetImage" id="SetImage" placeholder="اپلود عکی">
            <br>
            <button type="submit" class="btn_border_bg_red btn_border_bg_red2">مرحله بعدی</button>
        </form>
    </div>

    <div class="object_center_span PageNewNews PageNewNews3">
        <h4>ثبت ادرس</h4>
        <br>
        <label for="SelectCity">انتخاب شهر</label>
        <select name="SelectCity" id="SelectCity">
            @foreach($city as $i)
                <option value="{{$i->href}}">{{$i->name}}</option>
            @endforeach
        </select>
        <br><br>
        <button class="btn_set_city">ثبت شهر</button>
        <br>
        <br>
        <label for="SelectAddress">ادرس</label>
        <select name="SelectAddress" id="SelectAddress"></select>
        <br>
        <br>
        <button class="btn_border_bg_red btn_border_bg_red3">مرحله بعدی</button>
    </div>
    <div class="object_center_span PageNewNews PageNewNews4">
        <h4>امکان چت</h4>
        <br>
        <form class="Form_F_New_News" action="{{route('NewNewsLv4Save')}}" method="post">
            @csrf
            <br>
            <select name="OkChat" id="">
                <option value="1">فعال</option>
                <option value="0">غیر فعال</option>
            </select>
            <br>
            <br>
            <button type="submit" class="btn_border_bg_red btn_border_bg_red4">ثبت</button>
        </form>
    </div>
@endsection
