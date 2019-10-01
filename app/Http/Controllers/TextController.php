<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use Illuminate\Support\Facades\AUth;
use App\Entory;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\CreateRequest;
use App\User;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts = Text::where('delete_flg',0)->get();

        $data = [
            'texts' => $texts,
        ];

        return view('main.post',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,CreateRequest $validate)
    {
        $text = new Text();
        $form = $request->all();
        unset($form['_token']);
        $text->fill($form)->save();
        return redirect()->route('mypage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $text = Text::find($id);

        $user = Auth::user();
        $data = Entory::where('user_id',$user->id)->where('texts_id',$id)->get();

        if($data->isEmpty()){
            $flg = false;
        }else{
            $flg = true;
        }

        $data = [
            'text' => $text,
            'flg' => $flg
        ];

        return view('main.postDetail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,CreateRequest $validate)
    {
        $text = Text::find($id);
        $ans = $request->input('submit');

        $form = $request->all();
        unset($form['_token']);
        $text->fill($form)->save();
        session()->flash('flash_message','記事の更新が完了しました');

        return redirect()->route('mypage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $text = Text::find($id);
        $text->delete_flg = 1;
        $text->save();
        session()->flash('flash_message','記事の削除が完了しました');
        return redirect()->route('mypage');
    }
}

