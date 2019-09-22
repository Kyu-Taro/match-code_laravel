@extends('main.updateParent')
@section('title','Match-Code|投稿ページ')
@section('href','/css/login.css')
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

@section('h1_title','募集編集')

@section('form')
    <form action="/post/{{ $text->id }}" method="POST">
        @csrf
        @method('PUT')
        <label>タイトル
            @if ($errors->has('title'))
                <span class="error">{{ $errors->first('title') }}</span>
            @endif<br/>
            <input type="text" name="title" value="{{ $text->title }}"><br/>
        </label>
        <label>募集内容
            @if ($errors->has('text'))
                <span class="error">{{ $errors->first('text') }}</span>
            @endif<br/>
            <textarea name="text" cols="50" rows="10">{{ $text->text }}</textarea><br/>
        </label>
        <label>募集人数
            @if ($errors->has('number'))
                <span class="error">{{ $errors->first('number') }}</span>
            @endif<br/>
            <input type="tel" name="number" value="{{ $text->number }}"><br/>
        </label>
        <input type="submit" value="更新"　name="submit">
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

