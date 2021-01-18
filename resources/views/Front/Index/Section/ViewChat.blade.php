@extends('Front.Index.ViewOneNew')

@section('OneNew')

    <div id="ViewChatDivar" class="object_center_span">
        <span class="PartLeft">
            @if(isset($CommentsView))
                    <div class="ViewComments">
                        <ul>
                            @foreach($CommentsView as $i)
                                @if($i->mobile == auth()->user()->mobile)
                                    <li class="Comment MyComment">{{$i->text}}</li>
                                @else
                                    <li class="Comment SendComment">{{$i->text}}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="InputChat">
                        <input class="TextChat" type="text" name="TextChat">
                        <button id="{{$Mobile}}" class="{{$id}}"><i class="fas fa-paper-plane"></i></button>
                    </div>

            @else
                <p>لطفا یک چت را انتخاب کنید</p>
            @endif
        </span>
        <span class="PartRight">
             <ul>
                 @foreach($ViewChatIndexPage as $i)
                     @foreach($news as $ii)
                         @if($i->id_news == $ii->id)
                             <li>
                                 <a href="{{route('ViewChatOne' , ['id'=>$i->id,'CityA'=>$CityA, 'Mobile' =>$i->mobile_shop])}}">
                                     <img src="{{url('style/Image/Data_User/Image_New') . '/' . $ii->Image}}" alt="">
                                     <p style="width: 50%;text-align: right;direction: rtl">{{$ii->Title}}</p>
                                </a>
                             </li>
                         @endif
                     @endforeach
                 @endforeach
            </ul>
        </span>
    </div>

@endsection
