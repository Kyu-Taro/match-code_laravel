@extends('main.form')
@section('title','Match-Code|投稿ページ')
@section('href','css/login.css')
    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/mypage">マイページ</a></li>
            <li><a href="/post">募集一覧</a></li>
            <li><a href="/">トップ</a></li>
            <li><a href="/news">お知らせ</a></li>
            <li><a href="/logout">ログアウト</a></li>
        </ul>
    </div>

@section('header')
    @component('components.header')
    @slot('route1')
        /mypage
    @endslot
    @slot('link1')
        マイページ
    @endslot
    @slot('route2')
        /post
    @endslot
    @slot('link2')
        募集一覧
    @endslot
    @slot('route3')
        /
    @endslot
    @slot('link3')
        トップ
    @endslot
    @slot('route4')
        /news
    @endslot
    @slot('link4')
        お知らせ
    @endslot
    @slot('route5')
        /logout
    @endslot
    @slot('link5')
        ログアウト
    @endslot
    @endcomponent
@endsection

@section('action','post')
@section('h1_title','募集投稿')

@section('form')
    <input type="hidden" name="user_id" value="{{ $user->id }}">
    <label>タイトル
        @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
        @endif<br/>
        <input type="text" name="title" value="{{ old('title') }}"><br/>
    </label>
    <label>募集内容
        @if ($errors->has('text'))
            <span class="error">{{ $errors->first('text') }}</span>
        @endif<br/>
        <textarea name="text" cols="50" rows="10">{{ old('text') }}</textarea><br/>
    </label>
    <label>募集人数
        @if ($errors->has('number'))
            <span class="error">{{ $errors->first('number') }}</span>
        @endif
        <input type="tel" name="number" value="{{ old('number') }}"><br/>
    </label>
    <input type="submit" value="投稿">
@endsection

@section('footer')
    @component('components.footer')
    @slot('route1')
        /mypage
    @endslot
    @slot('link1')
        マイページ
    @endslot
    @slot('route2')
        /post
    @endslot
    @slot('link2')
        募集一覧
    @endslot
    @slot('route3')
        /
    @endslot
    @slot('link3')
        トップ
    @endslot
    @slot('route4')
        /news
    @endslot
    @slot('link4')
        お知らせ
    @endslot
    @slot('route5')
        /logout
    @endslot
    @slot('link5')
        ログアウト
    @endslot
    @endcomponent
@endsection
