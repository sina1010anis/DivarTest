@extends('Front.Index.IndexPageA')

@section('Index')
    <div style="float: left" class="ViewNewsSelectMenu" id="ViewNewsSelectMenu">
        @if($news->count() > 0)
            @foreach($news as $i)
                <a href="{{route('ViewNewOne'  , [ 'name'=>$i->Title , 'CityA' => $CityA])}}">
                    <div>
                        @if($i->Chat == 1)
                            <i title="داشتن چت" class="fas fa-comment-dots iconViewChat"></i>
                        @endif
                        <img src="{{url('style/Image/Data_User/Image_New') . '/' . $i->Image}}" alt="">
                        <p>{{$i->Title}}</p>
                        <?php
                        if ($i->Price == 0) {
                            echo '<span id="PriceNews" dir="rtl"> جهت معاوضه</span>';

                        } elseif ($i->Price == 1) {
                            echo ' <span id="PriceNews" dir="rtl"> توافقی</span>';

                        } elseif ($i->Price == 2) {
                            echo ' <span id="PriceNews" dir="rtl"> رایگان</span>';

                        } else {
                            echo '                    <span id="PriceNews" dir="rtl"> تومان ' . $i->Price . '</span>';
                        }

                        ?>

                        <span id="AddressNews">{{$i->City}},{{$i->Address}}</span>
                    </div>
                </a>
            @endforeach
        @else
            در این بخش اگهی موجود نمی باشد
        @endif
    </div>
    <div id="Menu_Right">
        <div class="ViewNewsSelectMenuSelectType">
            <h4>دسته بندی ها</h4>
            @foreach($ItemParentsMenuIndexPage as $i)
                <a href="{{route('ViewMenuItemRight' , ['City' => $CityA , 'ParentMenu' => $i->id])}}">{{$i->Name}}</a>
            @endforeach
        </div>
        <div class="ViewNewsSelectMenuSelectAddress">
            <h4>ادرس</h4>
            <select name="SelectAddress" id="{{$CityA}}">
                @foreach($AddressViewAll as $i)
                    @if($i->id_city == $CityA)
                        <option   class="SelectAddressOption"  value="{{$i->Name}}">{{$i->Name}}</option>
                    @endif
                @endforeach
            </select>
            <button <?php if (isset($ParentMenu)){echo 'class='.'"'.$ParentMenu.'"';}else{echo 'class='.'0';} ?>>جستوجو</button>
        </div>
        <div class="ViewNewsSelectMenuSelectPrice">
            <h4>محدوده قیمت</h4>
            <p>
                <label for="amountD">از (تومان) :</label>
                <input value="{{$news->min('Price')}}" type="text" id="amountD" readonly style="outline:none;width: 100%;border:0; color:#a62626; font-weight:bold;">
            </p>
            <p>
                <label for="amountU">تا (تومان) :</label>
                <input value="{{$news->max('Price')}}" type="text" id="amountU" readonly style="outline:none;width: 100%;border:0; color:#a62626; font-weight:bold;">
            </p>
            <div style="margin-bottom: 20px" id="slider-range"></div>
            <button <?php if (isset($ParentMenu)){echo 'class='.'"'.$ParentMenu.'"';}else{echo 'class='.'0';}?> id="btn_Search_BAR_Price">جستوجو</button>
        </div>
        <?php
        if (isset($ParentMenu)){

            ?>
        @foreach($FilterAll as $i)
            @if($i->id_Parent == $ParentMenu)
                <div id="{{$i->id}}" class="Filter FilterAll">
                    <h4>{{$i->Name}}</h4>
                    <select name="SelectOption" id="">
                        @foreach($FilterItemAll as $ii)
                            @if($i->id == $ii->id_filter)
                                <option value="{{$ii->id}}">{{$ii->Name}}</option>
                            @endif
                        @endforeach
                    </select>
                    <button id="SelectOption{{$i->id}}" class="btn_Search_BAR_Price">جستوجو</button>
                </div>
            @endif
        @endforeach
        <?php
        }

        ?>

        <script>
            $(function () {
                $("#slider-range").slider({
                    range: true,
                    min: {{$news->min('Price')}},
                    max: {{$news->max('Price')}},
                    values: [{{$news->min('Price')}}, {{$news->max('Price')}}],
                    slide: function (event, ui) {
                        $("#amountD").val(ui.values[0]);
                        $("#amountU").val(ui.values[1]);
                    }
                });
            });
        </script>
    </div>
@endsection
