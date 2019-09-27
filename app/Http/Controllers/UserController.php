<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\Auth;
use App\Text;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id,SettingRequest $validate)
    {
        $user = User::find($id);

        $form = $request->all();
        unset($form['_token']);
        dump($request->img);

        if (empty($request->input('img'))) {
            $name = $request->input('name');
            $email = $request->input('email');
            $age = $request->input('age');
            $type = $request->input('type');
            $skill = $request->input('skill');
            $text = $request->input('text');

            $user->name = $name;
            $user->email = $email;
            $user->age = $age;
            $user->type = $type;
            $user->skill = $skill;
            $user->text = $text;
            $user->save();
        }else{
            $path = Storage::disk('s3')->putFile('match-code', $request->file('img'), 'public');

            $form['img'] = Storage::disk('s3')->url($path);
            $user->fill($form)->save();
        }

        session()->flash('flash_message','更新完了しました');
        return redirect()->route('mypage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $user = Auth::user();
        $text = Text::where('user_id',$user->id)->get();

        if ($request->input('withdraw') == 'Yes') {
            User::find($user->id)->delete();
            Text::where('user_id',$user->id)->delete();
            Auth::logout();
            session()->flash('flash_message','退会が完了しました');
            return redirect()->route('index');
        }else{
            return redirect()->route('mypage');
        }
    }
}

