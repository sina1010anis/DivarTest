<?php

namespace App\Http\Controllers;

use App\Mail\OkSendNews;
use App\Models\Address;
use App\Models\City;
use App\Models\Menu_Item;
use App\Models\Menu_Parent;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class NewsNewController extends Controller
{
    public function NewNewsUser($CityA){
        $menu=Menu_Parent::orderBy('id' , 'DESC')->get();
        $city=City::orderBy('id' , 'ASC')->get();
        return view('Front.Index.Section.NewsNew' , compact('CityA' , 'city','menu'))->with('title' , 'ثبت اگهی جدید');
    }
    public function NewNewsLv1(Request $request){
        $data='';
        $item=Menu_Item::where('id_Parent' , $request->val)->orderBy('id' , 'DESC')->get();
        foreach ($item as $i){
            $data.='<option value="'.$i->id.'">'.$i->Name.'</option>';
        }
        return $data;
    }
    public function NewNewsLv1Save(Request $request , news $news){
        $news->id_user = auth()->user()->id;
        $news->mobile = auth()->user()->mobile;
        $news->Title = '0';
        $news->Price = '0';
        $news->City = '0';
        $news->Address = '0';
        $news->ItemMenu = $request->item;
        $news->Parent_Menu = $request->Parent;
        $news->Chat = 0;
        $news->Desc = '0';
        $news->Image = '0';
        $news->save();
    }
    public function NewNewsLv2Save(Request $request , news $news){
        $IdNews=news::where('id_user' , auth()->user()->id)->orderBy('id' , 'DESC')->get('id');
        $arr=json_decode($IdNews , true);
        $arrOneId=$arr[0]['id'];
        $tmp=$request->file('SetImage');
        $NameImage=$tmp->getClientOriginalName();
        $tmp->move(public_path('/style/Image/Data_User/Image_New/'),$NameImage);
        news::where('id' , $arrOneId)->update(['Title' => $request->Title , 'Desc' => $request->Desc , 'Price' => $request->Price , 'Image' => $NameImage]);
    }
    public function NewNewsLv3(Request $request){
        $data='';
        $item=Address::where('id_city' , $request->val)->orderBy('id' , 'ASC')->get();
        foreach ($item as $i){
            $data.='<option value="'.$i->Name.'">'.$i->Name.'</option>';
        }
        return $data;
    }
    public function NewNewsLv3Save(Request $request, news $news){
        $IdNews=news::where('id_user' , auth()->user()->id)->orderBy('id' , 'DESC')->get('id');
        $arr=json_decode($IdNews , true);
        $arrOneId=$arr[0]['id'];
        news::where('id' , $arrOneId)->update(['City' => $request->Parent , 'Address' => $request->item]);
    }

    public function NewNewsLv4Save(Request $request, news $news){
        $IdNews=news::where('id_user' , auth()->user()->id)->orderBy('id' , 'DESC')->get('id');
        $arr=json_decode($IdNews , true);
        $arrOneId=$arr[0]['id'];
        news::where('id' , $arrOneId)->update(['Chat' => $request->OkChat]);
        Mail::to(auth()->user()->email)->send(new OkSendNews());
    }
}
