@extends('main.form')
@section('href','css/login.css')
@section('title','Match-Code|ログイン')

<i class="fas fa-bars"></i>
<i class="fas fa-undo"></i>
<div class="menu">
    <span class="comment">Menu</span>
    <ul class="menu-ul">
        <li><a href="/">Top</a></li>
        <li><a href="/register">Register</a></li>
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
            register
        @endslot
        @slot('link2')
            Register
        @endslot
        @slot('route3')
            post
        @endslot
        @slot('link3')
            Post
        @endslot
        @slot('route4')
            detail
        @endslot
        @slot('link4')
            Detail
        @endslot
        @slot('route5')
            mypage
        @endslot
        @slot('link5')
            Mypage
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
            TOP
        @endslot
        @slot('route2')
            login
        @endslot
        @slot('link2')
            Login
        @endslot
        @slot('route3')
            post
        @endslot
        @slot('link3')
            Post
        @endslot
        @slot('route4')
            detail
        @endslot
        @slot('link4')
            Detail
        @endslot
        @slot('route5')
            mypage
        @endslot
        @slot('link5')
            Mypage
        @endslot
    @endcomponent
@endsection
