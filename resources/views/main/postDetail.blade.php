@extends('main.postDetailParent')
@section('title','Match-Code|投稿詳細')
@section('href','/css/postDetail.css')
    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/">Top</a></li>
            <li><a href="/logout">Logout</a></li>
            <li><a href="/post">Post</a></li>
            <li><a href="/detail">Detail</a></li>
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
        /logout
    @endslot
    @slot('link2')
        Logout
    @endslot
    @slot('route3')
        /post
    @endslot
    @slot('link3')
        Post
    @endslot
    @slot('route4')
        /detail
    @endslot
    @slot('link4')
        Detail
    @endslot
    @slot('route5')
        /mypage
    @endslot
    @slot('link5')
        Mypage
    @endslot
    @endcomponent
@endsection

@section('content')
    <h1>{{ $text->title }}</h1>
    <p>【投稿者】{{ $text->user->name }}</p><br/>
    <p>【募集人数】{{ $text->number }}</p><br/>
    <p>【内容】<br>
        {{ $text->text }}</td><td></p><br/>
    <form action="{{ route('entory') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $text->id }}" name="hidden">
        @if ($flg)
        <input class="select-btn" type="submit" value="申請済み" disabled>
        @else
            <input type="submit" value="参加申請">
        @endif
    </form>
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
            /logout
        @endslot
        @slot('link2')
            Logout
        @endslot
        @slot('route3')
            /post
        @endslot
        @slot('link3')
            Post
        @endslot
        @slot('route4')
            /detail
        @endslot
        @slot('link4')
            Detail
        @endslot
        @slot('route5')
            /mypage
        @endslot
        @slot('link5')
            Mypage
        @endslot
    @endcomponent
@endsection
