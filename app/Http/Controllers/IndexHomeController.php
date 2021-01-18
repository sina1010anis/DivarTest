<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\City;
use App\Models\Image;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexHomeController extends Controller
{
    public function index()
    {
        $City = City::orderBy('id', 'ASC')->get();
        return view('Front.Index.Section.SelectCity', compact('City'))->with('title', 'نیازمندی های دیوار');
    }

    public function SelectCity($CityA)
    {
        $news = news::where(['City' => $CityA])->orderBy('id', 'DESC')->get();
        return view('Front.Index.Section.IndexPage', compact('CityA', 'news'))->with('title', 'اگهی های ' . $CityA);
    }

    public function ViewNewItem($City, $Item)
    {
        $news = news::where(['City' => $City, 'ItemMenu' => $Item])->orderBy('id', 'DESC')->get();
        return view('Front.Index.Section.ViewSelectTypeMenu', ['CityA' => $City, 'news' => $news])->with('title', 'اگهی ها');
    }

    public function SearchNews(Request $request)
    {
        $data = '';
        $newsSearch = news::where('City', $request->City)->where('Title', 'LIKE', '%' . $request->val . '%')->get();
        foreach ($newsSearch as $i) {
            $data .= '<a href="' . $i->Title . '">' . $i->Title . '</a>';
        }
        return $data;
    }

    public function ViewMenuItemRight($CityA, $ParentMenu)
    {
        $news = news::where(['City' => $CityA, 'Parent_Menu' => $ParentMenu])->orderBy('id', 'DESC')->get();
        return view('Front.Index.Section.IndexPage', compact('CityA', 'news' , 'ParentMenu'))->with('title', 'اگهی های ' . $CityA);
    }

    public function ViewAddressItemRight(Request $request)
    {
        $data = '';
        if ($request->Parent == 0){
            $news = news::where(['City' => $request->City, 'Address' => $request->Address])->orderBy('id', 'DESC')->get();
        }else{
            $news = news::where(['City' => $request->City, 'Address' => $request->Address , 'Parent_Menu' => $request->Parent])->orderBy('id', 'DESC')->get();
        }
        foreach ($news as $i) {
            $Chat = ($i->Chat == 1) ? '<i title="داشتن چت" class="fas fa-comment-dots iconViewChat"></i>' : '';
            $Image ='<img src="'.url("style/Image/Data_User/Image_New") . "/" . $i->Image.'">';
            $Title ='<p>'. $i->Title.'</p>';
            $Address = '<span id="AddressNews">' . $i->City . ',' . $i->Address . '</span>';
            $Price = ($i->Price == 0) ? '<span id="PriceNews" dir="rtl"> جهت معاوضه</span>'
                : ($i->Price == 1) ? '<span id="PriceNews" dir="rtl"> توافقی</span>'
                    : ($i->Price == 2) ? '<span id="PriceNews" dir="rtl"> رایگان</span>'
                        : '<span id="PriceNews" dir="rtl"> تومان ' . $i->Price . '</span>';
            $data .= '<a href="'.route('ViewNewOne', [ 'name'=>$i->Title , 'CityA' => $request->City]).'"><div>' .
                $Chat
                .
                $Image
                .
                $Title
                .
                $Price
                .
                $Address
                . '</div></a>';
        }
        return $data;
    }
    public function ViewPriceItemRight(Request $request){
        $data = '';
        if ($request->Parent == 0){
            $news = news::where('Price' ,'>=', $request->PriceD)->where('Price' ,'<=', $request->PriceU)->orderBy('id', 'DESC')->get();
        }else{
            $news = news::where('Parent_Menu' , $request->Parent)->where('Price' ,'>=', $request->PriceD)->where('Price' ,'<=', $request->PriceU)->orderBy('id', 'DESC')->get();
        }
        foreach ($news as $i) {
            $Chat = ($i->Chat == 1) ? '<i title="داشتن چت" class="fas fa-comment-dots iconViewChat"></i>' : '';
            $Image ='<img src="'.url("style/Image/Data_User/Image_New") . "/" . $i->Image.'">';
            $Title ='<p>'. $i->Title.'</p>';
            $Address = '<span id="AddressNews">' . $i->City . ',' . $i->Address . '</span>';
            $Price = ($i->Price == 0) ? '<span id="PriceNews" dir="rtl"> جهت معاوضه</span>'
                : ($i->Price == 1) ? '<span id="PriceNews" dir="rtl"> توافقی</span>'
                    : ($i->Price == 2) ? '<span id="PriceNews" dir="rtl"> رایگان</span>'
                        : '<span id="PriceNews" dir="rtl"> تومان ' . $i->Price . '</span>';
            $data .= '<a href="'.route('ViewNewOne' , [ 'name'=>$i->Title , 'CityA' => 'mashhad']).'"><div>' .
                $Chat
                .
                $Image
                .
                $Title
                .
                $Price
                .
                $Address
                . '</div></a>';
        }
        return $data;
    }
    public function ViewNewOne($CityA , news $name){
        $item=Attribute::orderBy('id' , 'DESC')->where('id_product' , $name->id )->get();
        $image=Image::orderBy('id' , 'DESC')->where('id_product' , $name->id)->get();
        return view('Front.Index.Section.ViewOneNew' , compact('item','image','name','CityA' ))->with('title' , $name->Title);
    }
    public function SelectFilterNews(Request $request){
        $data='';
        $newsFilter=DB::table('attributes as t1')
            ->where('t1.id_filter' , $request->id)
            ->orderBy('t1.id' , 'ASC')
            ->leftJoin('news As t2' , 't2.id' , '=' , 't1.id_product')
            ->select('t2.*' , 't1.id_filter')
            ->get();
        foreach ($newsFilter as $i){
            $Chat = ($i->Chat == 1) ? '<i title="داشتن چت" class="fas fa-comment-dots iconViewChat"></i>' : '';
            $Image ='<img src="'.url("style/Image/Data_User/Image_New") . "/" . $i->Image.'">';
            $Title ='<p>'. $i->Title.'</p>';
            $Address = '<span id="AddressNews">' . $i->City . ',' . $i->Address . '</span>';
            $Price = ($i->Price == 0) ? '<span id="PriceNews" dir="rtl"> جهت معاوضه</span>'
                : ($i->Price == 1) ? '<span id="PriceNews" dir="rtl"> توافقی</span>'
                    : ($i->Price == 2) ? '<span id="PriceNews" dir="rtl"> رایگان</span>'
                        : '<span id="PriceNews" dir="rtl"> تومان ' . $i->Price . '</span>';
            $data .= '<a href="'.route('ViewNewOne' , [ 'name'=>$i->Title , 'CityA' => 'mashhad']).'"><div>' .
                $Chat
                .
                $Image
                .
                $Title
                .
                $Price
                .
                $Address
                . '</div></a>';
        }
        return $data;
    }
    public function ErrMobile(){
        return view('Front.Index.Section.ErrMobile');
    }
}
