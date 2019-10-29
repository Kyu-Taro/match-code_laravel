@extends('main.postDetailParent')
@section('title','Match-Code|投稿削除')
@section('href','/css/postDetail.css')
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

@section('top-title','投稿削除')

@section('content')
    <p>【投稿者】{{ $text->user->name }}</p><br/>
    <p>【募集人数】{{ $text->number }}</p><br/>
    <p>【内容】<br>
        {{ $text->text }}</td><td></p><br/>
    <form action="/post/{{ $text->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除" name="submit">
    </form>
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
