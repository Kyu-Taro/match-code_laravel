@extends('main.postParent')
@section('title','Match-Code|投稿一覧')
@section('href','css/post.css')
    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/">Top</a></li>
            <li><a href="/create">Create</a></li>
            <li><a href="/post">Post</a></li>
            <li><a href="/logout">Logout</a></li>
            <li><a href="/mypage">Mypage</a></li>
        </ul>
    </div>

@section('header')
    @component('components.header')
    @slot('route1')
        /
    @endslot
    @slot('link1')
        TOP
    @endslot
    @slot('route2')
        /create
    @endslot
    @slot('link2')
        Create
    @endslot
    @slot('route3')
        /post
    @endslot
    @slot('link3')
        Post
    @endslot
    @slot('route4')
        /logout
    @endslot
    @slot('link4')
        Logout
    @endslot
    @slot('route5')
        /mypage
    @endslot
    @slot('link5')
        Mypage
    @endslot
    @endcomponent
@endsection

@section('top-title','投稿一覧')

@section('content')
    @foreach ($texts as $text)
        <div class="text-content">
            <a href="post/{{ $text->id }}"><h2 class="max-height">{{ $text->title }}</h2></a><br/>
            <p class="max-height">募集人数:{{ $text->number }}名</p><br/>
            <p class="max-height">リーダー:<a href="mypageDetail/{{ $text->user_id }}">{{ $text->user->name }}</a></p><br/>
            <p class="max-height2">募集内容:<br/>{{ $text->text }}</p><br/>
        </div>
    @endforeach
@endsection

@section('footer')
@component('components.footer')
    @slot('route1')
        /
    @endslot
    @slot('link1')
        TOP
    @endslot
    @slot('route2')
        /create
    @endslot
    @slot('link2')
        Create
    @endslot
    @slot('route3')
        /post
    @endslot
    @slot('link3')
        Post
    @endslot
    @slot('route4')
        /logout
    @endslot
    @slot('link4')
        Logout
    @endslot
    @slot('route5')
        /mypage
    @endslot
    @slot('link5')
        Mypage
    @endslot
    @endcomponent
@endsection


