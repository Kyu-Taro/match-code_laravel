@extends('main.form')
@section('href','css/login.css')
@section('title','Match-Code|ログイン')

<i class="fas fa-bars"></i>
<i class="fas fa-undo"></i>
<div class="menu">
    <span class="comment">Menu</span>
    <ul class="menu-ul">
        <li><a href="/">トップ</a></li>
        <li><a href="/register">新規登録</a></li>
        <li><a href="/detail">サイト詳細</a></li>
        <li><a href="/post">募集一覧</a></li>
        <li><a href="/mypage">マイページ</a></li>
    </ul>
</div>

@section('header')
    @component('components.header')
        @slot('route1')
            /
        @endslot
        @slot('link1')
            トップ
        @endslot
        @slot('route2')
            register
        @endslot
        @slot('link2')
            新規登録
        @endslot
        @slot('route4')
            detail
        @endslot
        @slot('link4')
            サイト詳細
        @endslot
        @slot('route3')
            post
        @endslot
        @slot('link3')
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

@section('action','login')
@section('h1_title','ログイン')
@section('form')
    メール
    @if ($errors->has('email'))
        <br/><span class="error"> {{ $errors->first('email') }}</span>
    @endif
    <br>
    <input type="text" name="email" value="{{ old('email') }}"><br>
    パスワード
    @if ($errors->has('password'))
        <br/><span class="error">{{ $errors->first('password') }}</span>
    @endif
    <br>
    <input type="password" name="password"><br>
    <input type="submit" value="ログイン">
@endsection

@section('footer')
    @component('components.footer')
        @slot('route1')
            /
        @endslot
        @slot('link1')
            トップ
        @endslot
        @slot('route2')
            register
        @endslot
        @slot('link2')
            新規登録
        @endslot
        @slot('route4')
            detail
        @endslot
        @slot('link4')
            サイト詳細
        @endslot
        @slot('route3')
            post
        @endslot
        @slot('link3')
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
