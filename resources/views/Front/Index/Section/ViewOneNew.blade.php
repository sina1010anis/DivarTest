@extends('Front.Index.ViewOneNew')

@section('OneNew')

    <div id="ViewOnePageNews">
        <span class="SectionViewOneNews" id="SectionLeft">
            <div id="ViewImage">
                <img src="{{url('style/Image/Data_User/Image_New') .'/'.$name->Image}}" alt="">
            </div>
            <div id="ViewImageSlid">
                <img class="ImageViewImageSlid" src="{{url('style/Image/Data_User/Image_New') .'/'.$name->Image}}" alt="">
                @foreach($image as $i)
                    <img class="ImageViewImageSlid" src="{{url('style/Image/Data_User/Image_New').'/'.$i->Image}}" alt="">
                @endforeach
            </div>
            <p class="SectionViewOneNewsP" dir="rtl">دیوار هیچ‌گونه منفعت و مسئولیتی در قبال معامله شما ندارد.</p>
            <hr class="SectionViewOneNewsHR">
                        <p class="SectionViewOneNewsP" dir="rtl">راهنمای خرید امن</p>
            <hr class="SectionViewOneNewsHR">
                        <p class="SectionViewOneNewsP" dir="rtl">گزارش مشکل اگهی</p>
            <hr class="SectionViewOneNewsHR">
        </span>
        <span class="SectionViewOneNews" id="SectionRight">
            <h3 align="right" dir="rtl">{{$name->Title}}</h3>
            <p class="SectionRightP">
                {{$name->City . ',' . $name->Address}}
            </p>
            @if($name->mobile == 0)
                <button style="cursor: not-allowed;border: 1px solid #4c4c4c ;outline: none;color: #4c4c4c!important;background-color: white" class="btn_back_red_dirk_bg ">اطلعات تماس</button>

            @else
                <button style="border: none;outline: none" class="btn_back_red_dirk_bg btn_back_red_dirk_bg_ok_mobile">اطلعات تماس</button>
            @endif
            @if($name->Chat == 0)
                <button style="cursor: not-allowed;border: 1px solid #4c4c4c ;outline: none;color: #4c4c4c!important;background-color: white" class="btn_back_red_dirk_bg ">چت</button>

            @else
                <a href="{{route('NewChat' , ['CityA' => $CityA , 'Mobile' => $name->mobile , 'id' => $name->id])}}" id="{{$name->mobile}}" style="border: none;outline: none" class="btn_back_red_dirk_bg ">چت</a>
            @endif

            <span class="iconViewOneNews"><i class="fas fa-bookmark"></i></span>
            <span class="iconViewOneNews"><i class="fas fa-share-alt"></i></span>
                        <span class="ViewShowNumberPhone">
                <span style="float: left;color: #a62626;font-size: 14px">{{$name->mobile}}</span>
                <span style="float: right;color: #707070;font-size: 14px">شماره موبایل</span>
            </span>
            <div>
                @foreach($item as $i)
                    @foreach($FilterItemAll as $ii)
                        @if($i->id_filter == $ii->id)
                            @foreach($FilterAll as $iii)
                                @if($iii->id == $ii->id_filter)
                                    <p class="AttrOneProduct">
                                        <b>{{$ii->Name}}</b>
                                        <span class="AttrOneProductSpan">{{$iii->Name}}</span>
                                    </p>
                                    <hr class="SectionViewOneNewsHR">
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
            </div>
            <br>
            <p style="text-align: right;font-size: 17px"><b>توضیحات</b></p>
            <p style="text-align: right;font-size: 14px;color: #6e6e6e;line-height: 25px;margin-left: 30px">
                {{$name->Desc}}
            </p>
        </span>
    </div>

@endsection
