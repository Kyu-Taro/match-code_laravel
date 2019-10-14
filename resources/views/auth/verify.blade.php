@extends('main.postDetailParent')

@section('title','Match-Code|仮登録')
@section('href','/css/postDetail.css')
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

@section('content')
<h1>仮登録が完了しました</h1>
<p>登録のメールアドレス宛に認証メールを送信いたしました</p>
<p>メール記載のリンクから認証を行い本登録の完了を行ってください</p>
<p>また、メールが届かない場合は下記リンクをクリックしメールの再送信を行ってください</p>
 <a href="{{ route('verification.resend') }}">メール送信</a>.
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
