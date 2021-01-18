@extends('Front.Index.SelectMenu')

@section('Index')
    <div id="ViewNewsSelectMenu">
        @foreach($news as $i)
            <a href="{{route('ViewNewOne', [ 'name'=>$i->Title , 'CityA' => $CityA])}}">
                <div>
                    <img src="{{url('style/Image/Data_User/Image_New') . '/' . $i->Image}}" alt="">
                    <p>{{$i->Title}}</p>
                    <?php
                    if($i->Price == 0){
                        echo '<span id="PriceNews" dir="rtl"> جهت معاوضه</span>';

                    }elseif($i->Price == 1){
                                              echo ' <span id="PriceNews" dir="rtl"> توافقی</span>';

                    }
                    elseif($i->Price == 2){
                      echo ' <span id="PriceNews" dir="rtl"> رایگان</span>';

                    }else{
                        echo '                    <span id="PriceNews" dir="rtl"> تومان '.$i->Price.'</span>';
                    }

                    ?>

                    <span id="AddressNews">{{$i->City}},{{$i->Address}}</span>
                </div>
            </a>
        @endforeach
    </div>
@endsection
