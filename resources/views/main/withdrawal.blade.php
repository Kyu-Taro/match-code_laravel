<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/withdrwal.css" type="text/css">
    <title>Match-Code|退会</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9538746713975091",
            enable_page_level_ads: true
        });
    </script>
</head>
<body>
        <i class="fas fa-bars"></i>
        <i class="fas fa-undo"></i>
        <div class="menu">
            <span class="comment">Menu</span>
            <ul class="menu-ul">
                <li><a href="/">トップ</a></li>
                <li><a href="/post">投稿一覧</a></li>
                <li><a href="/detail">サイト詳細</a></li>
                <li><a href="/mypage">マイページ</a></li>
                <li><a href="/logout">ログアウト</a></li>
            </ul>
        </div>

    @component('components.header')
    @slot('route1')
        /
    @endslot
    @slot('link1')
        トップ
    @endslot
    @slot('route2')
        /post
    @endslot
    @slot('link2')
        募集一覧
    @endslot
    @slot('route3')
        /detail
    @endslot
    @slot('link3')
        サイト詳細
    @endslot
    @slot('route4')
        /mypage
    @endslot
    @slot('link4')
        マイページ
    @endslot
    @slot('route5')
        /logout
    @endslot
    @slot('link5')
        ログアウト
    @endslot
    @endcomponent

    <main class="top-container">
        <section class="form-container">
            <div class="site-width">
                <h1 class="title">本当に退会しますか？</h1>
                <form action="/user/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                   <input type="submit" name="withdraw" value="Yes">
                   <input type="submit" name="withdraw" value="No">
                </form>
            </div>
        </section>
    </main>

    @component('components.footer')
    @slot('route1')
        /
    @endslot
    @slot('link1')
        トップ
    @endslot
    @slot('route2')
        /post
    @endslot
    @slot('link2')
        募集一覧
    @endslot
    @slot('route3')
        /detail
    @endslot
    @slot('link3')
        サイト詳細
    @endslot
    @slot('route4')
        /mypage
    @endslot
    @slot('link4')
        マイページ
    @endslot
    @slot('route5')
        /logout
    @endslot
    @slot('link5')
        ログアウト
    @endslot
    @endcomponent
</body>
</html>
