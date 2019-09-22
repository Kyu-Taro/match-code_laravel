<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/setting.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9538746713975091",
            enable_page_level_ads: true
        });
    </script>
    <title>Match-Code|設定</title>
</head>
<body>
    <i class="fas fa-bars"></i>
    <i class="fas fa-undo"></i>
    <div class="menu">
        <span class="comment">Menu</span>
        <ul class="menu-ul">
            <li><a href="/news">News</a></li>
            <li><a href="/create">Create</a></li>
            <li><a href="/post">Post</a></li>
            <li><a href="/logout">Logout</a></li>
            <li><a href="/mypage">Mypage</a></li>
        </ul>
    </div>

    @component('components.header')
        @slot('route1')
            news
        @endslot
        @slot('link1')
            News
        @endslot
        @slot('route2')
            create
        @endslot
        @slot('link2')
            Create
        @endslot
        @slot('route3')
            post
        @endslot
        @slot('link3')
            Post
        @endslot
        @slot('route4')
            logout
        @endslot
        @slot('link4')
            Logout
        @endslot
        @slot('route5')
            mypage
        @endslot
        @slot('link5')
            Mypage
        @endslot
    @endcomponent

    <section class="setting-containers">
        <div class="setting-container">
            <div class="site-width">
                <form action="user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <label>プロフィール画像<span class="error"></span><br/>
                    <div class="area-drop">
                        ドラッグ&ドロップ
                        <img src="@if(!empty($user->img)) {{ $user->img }} @endif" class="prev-img" style="@if(!empty($user->img)) display: block @else display: none @endif">
                        <input type="file" name="img" class="input-file"><br/>
                    </div>
                    </label>
                    <label>名前
                        @if($errors->has('name'))
                            <span class="error">{{ $errors->first('name') }}</span>
                        @endif<br>
                        <input type="text" name="name" value="{{ $user->name }}"><br/>
                    </label>
                    <label>メールアドレス
                        @if ($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                        @endif<br>
                        <input type="text" name="email" value="{{ $user->email }}"><br/>
                    </label>
                    <label>年齢
                        @if ($errors->first('age'))
                            <span class="error">{{ $errors->first('age') }}</span>
                        @endif<br>
                        <input type="tel" name="age" value="{{ $user->age }}"><br/>
                    </label>
                    <label>種別
                        @if ($errors->has('type'))
                            <span class="error">{{ $errors->first('type') }}</span>
                        @endif<br/>
                        <input type="radio" name="type" value="1" @if($user->type_id == 1) checked="checked" @endif>エンジニア
                        <input type="radio" name="type" value="2" @if($user->type_id == 2) checked="checked" @endif>デザイナー<br/>
                    </label>
                    <label>スキル
                        @if ($errors->has('skill'))
                            <span class="error">{{ $errors->first('skill') }}</span>
                        @endif<br/>
                        <textarea cols="50" rows="5" name="skill">{{ $user->skill }}</textarea><br/>
                    </label>
                    <label>自己紹介
                        @if ($errors->has('prof'))
                            <span class="error">{{ $errors->first('prof') }}</span>
                        @endif<br/>
                        <textarea cols="50" rows="5" name="prof">{{ $user->prof }}</textarea><br/>
                    </label>
                    <input type="submit" value="更新">
                </form>
                <span class="delete">退会は<a href="{{ route('withdrawal') }}">こちら</a></span>
            </div>
        </div>
    </section>


    @component('components.footer')
        @slot('route1')
            news
        @endslot
        @slot('link1')
            News
        @endslot
        @slot('route2')
            create
        @endslot
        @slot('link2')
            Create
        @endslot
        @slot('route3')
            post
        @endslot
        @slot('link3')
            Post
        @endslot
        @slot('route4')
            logout
        @endslot
        @slot('link4')
            Logout
        @endslot
        @slot('route5')
            mypage
        @endslot
        @slot('link5')
            Mypage
        @endslot
    @endcomponent

</body>
</html>
