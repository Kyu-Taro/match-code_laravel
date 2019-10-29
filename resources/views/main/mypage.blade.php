@extends('main.content')
@section('title','Match-Code|マイページ')
@section('href','css/mypage.css')

    @if (session('flash_message'))
        <h1 class="msg-suc">
            {{ session('flash_message') }}
        </h1>
    @endif

    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/create">新規作成</a></li>
            <li><a href="/post">募集一覧</a></li>
            <li><a href="/setting">プロフ編集</a></li>
            <li><a href="/news">お知らせ</a></li>
            <li><a href="/logout">ログアウト</a></li>
        </ul>
    </div>

@section('header')
    @component('components.header')
    @slot('route1')
        /create
    @endslot
    @slot('link1')
        新規作成
    @endslot
    @slot('route2')
        /post
    @endslot
    @slot('link2')
        募集一覧
    @endslot
    @slot('route3')
        /setting
    @endslot
    @slot('link3')
        プロフ編集
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

@section('mypage-title','プロフィール')

@section('top')
    <img class="prof-img" src="@if(!empty($user->img)) {{ $user->img }} @else img/sample.jpg @endif">
    <dl>
        <dt>名前</dt>
        <dd>{{ $user->name }}</dd>
        <dt>年齢</dt>
        <dd>{{ $user->age }}歳</dd>
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
        @if (!(count($texts)))
            <p class="font22">募集中の投稿はありません。</p>
        @endif
        @foreach ($texts as $text)
            <div class="text-content">
                <a href="post/{{ $text->id }}"><h2 class="max-height">{{ $text->title }}</h2></a><br/>
                <p class="max-height">募集人数:{{ $text->number }}名</p><br/>
                <p class="max-height">リーダー:<a href="mypageDetail/{{ $text->user->id }}">{{ $text->user->name }}</a></p><br/>
                <p class="max-height2">募集内容:<br/>{{ $text->text }}</p><br/>
                <a class="delete-btn" href="/delete/{{ $text->id }}">削除</a>
                <a class="update-btn" href="/update/{{ $text->id }}">編集</a>
            </div>
        @endforeach
    </div>
@endsection

@section('entory')
    <h1>参加申請</h1>
    <div class="div2">
            @if (!(count($entorys)))
            <p class="font22">参加申請中の投稿はありません。</p>
        @endif
        @foreach ($entorys as $entory)
            <div class="entory-content">
                <a href="post/{{ $entory->texts_id }}"><h2 class="max-height">{{ $entory->text->title }}</h2></a><br/>
                申請者:<a href="mypageDetail/{{ $entory->user_id }}"><h2>{{ $entory->user->name }}</h2></a><br/>
                <form action="{{ route('decision') }}" method="POST">
                    @csrf
                    <input type="hidden" name="hidden" value="{{ $entory->id }}">
                    <input type="submit" value="承諾" name="submit">
                    <input type="submit" value="断る" name="submit">
                </form>
            </div>
        @endforeach
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @slot('route1')
        /create
    @endslot
    @slot('link1')
        新規作成
    @endslot
    @slot('route2')
        /post
    @endslot
    @slot('link2')
        募集一覧
    @endslot
    @slot('route3')
        /setting
    @endslot
    @slot('link3')
        プロフ編集
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
