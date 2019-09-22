<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Text;
use App\Entory;
use App\User;

class MainController extends Controller
{
    //メインページのアクセスアクション
    public function index()
    {
        return view('main.index');
    }

    //ログアウトアクション
    public function logout()
    {
        Auth::logout();
        session()->flash('flash_message','ログアウトしました');
        return redirect()->route('index');
    }

    //マイページGETアクション
    public function mypage()
    {
        $user = Auth::user();
        if($user->type_id == 1){
            $type = 'エンジニア';
        }else{
            $type = 'デザイナー';
        }

        $texts = Text::where('delete_flg',0)->where('user_id',$user->id)->get();
        $entorys =Entory::where('delete_flg',0)->where('read_id',$user->id)->get();



        $param = [
            'user' => $user,
            'type' => $type,
            'texts' => $texts,
            'entorys' => $entorys,
        ];

        return view('main.mypage',$param);
    }

    //マイページに他者がアクセスした際のアクション
    public function mypageDetail(User $user)
    {
        if($user->type_id == 1){
            $type = 'エンジニア';
        }else{
            $type = 'デザイナー';
        }

        $texts = Text::where('user_id',$user->id)->get();

        $data = [
            'user' => $user,
            'type' => $type,
            'texts' => $texts
        ];

        return view('main.mypageDetail',$data);
    }

    //エントリーアクション
    public function entory(Request $request)
    {
        $id = $request->input('hidden');
        $entory = new Entory();
        $user = AUth::user();
        $text = Text::find($id);
        $reader = $text->user_id;

        $data = [
            'user_id' => $user->id,
            'texts_id' => $id,
            'read_id' => $reader,
        ];

        $entory->fill($data)->save();

        return back();
    }

    //エントリー合否
    public function decision(Request $request)
    {
        $id = $request->input('hidden');
        $decision = $request->input('submit');

        if($decision == '承諾'){
            $entory = Entory::find($request->hidden);
            $entory->delete_flg = 1;
            $entory->decision = 1;
            $entory->save();
        }else{
            $entory = Entory::find($request->hidden);
            $entory->delete_flg = 1;
            $entory->decision = 2;
            $entory->save();
        }

        return redirect()->route('news');
    }

    //ニュースページアクション
    public function news()
    {
        $user = Auth::user();
        $entory = Entory::where('read_id',$user->id)->get();
        return  view('main.news',compact('entory'));
    }

    //記事投稿アクセスアクション
    public function create()
    {
        $user = Auth::user();
        return view('main.create',compact('user'));
    }

    //記事削除ページアクション
    public function delete($id)
    {
        $text = Text::find($id);
        return view('main.delete',compact('text'));
    }

    //記事更新アクション
    public function update($id)
    {
        $text = Text::find($id);
        return view('main.update',compact('text'));
    }

    //セッティングページアクション
    public function setting()
    {
        $user = Auth::user();

        return view('main.setting',compact('user'));

    }

    //退会アクション
    public function withdrawal()
    {
        $user = AUth::user();
        return view('main.withdrawal',compact('user'));
    }

    //Detailページアクション
    public function detail()
    {
        return view('main.detail');
    }
}

