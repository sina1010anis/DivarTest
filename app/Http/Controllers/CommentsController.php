<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\news;
use App\Models\ViewChat;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function ViewChat($CityA){
        $news=news::get();
        $ViewChatIndexPage=ViewChat::where(['mobile' => auth()->user()->mobile])->get();
        return view('Front.index.Section.ViewChat' , compact('CityA','ViewChatIndexPage','news'))->with('title' , 'چت دیوار');
    }
    public function NewChat($CityA , $Mobile,$id  , ViewChat $viewChat){
        $ViewChat=ViewChat::where(['mobile' => auth()->user()->mobile , 'mobile_shop' => $Mobile , 'id_news' => $id])->orderBy('id' , 'DESC')->get();
        $ViewChatIndexPage=ViewChat::where(['mobile' => auth()->user()->mobile])->get();
        $news=news::get();
        if ($ViewChat->count() == 0){
            $viewChat->mobile = auth()->user()->mobile;
            $viewChat->mobile_shop= $Mobile;
            $viewChat->id_news= $id;
            $viewChat->save();
        }
        return view('Front.index.Section.ViewChat' , compact('CityA' ,'news','ViewChatIndexPage', 'Mobile' , 'ViewChat'))->with('title' , 'چت دیوار');
    }
    public function ViewChatOne($id,$CityA,$Mobile){
        $ViewChat=ViewChat::where(['mobile' => auth()->user()->mobile , 'mobile_shop' => $Mobile , 'id_news' => $id])->orderBy('id' , 'DESC')->get();
        $ViewChatIndexPage=ViewChat::where(['mobile' => auth()->user()->mobile])->get();
        $news=news::get();
        $CommentsView=Chat::where('id_chat' , $id)->orderBy('id' , 'ASC')->get();
        return view('Front.index.Section.ViewChat' , compact('id','Mobile','CityA','CommentsView','ViewChat' ,'news', 'ViewChatIndexPage'))->with('title' , 'چت دیوار');
    }
    public function NewPmChat(Request $request , Chat $chat){
        $chat->mobile = auth()->user()->mobile;
        $chat->mobile_shop = $request->mobile;
        $chat->id_chat = $request->id;
        $chat->text = $request->text;
        $chat->save();
    }
}
