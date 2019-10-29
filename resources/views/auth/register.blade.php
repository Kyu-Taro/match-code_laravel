@extends('main.form')
@section('href','css/register.css')
@section('title','Match-Code|新規会員登録')

<i class="fas fa-bars"></i>
<i class="fas fa-undo"></i>
<div class="menu">
    <span class="comment">Menu</span>
    <ul class="menu-ul">
        <li><a href="/login">ログイン</a></li>
        <li><a href="/">トップ</a></li>
        <li><a href="/detail">サイト詳細</a></li>
        <li><a href="/post">募集一覧</a></li>
        <li><a href="/mypage">マイページ</a></li>
    </ul>
</div>

@section('header')
    @component('components.header')
        @slot('route1')
            login
        @endslot
        @slot('link1')
            ログイン
        @endslot
        @slot('route2')
            /
        @endslot
        @slot('link2')
            トップ
        @endslot
        @slot('route3')
            detail
        @endslot
        @slot('link3')
            サイト詳細
        @endslot
        @slot('route4')
            post
        @endslot
        @slot('link4')
            募集一覧
        @endslot
        @slot('route5')
            mypage
        @endslot
        @slot('link5')
            マイページ
        @endslot
    @endcomponent
@endsection

@section('action','register')
@section('h1_title','新規会員登録')
@section('form')
    名前<span class="require">必須</span>
    @if($errors->has('name'))
         <br><span class="error">{{ $errors->first('name') }}</span>
    @endif<br>
    <input type="text" name="name" value="{{ old('name') }}"><br>
    メール<span class="require">必須</span>
    @if($errors->has('email'))
        <br><span class="error">{{ $errors->first('email') }}</span>
    @endif<br>
    <input type="text" name="email" value="{{ old('email') }}"><br>
    パスワード<span class="require">必須</span>
    @if ($errors->has('pass'))
        <br><span class="error">{{ $errors->first('pass') }}</span>
    @endif<br>
    <input type="password" name="pass"><br>
    パスワード再入力<span class="require">必須</span>
    @if ($errors->has('pass_confirmation'))
        <br><span class="error">{{ $errors->first('pass_confirmation') }}</span>
    @endif
    <br>
    <input type="password" name="pass_confirmation"><br>
    年齢<span class="require">必須</span>
    @if ($errors->has('age'))
        <br><span class="error">{{ $errors->first('age') }}</span>
    @endif
    <br>
    <input type="tel" name="age" value="{{ old('age') }}"><br>
    種別<span class="require">必須</span>
    @if ($errors->has('type'))
        <br><span class="error">{{ $errors->first('type') }}</span>
    @endif<br>
    <input type="radio" name="type" value="1" @if (old('type') == 1) checked="checked" @endif>エンジニア
    <input type="radio" name="type" value="2" @if (old('type') == 2) checked="checked" @endif>デザイナー<br>
    スキル<span class="require">必須</span>
    @if ($errors->has('skill'))
        <br/><span class="error">{{ $errors->first('skill') }}</span>
    @endif<br>
    <textarea name="skill" cols="30" rows="10">{{ old('skill') }}</textarea><br>
    プロフィール<span class="require">必須</span>
    @if ($errors->has('prof'))
        <br/><span class="error">{{ $errors->first('prof') }}</span>
    @endif
    <br>
    <textarea name="prof" cols="30" rows="10">{{ old('prof') }}</textarea><br>
    <input type="submit" value="登録">
@endsection

@section('footer')
    @component('components.footer')
    @slot('route1')
    login
    @endslot
    @slot('link1')
        ログイン
    @endslot
    @slot('route2')
        /
    @endslot
    @slot('link2')
        トップ
    @endslot
    @slot('route3')
        detail
    @endslot
    @slot('link3')
        サイト詳細
    @endslot
    @slot('route4')
        post
    @endslot
    @slot('link4')
        募集一覧
    @endslot
    @slot('route5')
        mypage
    @endslot
    @slot('link5')
        マイページ
    @endslot
    @endcomponent
@endsection

