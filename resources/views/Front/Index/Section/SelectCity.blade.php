@extends('Front.Index.IndexPage')

@section('SelectCity')
    <div id="BackSelectCity">
        <div class="object_center_span" id="PageSelectCity">
            <h3 align="center">انتخاب شهر </h3>
            <div id="PageSelectCityScroll">
                @foreach($City as $i)
                <a href="{{route('SelectCity' , $i->href)}}">
                    <span class="object_center_span">{{$i->name}}</span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
