@extends('main.contentDetail')
@section('title','Match-Code|マイページ')
@section('href','/css/mypageDetail.css')
    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/">Top</a></li>
            <li><a href="/create">Create</a></li>
            <li><a href="/logout">Logout</a></li>
            <li><a href="/post">Post</a></li>
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

@section('mypage-title','プロフィール')

@section('top')
    <img class="prof-img" src="@if(!empty($user->img)) {{ $user->img }} @else /img/sample.jpg @endif">
    <dl>
        <dt>名前</dt>
        <dd>{{ $user->name }}</dd>
        <dt>年齢</dt>
        <dd>{{ $user['age'] }}</dd>
        <dt>種別</dt>
        <dd>{{ $type }}</dd>
        <dt>スキル</dt>
        <dd>{{ $user->skill }}</dd>
        <dt>プロフィール</dt>
        <dd>{{ $user->prof }}</dd>
    </dl>
@endsection


@section('content')
    <h1>募集中</h1>
    <div class="div">
        @foreach ($texts as $text)
            <div class="text-content">
                <a href="/laravel-match-code/public/post/{{ $text->id }}"><h2 class="max-height">{{ $text->title }}</h2></a><br/>
                <p class="max-height">募集人数:{{ $text->number }}名</p><br/>
                <p class="max-height">リーダー:<a href="{{ $text->user->id }}">{{ $text->user->name }}</a></p><br/>
                <p class="max-height2">募集内容:<br/>{{ $text->text }}</p><br/>
            </div>
        @endforeach
    </div>
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
        /register
    @endslot
    @slot('link2')
        Register
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
