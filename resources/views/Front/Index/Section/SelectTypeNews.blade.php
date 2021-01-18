<div id="SelectTypeNews">
    <div id="SelectTypeNewsInputPage" class="object_center">
        <input class="{{$CityA}}" name="InputSearchIndexPage" type="text" placeholder="جستوجو اگهی">
        <span class="object_center" id="btnSelectTypeNews">همه اگهی ها</span>
    </div>
    <div id="PageSearchView">

    </div>
    <div id="MenuTypeTopMenu">
        @foreach($ItemParentsMenuIndexPage as $i)
            <span class="btnMenuTypeTopMenu" id="{{$i->id}}"> {{$i->Name}} <i class="fas fa-sort-down"></i>  </span>
        @endforeach
    </div>
</div>
@foreach($ItemParentsMenuIndexPage as $i1)
    <div class="MenuSub" id="MenuSub{{$i1->id}}">
    @foreach($ItemItemMenuIndexPage as $i2)
        @if($i1->id  == $i2->id_Parent)
            <a href="{{route('ViewNewItem', ['City'=>$CityA , 'Item'=> $i2->id])}}">
                {{$i2->Name}}
            </a>
        @endif
    @endforeach
    </div>
@endforeach
